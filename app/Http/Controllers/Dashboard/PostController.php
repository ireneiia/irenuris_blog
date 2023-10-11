<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\post\PutRequest;
use App\Http\Requests\post\StoreRequest;
use App\Models\Dashboard\Categoria;
use App\Models\Dashboard\Category;
use App\Models\Dashboard\Post;

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
        $posts = Post::paginate(2);
        return view('dashboard.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categoria= Category :: pluck('id','titulo');
        $post= new Post();
        echo view ('dashboard.post.create', compact('categoria','post'));
    }

    /**
     * Store a newly created resource in storage.
     */
    //public function store(Request $request)
     public function store(StoreRequest $request)
    {   Post::create($request -> validated());
        return to_route("post.index")->with('status',"Se ha creado correctamente");
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {  // dd($post);
       return view("dashboard.post.show",compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categoria= Category :: pluck('id','titulo');
       
        echo view ('dashboard.post.edit', compact('categoria','post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Post $post)
    {
       $data = $request->validated();
        if( isset($data["imagen"])){
            $data["imagen"]= $filename= $post->url.time().".".$data["imagen"]->extension();
            $request->imagen->move(public_path("imagen"),$filename);
        }
        $post->update($data);
        return to_route("post.index")->with('status',"Se edito correctamente");

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return to_route("post.index")->with('status',"Se ha eliminado el registro");

    }
}
