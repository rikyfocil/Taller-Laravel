<tr data-url="{{route('productos.destroy', [$producto->id])}}">
	<td>{{ $producto->nombre }}</td>
	<td>{{ $producto->cantidad }}</td>
	<td>{{ $producto->precio_venta }}</td>
	<td> <button class="delete"><i class="fa fa-trash-alt"></i></button></td>
</tr>