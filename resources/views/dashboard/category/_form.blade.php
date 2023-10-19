@csrf
<label>Titulo:</label>
<input type="text" class="form-control" name="titulo" id="titulo"value="{{old("titulo",$category->titulo)}}" >

<label>Url:</label>
<input type="text" class="form-control" name="url" id="url" value="{{old("url",$category->url)}}">
<button type="submit" class ="btn btn-succes my-3" class="btn btn-info">Enviar</button>