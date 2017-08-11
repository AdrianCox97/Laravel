@extends('../plantilla')
@section('Contenido')
<h2 class="text-center">Agregar Contacto</h2>
<div class="row">
	<div class="col-xs-3"></div>
	<div class="col-xs-6">
		<form action="{{route('contactos.index')}}" method="post">
			<input name="_token" type="hidden" value="{{csrf_token()}}">
			<div class="form-group">
				<input name="txtnombre" type="text" placeholder="Teclea tu nombre" class="form-control">
				</div>
			<div class="form-group">
				<input name="txtemail" type="email" placeholder="Teclea tu Email" class="form-control">
			</div>
			<div class="form-group">
				<input name="txtcel" type="text" placeholder="Teclea tu Cel" class="form-control">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-info">Crear</button>
			</div>
		</form>
	</div>
	<div class="col-xs-3"></div>
</div>
@endsection