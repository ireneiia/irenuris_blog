@extends('dashboard.layaout')
@section('contenido')
<div  style="margin-left: 2%;">  
    <h1>Crear categoria</h1>
    <!--PARA MOSTRAR LOS ERRORES DE VALIDACION-->
    @include('dashboard.fragmentos._errores-form')
    <form  action="{{ route ('category.store')}}" method="post">
        @include('dashboard.category._form')
    </form>  
</div>
@endsection