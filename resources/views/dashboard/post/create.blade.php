@extends('dashboard.layaout')
<div style="margin-left: 2%;">  
        @section('contenido')
        <h1>Crear post</h1>
        <!--PARA MOSTRAR LOS ERRORES DE VALIDACION-->
        @include('dashboard.fragmentos._errores-form')
        <form action="{{ route ('post.store')}}" method="post">
            @include('dashboard.post._form')
        </form>  
    </div>
@endsection