@extends('layouts.app')
@section('contenido')

<h2 class="text-center">Agregar Categoría</h2>
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
		{!!Form::open(['route'=>'categorias.store'])!!}
			@include('categorias.formulario')
			<!-- Valor o texto del botón -->
			{!!Form::submit('Guardar', ['class'=>'btn btn-info'])!!}
		{!!Form::close()!!}
	</div>
	<div class="col-xs-3"></div>
</div>

@endsection