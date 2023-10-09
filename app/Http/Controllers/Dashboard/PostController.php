<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\post\PutRequest;
use App\Http\Requests\post\StoreRequest;
//use App\Http\Requests\Post\StoreRequest;
use App\Models\Dashboard\Categoria;
use App\Models\Dashboard\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use illuminate\Support\Str;
/**
 * Summary of PostController
 */
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //obtener cuantos post tienen esta categoria 
        //dd(Categoria::find(1)->posts);
        $posts = Post::paginate(2);
        return view('dashboard.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        //User::get()->where();
        //para traer las categorias de la bbdd
        //$categoria= Categoria :: get();
        //para ver las categorias
        //dd($categoria[0]->titulo);

        //oitra forma de listas las categorias
        $categoria= Categoria :: pluck('id','titulo');
        $post= new Post();
        echo view ('dashboard.post.create', compact('categoria','post'));
    }

    /**
     * Store a newly created resource in storage.
     */
    //public function store(Request $request)
     public function store(StoreRequest $request)
    {   //PARA MANIPULAR LOS DATOS
        // echo "aqui vamos a guardar";
        //para guardar lo que viene de formulario nuevo
        //dd(request("titulo"));
        //echo (request("titulo"));
        //echo $request->input('url');  
        //dd ($request->all());  
        //PARA USAR LAS VALIDACIONES DESDE AQUI 
        //si la defines arriba y lo devuleves abajo 
        /*
        ESTO ES UTIL CUANDO QUIERES USAR UNA VALIDACION HCER MAS COSAS Y LUEGO APLICAR MAS VALIDACIONES
        $validado = $request->validate([
            "titulo"=>"required"
        ]);*/ 
       
      //  $data = $request->validate(StoreRequest::misReglas());
       // dd($data);

        //$validado= Validator::make($request->all(),StoreRequest::misReglas());
        //para ver los errores de validacion
        //dd($validado->errors());
       // dd($validado->fails());
      /*
      una manera de crear el slug
      $data=$request->validated();
       $data['url']= str::slug($data['titulo']);
        dd($data['url']);*/
       // $data = array_merge($request->all(),['imagen' =>'']);
        //dd($data);
        /*$data = $request -> validated();
        $data['url']= str::slug($data['titulo']);
        dd($data);*/
        Post::create($request -> validated());
        //return route("post.index");
        return to_route("post.index")->with('status',"Se ha creado correctamente");;
        
        //PASARLE TODOS LOS DATOS
        //Post::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
       return view("dashboard.post.show",compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
        
        $categoria= Categoria :: pluck('id','titulo');
        echo view ('dashboard.post.edit', compact('categoria','post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Post $post)
    {
        //
       ///dd($request->imagen);
       $data = $request->validated();
        if( isset($data["imagen"])){
            //dd($request->validated()["imagen"]->extension());
            //dd($request->validated()["imagen"]->getClientOriginalName());
            $data["imagen"]= $filename= $post->url.time().".".$data["imagen"]->extension();
            //dd($filename);

            $request->imagen->move(public_path("imagen"),$filename);
        }
        $post->update($data);
        //$request->session()->flash('status',"Se edito correctamente");
        
        // return to_route("post.index");
         return to_route("post.index")->with('status',"Se edito correctamente");

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
        $post->delete();
        //echo "VAMOS A DESTUIR";
        return to_route("post.index")->with('status',"Se ha eliminado el registro");;

    }
}
