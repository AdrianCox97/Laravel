@extends('layouts.app')
@section('encabezadoExtra')

<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

@endsection
@section('contenido')

<h2 class="text-center">Agregar Producto</h2>
<div class="row">
	<div class="col-xs-3"></div>
	<div class="col-xs-6">
	<!-- Instalar el laravelcollective.
		 Agregar la siguiente línea en el compsoer.json>require: 
			"laravelcollective/html": "5.4.*"
		 Ejectuar composer update desde la línea de comandos.
	 -->

	 <!-- Se muetran los errores en caso de que la validación tenga errores.
	 Para poder acceder a los errores es necesario ejecutar el siguiente código en la línea de comandos:
	 		php artisan make:request categorias_form_request -->
	 @if($errors->any())
	 	<div class="alert alert-warning" role="alert">
	 		@foreach($errors->all() as $error)
	 			<div>
	 				{{$error}}
	 			</div>
	 		@endforeach
	 	</div>
	 @endif

	<!-- Se crea el formulario utilizando los componentes de blade -->
		{!!Form::open(['route'=>'productos.store'])!!}
			@include('productos.formulario')
			<!-- Valor o texto del botón -->
			{!!Form::submit('Guardar', ['class'=>'btn btn-info'])!!}
		{!!Form::close()!!}
	</div>
	<div class="col-xs-3"></div>
</div>

<script type="text/javascript">
	$(".prettify-multiple").select2({
		placeholder:"----------",
		allowClear:true
	});
</script>

@endsection