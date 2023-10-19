@extends('web.blog.layaout')
@section('contenido')
   
    <!--NOS LLEGA LA VARIABLE DESDE EL CONTROLADOR Y DESDE LA VISTA SE LO PASAMOS AL COMPONENTE AQUI ABAJO -->
    {{--<x-alert class="mb-4" type='Error' :message="$post->titulo" data-id='1' data-priority='medium'/>--}}
    <x-web.blog.post.show :post="$post" class="bg-red-100"/>
    {{--<p>DINAMICO</p>
    <x-dynamic-component component='alert' type='error' :message="$post->titulo" data-id='1' data-priority="medium"/>
    <x-dynamic-component component='web.blog.post.show' :post="$post" class="bg-red-100" other-attr="data2"/>--}}

@endsection