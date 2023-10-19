<!--{ {$changeTitulo()} }-->
<!--<x-alert class="mb-4" type='Error' :message= "$ post- >titulo" data-id='1' data-priority='medium'/>-->
{{--<div {{$attributes-> class(['mb-5','bg-blue-100' => $post->titulo])->merge(['other-attr' => 'data-1'])}}>
<div {{$attributes-> merge(['class' => 'mb-5','other-attr' => 'data-1'])}}>--}}
<div>
    <h1>{{$post->titulo}}</h1>
    <p>{{$post->created_add}}</p>
    <p>{{$post->contenido}}</p>
</div>
