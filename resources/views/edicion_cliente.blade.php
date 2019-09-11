@extends('app')
	@section('content')
		<h3>Editar cliente</h3>

		<div class="row d-flex justify-content-center">
			<form action="{{ route('cliente.update')}}" method="post"  id="edit-cliente">
				{{ csrf_field() }}
				<input type="hidden" name="id_cliente" value="{{$cliente->id}}">
				<label>Nombre: </label><input type="type" name="nombre_cliente" value="{{$cliente->nombreCli}}" id="nombre_cliente"  onkeypress="return SoloLetras(event)"><br>
				<label>Apellido: </label><input type="type" name="apellido_cliente" value="{{$cliente->apellidoCli}}" id="apellido_cliente"  onkeypress="return SoloLetras(event)"><br>
				<label>Región: </label><select name="regiones" id="regiones">
					<option value="{{$cliente_region->id}}">{{$cliente_region->nombreReg}}</option>

					@foreach($regiones as $region)
					<option value="{{$region->id}}">{{$region->nombreReg}}</option>
					@endforeach	
				</select>
				<br>
				<input type="submit" name="guardar" id="guardar" value="Guardar">
				
			</form>

			
		</div>
		<div class="facturas">
			<table>
				<thead>
					<tr>
		            <th colspan="5">Facturas</th>
		            
		          </tr>
		          <tr>
		            <th>Id</th>
		            <th>Servicio</th>
		            <th>Costo</th>
		            <th>Fecha</th>
		            <th>Factura</th>
		          </tr>
		          @foreach($facturas as $factura)
		        	<tr>
		        		<td>{{$factura->id}}</td>
		        		<td>{{$factura->idServicio}}</td>
		        		<td>{{$factura->totalFact}}</td>
		        		<td>{{$factura->fechaFact}}</td>
		        		<td>
		        			<a href="{{ route('cotizacion.exportar',$factura->id) }}" name="btn_imprimir" data-id="{{$factura->id}}" class="btn btn-danger" data-toggle="tooltip" data-placement="right" data-original-title="Actualizar archivo">
		        			</a>
		        		</td>
		        	</tr>
					@endforeach
		        </thead>
		        <tbody>

		        </tbody>
			</table>
		</div>
		<script type="text/javascript" src="{{asset('js/cliente.js')}}"></script>
	@endsection