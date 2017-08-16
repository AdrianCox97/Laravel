@extends('layouts.app')
@section('contenido')

<h1 class="text-center">Listado de Productos</h1>
<div class="row">
	<div class="col-xs-12">
		<a href="{{route('productos.create')}}" class="btn btn-success"><span class="glyphicon glyphicon-plus"> Agregar nuevos Productos</span></a>
		<table class="table table-bordered table-hover table-striped table-responsive table-condensed">
			<thead class="thead-inverse">
				<tr>
					<td class="text-center">ID</td>
					<td class="text-center">Nombre</td>
					<td class="text-center">Descripción</td>
					<td class="text-center">Precio</td>
					<td class="text-center">Categoría</td>
					<td class="text-center">Imagen</td>
					<td class="text-center">Acciones</td>
				</tr>
			</thead>
			<tbody>
				@forelse($Productos as $Producto)
					<tr>
						<td class="text-center">{{$Producto->id}}</td>
						<td class="text-center">{{$Producto->nombre}}</td>
						<td class="text-center">{{$Producto->descripcion}}</td>
						<td class="text-center">{{$Producto->precio}}</td>
						<td class="text-center">{{$Producto->categoria->nombre}}</td>
						<td class="text-center"><img src="{{$Producto->imagen}}" width="100" alt=""></td>

						<td class="text-center">
							<a href="{{route('productos.show', $Producto->id)}}" class="btn btn-success"><span class="glyphicon glyphicon-eye-open"></span></a>
							<a href="{{route('productos.edit', $Producto->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>
							<form action="{{route('productos.destroy', $Producto->id)}}" method="post">
								<input name="_method" type="hidden" value="DELETE">
								<input type="hidden" name="_token" value="{{csrf_token()}}">
								<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button>
							</form>
						</td>
					</tr>
					@empty
					<tr>
						<td colspan="7" class="alert alert-danger">
							<div class="text-center ">No hay productos registrados</div>
						</td>
					</tr>
				@endforelse
			</tbody>
		</table>
		<div class="row">
			<div class="col-xs-12 text-center">
				{{$Productos->render()}}
			</div>
		</div>
	</div>
</div>

@endsection