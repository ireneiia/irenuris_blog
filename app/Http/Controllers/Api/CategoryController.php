<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\category\PutRequest;
use App\Http\Requests\category\StoreRequest;
use App\Models\Category;
use App\Models\Dashboard\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        return response()->json( Category::paginate(2));
    }

    public function all()
    {
        return response()->json(Category::get());
    }
    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
       return response()->json(Category::create($request->validated()));
   
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
        return response() -> json($category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Category $category)
    {
        //
       $category->update($request->validated());
       return response()->json($category);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json("ok");
    }

    public function posts(Category $category)
    {   
        /*
        //->query builder
        $posts = Post::join('categories',"categories.id","=","posts.categoria_id")
        ->select("posts.*","categories.titulo as categoria")
        ->where("categories.id",$category->id)
        ->get();
        //->toSql();=muestra la sql por pantalla*/

        //eloquent
        $posts = Post::with("categoria")
        ->where("categoria_id",$category->id)
        ->get();
        return response()->json($posts);
    }

    public function url($url){
        $category = Category::where("url",$url)->firstOrFail();
        return response()->json($category);

    }
}
