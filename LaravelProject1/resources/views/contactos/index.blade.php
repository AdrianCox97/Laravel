@extends('../plantilla')
@section('Contenido')
<h2 class="text-center">Lista de Contactos</h2>
<a href="{{route('contactos.create')}}" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span></a>
<div class="row">
	<div class="col-xs-12">
		<table class="table table-bordered table-striped table-condensed table-hover table-responsive">
			<thead class="thead-inverse">
				<tr>
					<td class="text-center">ID</td>
					<td class="text-center">Nombre</td>
					<td class="text-center">Correo</td>
					<td class="text-center">Teléfono</td>
					<td class="text-center">Acciones</td>
				</tr>
			</thead>
			<tbody>
				@foreach($Contactos as $Contacto)
				<tr>
					<td class="text-center">{{$Contacto->id}}</td>
					<td class="text-center">{{$Contacto->Nombre}}</td>
					<td class="text-center">{{$Contacto->Email}}</td>
					<td class="text-center">{{$Contacto->Telefono}}</td>
					<td class="text-center">
						<a href="{{route('contactos.show', $Contacto->id)}}" class="btn btn-success"><span class="glyphicon glyphicon-eye-open"></span></a>
						<a href="{{route('contactos.edit', $Contacto->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>
						<form action="{{route('contactos.destroy', $Contacto->id)}}" method="post">
							<input name="_method" type="hidden" value="DELETE">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection