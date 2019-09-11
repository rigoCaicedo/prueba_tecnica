<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use App\Region;
use App\Factura;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes= Cliente::all();
               return view('administrador_clientes', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $regiones=Region::all();
        return view('create',compact('regiones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $nuevo_cliente= new Cliente();
        $nuevo_cliente->nombreCli=$request->nombre_cliente;
        $nuevo_cliente->apellidoCli=$request->apellido_cliente;
        $nuevo_cliente->idRegion=$request->regiones;
        $nuevo_cliente->save();
        
        return redirect('/');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($idCliente)
    {
        $cliente=Cliente::find($idCliente);
        $cliente_region=Region::where('id',$cliente->idRegion)->first();
        $regiones=Region::all()->where('id','!=',$cliente->idRegion);

        $facturas=Factura::select('facturas.*')->where('idCliente',$idCliente)->get();

        return view('edicion_cliente',compact('cliente','regiones', 'cliente_region','facturas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        try{

        
        $cliente=Cliente::find($request->id_cliente);
        $cliente->nombreCli=$request->nombre_cliente;

        $cliente->apellidoCli=$request->apellido_cliente;
        $cliente->idRegion=$request->regiones;
        $cliente->save();

        return redirect('/');

        }catch(Exception $e){
            echo $e->getMessage();
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($idCliente)
    {
        $cliente= Cliente::find($idCliente)->delete();
        return redirect('/');
    }
}
