<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\category\PutRequest;
use App\Http\Requests\category\StoreRequest;
use App\Models\Dashboard\Category;

/**
 * Summary of CategoryController
 */
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::paginate(2);
        return view('dashboard.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category= new Category();
        echo view ('dashboard.category.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    //public function store(Request $request)
     public function store(StoreRequest $request)
    {   Category::create($request -> validated());
        return to_route("category.index")->with('status',"Se ha creado correctamente");;
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {  // dd($category);
       return view("dashboard.category.show",compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
       echo view ('dashboard.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Category $category)
    {
        $category->update($request->validated());
        return to_route("category.index")->with('status',"Se edito correctamente");

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return to_route("category.index")->with('status',"Se ha eliminado el registro");;

    }
}
