<div>
    {{$slot}}

    {{$titulo}}
    @foreach ($posts as $p)
        <div class="card card-white mb-2">
            <h3>{{$p->titulo}}</h3>
            <a href="{{route("web.blog.show",$p)}}">Leer mas</a>
            <p>{{$p->descripcion}}</p>
        </div>
    @endforeach
    <div>
        {{$posts->links()}}
    </div>

    {{$pie}}
    {{$extra}}


</div>