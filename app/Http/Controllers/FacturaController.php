<?php

namespace App\Http\Controllers;

use App\Factura;
use App\Cliente;
use App\Servicio;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes=Cliente::all();
        $servicios=Servicio::all();
        return view('nueva_cotizacion',compact('clientes','servicios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fechaActual = date('Y-m-d');
        $costo=Servicio::select('servicios.costoSer')->where('id',$request->servicios)->first();
        $costoFinal=$costo->costoSer;

        //validar precio por region
        $cliente=Cliente::find($request->clientes);
        $region= $cliente->idRegion;
        switch ($region) {
            //Si la región del cliente es caribe, el precio es el mismo
            case 1:
                $costoFinal=$costoFinal;
                break;
            case 2:
            //Si la region del cliente  es la Andina, se le descuenta el 10%
                $costoFinal=$costoFinal-$costoFinal*0.1;
                break;
            case 3:
                //Si la region del cliente  es la Orinoquia, se le descuenta el 20%
                $costoFinal=$costoFinal-$costoFinal*0.2;
                break;    

            default:
                # code...
                break;
        }
        $nueva_factura= new Factura();
        $nueva_factura->fechaFact=$fechaActual;

        $nueva_factura->totalFact=$costoFinal;
        $nueva_factura->idServicio=$request->servicios;
        $nueva_factura->idCliente=$request->clientes;
        $nueva_factura->save();
        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function show(Factura $factura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function edit(Factura $factura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Factura $factura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function destroy(Factura $factura)
    {
        //
    }

    public function exportarFactura($id)
    {

        if($id==0 || $id==null){
            $factura = Factura::select('facturas.*')->orderBy('facturas.id', 'DESC')->first();    
        }else{
            $factura = Factura::select('facturas.*')->where('id',$id)->orderBy('facturas.id', 'DESC')->first();
        }

        $factura = Factura::select('facturas.*')->where('id',$id)->orderBy('facturas.id', 'DESC')->first();

        $cliente = Cliente::select('clientes.*')->where('id',$factura->idCliente)->first();
        $servicio = Servicio::select('servicios.*')->where('id',$factura->idServicio)->first();

        $pdf = \PDF::loadView('factura', compact('factura','cliente','servicio'));
        return $pdf->download('factura.pdf');
    }    
}
