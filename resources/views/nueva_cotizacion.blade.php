@extends('app')
	@section('content')
		<h3>Cotizaciones</h3>

		<div class="row d-flex justify-content-center">
			<form action="{{ route('cotizacion.store')}}" method="post"  id="new-cotizacion">
				{{ csrf_field() }}
				
				<label>Cliente: </label><select name="clientes" id="clientes">
					<option value="0">Seleccion una opcion</option>

					@foreach($clientes as $cliente)
					<option value="{{$cliente->id}}">{{$cliente->nombreCli}}</option>
					@endforeach	
				</select>
				<br>
				<label>Servicios: </label><select name="servicios" id="servicios">
					<option value="0">Seleccion una opcion</option>

					@foreach($servicios as $servicio)
					<option value="{{$servicio->id}}">{{$servicio->nombreSer}}</option>
					@endforeach	
				</select>
				<br>
				<!-- <label>Descripcion: </label><textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" name="descripcion"></textarea><br> -->
				<br>
				<div id="factura"></div>
				<input type="submit" name="guardar" id="guardar" value="Guardar">
				
			</form>
			<script type="text/javascript" src="{{asset('js/cotizacion.js')}}"></script>
		</div>
	@endsection