@csrf
<!-- titulo,url,contenido,imagen,posted-->

<div class="row espacio">
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-4">
                <label>Titulo:</label>
            </div>
            <div class="col-md-4">
                <input type="text" name="titulo" id="titulo"value="{{old("titulo",$post->titulo)}}" >
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-4">
                <label>Url:</label>
            </div>
            <div class="col-md-4">
                <input type="text" name="url" id="url" value="{{old("url",$post->url)}}">
            </div>
        </div>
    </div>
</div>

<div class="row espacio">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-1">
                <label>Contenido:</label>
            </div>
            <div class="col-md-4">    
                <textarea name="contenido" id="contenido">{{old("contenido",$post->contenido)}}</textarea>
            </div>
        </div>
    </div>
</div>
<div class="row espacio">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-1">
                <label>Descripcion:</label>
            </div>
            <div class="col-md-4">
                <textarea name="descripcion" id="descripcion">{{old("descripcion",$post->descripcion)}}</textarea>
            </div>
        </div>    
    </div>
</div>
<div class="row espacio">
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-6">
                <label>Categoria:</label>
            </div>
            <div class="col-md-4">
                <select name="categoria_id"  id="categoria_id">
                    <option value="0">Seleccione una opción</option>
                        <!--@ foreach ($categoria as $c)
                            <option value="{ {$c->id}}">{ {$c->titulo}}</option> 
                        @ endforeach-->
                        @foreach ($categoria as $titulo => $id)
                            <option {{old("categoria_id",$post->categoria_id) == "$id" ? "selected" : ""}} value="{{$id}}">{{$titulo}}</option> 
                        @endforeach
                </select>
            </div>
    
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <label>Publicado:</label>
                    </div>
                    <div class="col-md-2">
                        <select name="posted"  id="posted">
                            <option {{old("posted",$post->posted) == "si" ? "selected" : ""}} value="si">Si</option>
                            <option  {{old("posted",$post->posted) == "no" ? "selected" : ""}}  value="no">No</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row espacio">
    <div class="col-md-4">
        @if ( isset($tarea) && $tarea== "editar")
        <label for="">Imagen</label>
        <input type="file" name="imagen" id="imagen">
        @endif
    </div>
    <div class="col-md-4"><button type="submit" class="btn btn-info">Enviar</button></div>
</div>
