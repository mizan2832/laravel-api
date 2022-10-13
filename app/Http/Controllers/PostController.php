<?php

namespace App\Http\Controllers;
use App\Http\Resources\PostResource;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index(){
        $post = Post::with('user')->all();
        return  PostResource::collection(Post::all());
    }
}
