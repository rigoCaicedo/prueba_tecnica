@extends('app')
	@section('content')
		<h3>CRUD</h3>
		<div class="row d-flex justify-content-center">
			<table border="1">
				<thead>
		          <tr>
		            <th>Id</th>
		            <th>Nombres</th>
		            <th>Apellidos</th>
		            <th>Region</th>
		            <th>Eliminar</th>
		            <th>Actualizar</th>
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
		        			<a href="#" name="btn_eliminar" data-id="{{$cliente->id}}" class="btn btn-warning" data-toggle="tooltip" data-placement="right" data-original-title="Actualizar archivo">
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