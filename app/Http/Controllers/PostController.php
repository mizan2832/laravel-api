<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return 
                [
                    'author'=>'Mizanur Rahman',
                    'title'=>'Laravel with react'
                ];
    }
}
