@extends('layouts.app')
@section('contenido')

<h1 class="text-center">Listado de Categorías</h1>
<div class="row">
	<div class="col-xs-12">
		<a href="{{route('categorias.create')}}" class="btn btn-success"><span class="glyphicon glyphicon-plus"> Agregar nuevas Categorías</span></a>
		<table class="table table-bordered table-hover table-striped table-responsive table-condensed">
			<thead class="thead-inverse">
				<tr>
					<td class="text-center">ID</td>
					<td class="text-center">Nombre</td>
					<td class="text-center">Descripción</td>
					<td class="text-center">Creado</td>
					<td class="text-center">Actualizado</td>
					<td class="text-center">Imagen</td>
					<td class="text-center">Acciones</td>
				</tr>
			</thead>
			<tbody>
				@foreach($Categorias as $Categoria)
					<tr>
						<td class="text-center">{{$Categoria->id}}</td>
						<td class="text-center">{{$Categoria->nombre}}</td>
						<td class="text-center">{{$Categoria->description}}</td>
						<td class="text-center">{{$Categoria->created_at}}</td>
						<td class="text-center">{{$Categoria->updated_at}}</td>
						<td class="text-center"><img src="{{$Categoria->imagen}}" width="100" alt=""></td>
						<td class="text-center">
							<a href="{{route('categorias.show', $Categoria->id)}}" class="btn btn-success"><span class="glyphicon glyphicon-eye-open"></span></a>
							<a href="{{route('categorias.edit', $Categoria->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>
							<form action="{{route('categorias.destroy', $Categoria->id)}}" method="post">
								<input name="_method" type="hidden" value="DELETE">
								<input type="hidden" name="_token" value="{{csrf_token()}}">
								<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button>
							</form>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<div class="row">
			<div class="col-xs-12 text-center">
				{{$Categorias->render()}}
			</div>
		</div>
	</div>
</div>

@endsection