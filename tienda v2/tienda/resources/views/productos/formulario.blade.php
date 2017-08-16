@php
$readonly = null;
$disable = null;
$itemSelect = null;
$itemsSelected = null;

try {
	$itemSelect = $Producto->categoria->id;

	foreach($Producto->etiquetasasociadas as $ed){
		$itemsSelected[] = $ed->id;
	}
} catch (Exception $e) {
	$itemSelect = null;
	$itemsSelected = null;
}

if(Route::current()->getName() == 'productos.show'){
	$readonly = 'readonly';
	$disable = 'disabled';
}
else{
	$readonly = null;
	$disable = null;
}

@endphp

<div class="form-group">
	<!--titulo o nombre del control, texto del control, atributos extra-->
	{!!Form::label('nombre', 'Nombre', ['class'=>'control-label'])!!}
	{!!Form::text('nombre', $Producto->nombre, ['class'=>'form-control', $readonly])!!}
</div>
<div class="form-group">
	<!--titulo o nombre del control, texto del control, atributos extra-->
	{!!Form::label('descripcion', 'Descripción', ['class'=>'control-label'])!!}
	{!!Form::textarea('descripcion', $Producto->descripcion, ['class'=>'form-control', $readonly])!!}
</div>
<div class="form-group">
	<!--titulo o nombre del control, texto del control, atributos extra-->
	{!!Form::label('precio', 'Precio', ['class'=>'control-label'])!!}
	{!!Form::number('precio', $Producto->precio, ['class'=>'form-control', 'min'=>'0', $readonly])!!}
</div>
<div class="form-group">
	<!--titulo o nombre del control, texto del control, atributos extra-->
	{!!Form::label('categoria_id', 'Categoria', ['class'=>'control-label'])!!}
	{!!Form::select('categoria_id', $Categorias, $itemSelect, ['class'=>'form-control', $readonly, $disable])!!}
</div>
<div class="form-group">
	<!--titulo o nombre del control, texto del control, atributos extra-->
	{!!Form::label('etiquetas', 'Etiquetas', ['class'=>'control-label'])!!}
	{!!Form::select('etiquetas', $Etiquetas, $itemsSelected, ['class'=>'prettify-multiple form-control', $readonly, $disable, 'name'=>'etiquetas[]', 'multiple'])!!}
</div>
<div class="form-group">
	<!--titulo o nombre del control, texto del control, atributos extra-->
	{!!Form::label('imagen', 'Imagen', ['class'=>'control-label'])!!}
	{!!Form::text('imagen', $Producto->imagen, ['class'=>'form-control', $readonly])!!}
</div>