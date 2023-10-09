@extends('dashboard.layaout')

@section('contenido')
   <h1>Aqui vienen las noticias</h1>
   <a href ="{{route("post.create")}}">Nuevo</a>
   <table>
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
                    <a href ="{{route("post.edit", $p)}}">Editar</a>
                    <a href ="{{route("post.show", $p)}}">Ver</a>
                    <form action ="{{route("post.destroy",$p) }}" method ="post">
                        @method("DELETE")
                        @csrf
                        <button type ="submit">Eliminar</button>
                    </form>
                </td>  
            </tr>              
            @endforeach
        </tbody>
   </table>
   {{$posts-> links()}}
@endsection