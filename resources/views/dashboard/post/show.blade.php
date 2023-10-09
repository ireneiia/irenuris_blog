@extends('dashboard.layaout')
    @section('contenido')
    <h1>{{$post->titulo}}</h1>
    <!--PARA MOSTRAR LOS ERRORES DE VALIDACION-->
    <p>URL: {{$post->url}}</p>
    <p>DESCRIPCION: {{$post->descripcion}}</p>
    <p>POSTED: {{$post->posted}}</p>
    <div><p>Contenido:</p>{{$post->contenido}}</div> 
    @endsection