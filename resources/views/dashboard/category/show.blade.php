@extends('dashboard.layaout')
@section('contenido')
@include('dashboard.fragmentos.menu')
<div class="row espacio" style="margin-left: 2%;"> 
    <h1>Categoria:</h1>
    <hr class="hr"/>
    <p class="espacio" >NOMBRE: {{$category->titulo}}</p>
    <p class="espacio" >URL: {{$category->url}}</p>
</div>
@endsection