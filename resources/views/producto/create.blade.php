@extends('layouts.general')

@section('title', 'Producto')

@section('content')

<h1>{{ $producto->id == null ? "Creando " : "Modificando " }} Producto</h1>

@if($producto->id == null)
{{Form::model($producto, ['route' => ['productos.store']])}}

@else
{{Form::model($producto, ['route' => ['productos.update', $producto->id], 'method'=> 'put'])}}
@endif



<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			{{ Form::label('nombre', 'Nombre del producto') }}
			{{ Form::text('nombre', null, ['class' => 'form-control']) }}
		</div>
	</div>

	<div class="col-sm-6">
		<div class="form-group">
			{{ Form::label('cantidad', 'Cantidad') }}
			{{ Form::number('cantidad', null, ['class' => 'form-control']) }}
		</div>
	</div>	
</div>

<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			{{ Form::label('precio_compra', 'Precio de compra') }}
			{{ Form::number('precio_compra', null, ['class' => 'form-control', 'step'=>'0.1']) }}
		</div>
	</div>

	<div class="col-sm-6">
		<div class="form-group">
			{{ Form::label('precio_venta', 'Precio de venta') }}
			{{ Form::number('precio_venta', null, ['class' => 'form-control', 'step'=>'0.1']) }}
		</div>
	</div>	
</div>

<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			{{ Form::label('sku', 'Identificador &uacute;nico SKU') }}
			{{ Form::text('sku',  null, ['class' => 'form-control']) }}
		</div>
	</div>

	<div class="col-sm-6">
		<div class="form-group">
			{{ Form::label('categoria_id', 'Categoria') }}
			{{ Form::select('categoria_id', $categorias, null, ['class' => 'form-control', 'placeholder'=>'Elige una categoria']) }}
		</div>
	</div>
</div>

<div class="row">	
	<div class="col-xs-12 col-12">
		<div class="form-group">
			{{ Form::submit($producto->id == null ? "Crear producto " : "Modificar producto ", ['class' => 'form-control']) }}
		</div>
	</div>
</div>
{{ Form::close() }}

@endsection
