@extends('web.blog.layaout')
@section('contenido')
   
    <!--NOS LLEGA LA VARIABLE DESDE EL CONTROLADOR Y DESDE LA VISTA SE LO PASAMOS AL COMPONENTE AQUI ABAJO -->
    <x-web.blog.post.index :posts="$posts">
       
        @slot('titulo')
        <h1>Listado de posts</h1>
        @endslot

        @slot('extra','CALLEJON DIAGON NUMERO 7')
         

        @slot('pie')
        <footer>copy:Irenuris</footer>
        @endslot

    </x-web.blog.post.index>
@endsection