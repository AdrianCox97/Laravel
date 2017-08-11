@extends('../plantilla')
@section('Contenido')
<h2 class="text-center">Editar Contacto</h2>
<div class="row">
	<div class="col-xs-3"></div>
	<div class="col-xs-6">
		<form action="../{{$Contacto->id}}" method="post">
			<input name="_method" type="hidden" value="PUT">
			<input name="_token" type="hidden" value="{{csrf_token()}}">
			<div class="form-group">
				<input name="txtnombre" type="text" placeholder="Teclea tu nombre" value="{{$Contacto->Nombre}}" class="form-control">
				</div>
			<div class="form-group">
				<input name="txtemail" type="email" placeholder="Teclea tu Email" value="{{$Contacto->Email}}" class="form-control">
			</div>
			<div class="form-group">
				<input name="txtcel" type="text" placeholder="Teclea tu Cel" value="{{$Contacto->Telefono}}" class="form-control">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-info">Modificar</button>
			</div>
		</form>
	</div>
	<div class="col-xs-3"></div>
</div>
@endsection