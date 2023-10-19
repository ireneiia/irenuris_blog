@extends('dashboard.layaout')
@section('contenido')
<div style="margin-left: 2%;"> 
    <h1>Editar post: {{$post->titulo}}</h1>
    <!--PARA MOSTRAR LOS ERRORES DE VALIDACION-->
    @include('dashboard.fragmentos._errores-form')
    <form action="{{ route ('post.update',$post->id)}}" method="post" enctype="multipart/form-data">
        @method("PUT")
        @include('dashboard.post._form',["tarea" => "editar"])
    </form> 
</div> 
@endsection