@extends('dashboard.layaout')
@include('dashboard.fragmentos.menu')
    <div class="row espacio" style="margin-left: 2%;">  
        @section('contenido')
        <h1>Crear post</h1>
        <hr class="hr"/>
        <!--PARA MOSTRAR LOS ERRORES DE VALIDACION-->
        @include('dashboard.fragmentos._errores-form')
        <form action="{{ route ('post.store')}}" method="post">
            @include('dashboard.post._form')
        </form>  
    </div>
@endsection