
 
@if($errors->any())
<h1>TEN CUIDADO QUE HAS TENIDO ALGUN FALLO!!</h1>
@foreach($errors->all() as $e)
    <div class="error">
        {{$e}}
    </div>
@endforeach
@endif