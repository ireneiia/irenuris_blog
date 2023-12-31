@extends('dashboard.layaout')
@section('contenido')
<div  style="margin-left: 2%;">  
   <h1>Noticias</h1>
   <a class ="btn btn-succes" href ="{{route("post.create")}}"style="width: 10%;">Nuevo</a>
   <table class="table mb-3">
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
                    <a class ="btn btn-primary mt-2" href ="{{route("post.edit", $p)}}">Editar</a>
                    <a  class ="btn btn-primary mt-2" href ="{{route("post.show", $p)}}">Ver</a>
                    <form action ="{{route("post.destroy",$p) }}" method ="post">
                        @method("DELETE")
                        @csrf
                        <button class ="btn btn-danger" type ="submit">Eliminar</button>
                    </form>
                </td>  
            </tr>              
            @endforeach
        </tbody>
   </table>
   <div >
        {{$posts-> links()}}
   </div>
</div>
@endsection