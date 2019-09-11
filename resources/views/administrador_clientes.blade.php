@extends('app')
	@section('content')
		<h3>CRUD</h3>
					<div class="justify-content-center">
				<a href="{{ route('cliente.create')}}"><input type="button" name="crear" value="Nuevo cliente"></a>
				<a href="{{ route('cotizacion.create')}}"><input type="button" name="crear" value="Nueva Cotizacion"></a>
			</div>
		<div class="row d-flex justify-content-center">

			<br>
			<table border="1">
				<thead>
		          <tr>
		            <th>Id</th>
		            <th>Nombres</th>
		            <th>Apellidos</th>
		            <th>Region</th>
		            <th>Borrar</th>
		            <th>Editar</th>
		          </tr>
		        </thead>
		        <tbody>
		        	@foreach($clientes as $cliente)
		        	<tr>
		        		<td>{{$cliente->id}}</td>
		        		<td>{{$cliente->nombreCli}}</td>
		        		<td>{{$cliente->apellidoCli}}</td>
		        		<td>{{$cliente->idRegion}}</td>
		        		<td>
		        			<a href="{{ route('cliente.destroy',$cliente->id) }}" name="btn_eliminar" data-id="{{$cliente->id}}" class="btn btn-warning" data-toggle="tooltip" data-placement="right" data-original-title="Actualizar archivo">
		        			</a>
		        		</td>
		        		<td>
		        			<a href="{{ route('cliente.edit', $cliente->id) }}" name="btn_actualizar" data-id="{{$cliente->id}}" class="btn btn-info" data-toggle="tooltip" data-placement="right" data-original-title="Actualizar archivo">
		        			</a>
		        		</td>
		        	</tr>
					@endforeach
		        	
		        </tbody>
			</table>
		</div>
	@endsection