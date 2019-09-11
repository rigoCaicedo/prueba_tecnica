@extends('app')
	@section('content')
		<h3>Editar cliente</h3>

		<div class="row d-flex justify-content-center">
			<form action="{{ route('cliente.update')}}" method="post">
				{{ csrf_field() }}
				<input type="hidden" name="id_cliente" value="{{$cliente->id}}">
				<label>Nombre: </label><input type="type" name="nombre_cliente" value="{{$cliente->nombreCli}}" id="nombre_cliente"><br>
				<label>Apellido: </label><input type="type" name="apellido_cliente" value="{{$cliente->apellidoCli}}" id="nombre_cliente"><br>
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
	@endsection