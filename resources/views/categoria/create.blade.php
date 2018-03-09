@extends('layouts.app')

@section('content')

    <form action="{{route('categorias.store')}}" method="POST">
        <div>
            <label>Nombre de la categoria</label>
            <input type="text" name="nombre">
        </div>
        <input type="submit" name="">
        @csrf
    </form>

@endsection
