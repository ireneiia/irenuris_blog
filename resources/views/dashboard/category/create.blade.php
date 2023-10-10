@extends('dashboard.layaout')
@section('contenido')
@include('dashboard.fragmentos.menu')
<div class="row espacio" style="margin-left: 2%;">  
    <h1>Crear categoria</h1>
    <hr class="hr"/>
    <!--PARA MOSTRAR LOS ERRORES DE VALIDACION-->
    @include('dashboard.fragmentos._errores-form')
    <form class="espacio" action="{{ route ('category.store')}}" method="post">
        @include('dashboard.category._form')
    </form>  
</div>
@endsection