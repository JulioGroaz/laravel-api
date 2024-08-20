<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return response()->json([
            $posts = Post::all();

            return response()->json($posts)
        ])
    }
    public function show(Post $post){

    }
}
