<?php

namespace App\Http\Controllers;
use App\Http\Resources\PostResource;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index($id=null){
        return  $id?new PostResource(Post::findOrFail($id)):new PostResource(Post::findOrFail($id));
    }
}
