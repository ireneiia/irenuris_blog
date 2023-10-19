@csrf
<label>Titulo:</label>
<input type="text" class="form-control" name="titulo" id="titulo"value="{{old("titulo",$post->titulo)}}" >
<label>Url:</label>
<input type="text" class="form-control" name="url" id="url" value="{{old("url",$post->url)}}">
<label>Contenido:</label>
<textarea name="contenido" class="form-control" id="contenido">{{old("contenido",$post->contenido)}}</textarea>
<label>Descripcion:</label>
<textarea name="descripcion" class="form-control" id="descripcion">{{old("descripcion",$post->descripcion)}}</textarea>
<label>Categoria:</label>
<select name="categoria_id" class="form-control" id="categoria_id">
    <option value="0">Seleccione una opción</option>
        <!--@ foreach ($categoria as $c)
            <option value="{ {$c->id}}">{ {$c->titulo}}</option> 
        @ endforeach-->
        @foreach ($categoria as $titulo => $id)
            <option {{old("categoria_id",$post->categoria_id) == "$id" ? "selected" : ""}} value="{{$id}}">{{$titulo}}</option> 
        @endforeach
</select>
<label>Publicado:</label>
<select name="posted" class="form-control" id="posted">
    <option {{old("posted",$post->posted) == "si" ? "selected" : ""}} value="si">Si</option>
    <option  {{old("posted",$post->posted) == "no" ? "selected" : ""}}  value="no">No</option>
</select>
@if ( isset($tarea) && $tarea== "editar")
<label for="">Imagen</label>
<input type="file" name="imagen" id="imagen" class="form-control">
@endif
<button type="submit" class ="btn btn-succes my-3" >Enviar</button></div>

