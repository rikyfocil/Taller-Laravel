@extends('layouts.general')

@section('content')

	<div class="row">
		<table class="table col-xs-12 col-12">
		
		<tr>
			<td>Producto</td>
			<td>Cantidad</td>
			<td>Precio de venta</td>
			<td>Opciones</td>
		</tr>

		@foreach($productos as $producto)
			@include('producto.row')
		@endforeach

		</table>
	</div>

@endsection


@push('scripts')
<script type="text/javascript" src="{{asset('js/deleter.js')}}"></script>

<script type="text/javascript">
	$('.delete').click(function(){
		var element = $(this);
		deleteRow(element);
	});
</script>
@endpush