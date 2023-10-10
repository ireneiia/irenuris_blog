@csrf
<label>Titulo:</label>
<input type="text" name="titulo" id="titulo"value="{{old("titulo",$category->titulo)}}" >

<label>Url:</label>
<input type="text" name="url" id="url" value="{{old("url",$category->url)}}">
<button type="submit" class="btn btn-info">Enviar</button>