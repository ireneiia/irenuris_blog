@extends('dashboard.layaout')
@section('contenido')
<div  style="margin-left: 2%;"> 
    <h1>Editar categoria: {{$category->titulo}}</h1>
    <!--PARA MOSTRAR LOS ERRORES DE VALIDACION-->
    @include('dashboard.fragmentos._errores-form')
    <form action="{{ route ('category.update',$category->id)}}" method="post" enctype="multipart/form-data">
        @method("PUT")
        <!--aqui puedes poner PATCH-->
        @include('dashboard.category._form',["tarea" => "editar"])
        
    </form>  
</div>
@endsection