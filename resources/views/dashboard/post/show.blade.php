@extends('dashboard.layaout')
@section('contenido')
<div style="margin-left: 2%;"> 
    <h1>Noticia:</h1>
    <!--PARA MOSTRAR LOS ERRORES DE VALIDACION-->
    <p>TITULO: {{$post->titulo}}</p>
    <p>URL: {{$post->url}}</p>
    <p>DESCRIPCION: {{$post->descripcion}}</p>
    <p>POSTED: {{$post->posted}}</p>
    <div><p>Contenido:</p>{{$post->contenido}}</div> 
</div>
@endsection