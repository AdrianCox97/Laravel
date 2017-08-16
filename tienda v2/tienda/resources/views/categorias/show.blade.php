@extends('layouts.app')
@section('contenido')

<h2 class="text-center">Ver Categoría</h2>
<div class="row">
	<div class="col-xs-3"></div>
	<div class="col-xs-6">
	<!-- Instalar el laravelcollective.
		 Agregar la siguiente línea en el compsoer.json>require: 
			"laravelcollective/html": "5.4.*"
		 Ejectuar composer update desde la línea de comandos.
	 -->
	<!-- Se crea el formulario utilizando los componentes de blade -->
		{!!Form::open(['route'=>array('categorias.show', $Categoria->id)])!!}
			@include('categorias.formulario')
		{!!Form::close()!!}
	</div>
	<div class="col-xs-3"></div>
</div>

@endsection