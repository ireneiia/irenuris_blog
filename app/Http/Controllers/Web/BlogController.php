<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    
    public function index()
    {
        $posts = Post::where("posted","si")->paginate(2);
       // var_dump($posts);
        return view ("web.blog.index",compact("posts"));
    }

    public function show(Post $post)
    {
        return view ("web.blog.show",compact("post"));
        
    }

    
}
