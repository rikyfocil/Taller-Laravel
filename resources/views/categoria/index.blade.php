@extends('layouts.app')

@section('content')

    <table>

    	<tr>
    		<td>Nombre de categor&iacute;a</td>
    		<td>ID</td>
    		<td>Fecha de creaci&oacute;n</td>
    	</tr>

		@each('categoria.row', $categorias, 'categoria')

    </table>

@endsection
