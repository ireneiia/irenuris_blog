@csrf
<!-- titulo,url,contenido,imagen,posted-->
<label>Titulo:</label>
<input type="text" name="titulo" id="titulo"value="{{old("titulo",$post->titulo)}}" >

<label>Url:</label>
<input type="text" name="url" id="url" value="{{old("url",$post->url)}}">

<label>Contenido:</label>
<textarea name="contenido" id="contenido">{{old("contenido",$post->contenido)}}</textarea>

<label>Descripcion:</label>
<textarea name="descripcion" id="descripcion">{{old("descripcion",$post->descripcion)}}</textarea>

<label>Categoria:</label>
<select name="categoria_id"  id="categoria_id">
    <option value="0">Seleccione una opción</option>
        <!--@ foreach ($categoria as $c)
            <option value="{ {$c->id}}">{ {$c->titulo}}</option> 
        @ endforeach-->
        @foreach ($categoria as $titulo => $id)
            <option {{old("categoria_id",$post->categoria_id) == "$id" ? "selected" : ""}} value="{{$id}}">{{$titulo}}</option> 
        @endforeach
    
</select>

<label>Publicado:</label>
<select name="posted"  id="posted">
    <option {{old("posted",$post->posted) == "si" ? "selected" : ""}} value="si">Si</option>
    <option  {{old("posted",$post->posted) == "no" ? "selected" : ""}}  value="no">No</option>
</select>
@if ( isset($tarea) && $tarea== "editar")
    <label for="">Imagen</label>
    <input type="file" name="imagen" id="imagen">
@endif


<button type="submit">Enviar</button>