<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\post\PutRequest;
use App\Http\Requests\post\StoreRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Post::paginate(2));
    }

    public function all()
    {
        return response()->json(Post::get());
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        return response()->json(Post::create($request->validated()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return response()->json($post);
    }

    /*
    public function url($url){
        $post = Post::with("categoria")->where("url",$url)->firstOrFail();
        //$post->categoria;
        return response()->json($post);

    }
    */
    public function url(Post $post){
        //$post = Post::with("categoria")->where("url",$url)->firstOrFail();
        $post->categoria;
        return response()->json($post);

    }
    /**
     * Update the specified resource in storage.
     */

    public function update(PutRequest $request, Post $post)
    {
        $post->update($request->validated());
        return response()->json($post);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return response()->json("ok");
    }
}
