<?php

namespace App\Http\Controllers;
use App\Http\Resources\UserResource;

use Illuminate\Http\Request;
use App\Models\User;
class PostController extends Controller
{
    public function index(){
        $users = User::with('roles')->get();
        return  UserResource::collection($users);
    }
}
