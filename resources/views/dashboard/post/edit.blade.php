@extends('dashboard.layaout')
    @section('contenido')
    <h1>Editar post: {{$post->titulo}}</h1>
    <!--PARA MOSTRAR LOS ERRORES DE VALIDACION-->
    @include('dashboard.fragmentos._errores-form')
    <form action="{{ route ('post.update',$post->id)}}" method="post" enctype="multipart/form-data">
        @method("PUT")
        <!--aqui puedes poner PATCH-->
        @include('dashboard.post._form',["tarea" => "editar"])
        
    </form>  
    @endsection