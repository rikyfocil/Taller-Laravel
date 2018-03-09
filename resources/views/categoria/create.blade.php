@extends('layouts.app')

@section('content')

    <form action="{{$categoria == null ? route('categorias.store') : route('categorias.update', [$categoria->id])}}" method="POST">
    	@if($categoria != null)
            <input type="hidden" name="id" value="{{$categoria->id}}">

            @method('PUT')
    	@endif
        <div>
            <label>Nombre de la categoria</label>
            <input 
            	type="text" 
            	name="nombre"
            	value= "{{ $categoria == null ? "" : $categoria->nombre }}"
            >
        </div>
        <input type="submit" name="">
        @csrf
    </form>

@endsection
