@extends('dashboard.layaout')
@section('contenido')
@include('dashboard.fragmentos.menu')
<div class="row espacio" style="margin-left: 2%;">  
        <h1>Categorias</h1>
        <hr class="hr"/>
        <a  class="btn btn-info"  href ="{{route("category.create")}}" style="width: 10%;">Nuevo</a>
        <table class="espacio table">
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
                        <a class="btn btn-info" href ="{{route("category.edit", $c)}}">Editar</a><br><br>
                        <a class="btn btn-info"href ="{{route("category.show", $c)}}">Ver</a><br><br>
                        <form action ="{{route("category.destroy",$c) }}" method ="post">
                            @method("DELETE")
                            @csrf
                            <button type="submit" class="btn btn-info">Eliminar</button>
                        </form>
                    </td>  
                </tr>              
                @endforeach
            </tbody>
        </table>
        <div class="espacio">
            {{$categories-> links()}}
        </div>
</div>
@endsection