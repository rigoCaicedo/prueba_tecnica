@extends('app')
	@section('content')
		<h3>Crear cliente</h3>

		<div class="row d-flex justify-content-center">
			<form action="{{ route('cliente.store')}}" method="post" id="new-cliente">
				{{ csrf_field() }}
				
				<label>Nombre: </label><input type="type" name="nombre_cliente" value="" id="nombre_cliente" onkeypress="return SoloLetras(event)"><br>
				<label>Apellido: </label><input type="type" name="apellido_cliente" value="" id="apellido_cliente"  onkeypress="return SoloLetras(event)"><br>
				<label>Región: </label><select name="regiones" id="regiones">
					<option value="0">Seleccion una opcion</option>

					@foreach($regiones as $region)
					<option value="{{$region->id}}">{{$region->nombreReg}}</option>
					@endforeach	
				</select>
				<br>
				<input type="submit" name="guardar" id="guardar" value="Guardar">
				
			</form>
			<br>
			<script type="text/javascript" src="{{asset('js/cliente.js')}}"></script>	
		</div>

	@endsection