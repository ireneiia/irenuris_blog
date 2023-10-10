@extends('dashboard.layaout')
@section('contenido')
@include('dashboard.fragmentos.menu')
<div class="row espacio" style="margin-left: 2%;">  
   <h1>Noticias</h1>
   <hr class="hr"/>
   <a class="btn btn-info" href ="{{route("post.create")}}"style="width: 10%;">Nuevo</a>
   <table class="espacio table">
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Categoria</th>
                <th>Estado</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $p)
            <tr>
                <td>{{$p->titulo}}</td> 
                <td>{{$p->categoria->titulo}}</td>  
                <td>{{$p->posted}}</td>
                <td>
                    <a class="btn btn-info" href ="{{route("post.edit", $p)}}">Editar</a><br><br>
                    <a class="btn btn-info" href ="{{route("post.show", $p)}}">Ver</a><br><br>
                    <form action ="{{route("post.destroy",$p) }}" method ="post">
                        @method("DELETE")
                        @csrf
                        <button class="btn btn-info" type ="submit">Eliminar</button>
                    </form>
                </td>  
            </tr>              
            @endforeach
        </tbody>
   </table>
   <div class="espacio">
        {{$posts-> links()}}
   </div>
</div>
@endsection