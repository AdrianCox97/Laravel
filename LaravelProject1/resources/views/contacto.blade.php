@extends('plantilla')
@section('Contenido')
<h2 class="text-center">Contacto</h2>
<div class="row">
	<div class="col-xs-3"></div>
	<div class="col-xs-6">
		<form action="">
			<div class="form-group">
				<input class="form-control" placeholder="Introduce un Correo" type="email">
			</div>
			<div class="form-group">
				<input class="form-control" placeholder="Comentario" type="text">
			</div>
			<div class="form-group">
				<input class="btn btn-success" value="Enviar" type="submit">
			</div>
		</form>
	</div>
	<div class="col-xs-3"></div>
</div>
@endsection