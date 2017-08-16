@php
$readonly;

if(Route::current()->getName() == 'categorias.show'){
	$readonly = 'readonly';
}
else{
	$readonly = null;
}
@endphp

<div class="form-group">
	<!--titulo o nombre del control, texto del control, atributos extra-->
	{!!Form::label('nombre', 'Nombre', ['class'=>'control-label'])!!}
	{!!Form::text('nombre', $Categoria->nombre, ['class'=>'form-control', $readonly])!!}
</div>
<div class="form-group">
	<!--titulo o nombre del control, texto del control, atributos extra-->
	{!!Form::label('descripcion', 'Descripción', ['class'=>'control-label'])!!}
	{!!Form::textarea('descripcion', $Categoria->description, ['class'=>'form-control', $readonly])!!}
</div>
<div class="form-group">
	<!--titulo o nombre del control, texto del control, atributos extra-->
	{!!Form::label('imagen', 'Imagen', ['class'=>'control-label'])!!}
	{!!Form::text('imagen', $Categoria->imagen, ['class'=>'form-control', $readonly])!!}
</div>