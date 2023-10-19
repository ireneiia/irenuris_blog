@extends('dashboard.layaout')
@section('contenido')
<div style="margin-left: 2%;">  
        <h1>Categorias</h1>
        <a class ="btn btn-succes my-3" href ="{{route("category.create")}}" style="width: 10%;">Nuevo</a>
        <table class="table mb-3">
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Url</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $c)
                <tr>
                    <td>{{$c->titulo}}</td> 
                    <td>{{$c->url}}</td>
                    <td>
                        <a class ="btn btn-primary mt-2" href ="{{route("category.edit", $c)}}">Editar</a>
                        <a class ="btn btn-primary mt-2" href ="{{route("category.show", $c)}}">Ver</a>
                        <form action ="{{route("category.destroy",$c) }}" method ="post">
                            @method("DELETE")
                            @csrf
                            <button class ="btn btn-danger" type="submit">Eliminar</button>
                        </form>
                    </td>  
                </tr>              
                @endforeach
            </tbody>
        </table>
        <div >
            {{$categories-> links()}}
        </div>
</div>
@endsection