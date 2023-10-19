@extends('dashboard.layaout')
@section('contenido')
<h1>Categoria:</h1>
    <p>NOMBRE: {{$category->titulo}}</p>
    <p>URL: {{$category->url}}</p>
@endsection