@extends('layouts.app')
@section('contenido')

<h2 class="text-center">Modificar Categoría</h2>
<div class="row">
	<div class="col-xs-3"></div>
	<div class="col-xs-6">
	<!-- Instalar el laravelcollective.
		 Agregar la siguiente línea en el compsoer.json>require: 
			"laravelcollective/html": "5.4.*"
		 Ejectuar composer update desde la línea de comandos.
	 -->
	<!-- Se crea el formulario utilizando los componentes de blade -->
		{!!Form::open(['route'=>array('categorias.update', $Categoria->id), 'method'=>'PUT'])!!}
			@include('categorias.formulario')
			<!-- Valor o texto del botón -->
			{!!Form::submit('Editar', ['class'=>'btn btn-info'])!!}
		{!!Form::close()!!}
	</div>
	<div class="col-xs-3"></div>
</div>

@endsection