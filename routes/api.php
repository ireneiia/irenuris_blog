<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\UserController;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::resource('category', CategoryController::class)->except(["created","edit"]);
    Route::resource('post', PostController::class)->except(["created","edit"]);
});


Route::get('post/all', [PostController::class,'all']);
//Route::get('post/url/{url}', [PostController::class,'url']);
Route::get('post/url/{post:url}', [PostController::class,'url']);



Route::get('category/all', [CategoryController::class,'all']);
Route::get('category/{category}/posts', [CategoryController::class,'posts']);

//Route::get('category/url/{url}', [CategoryController::class,'url']);


//usuarios
Route::post('user/login',[UserController::class,'login']);
///$user->tokens()->delete();







