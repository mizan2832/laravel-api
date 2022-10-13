<?php

namespace App\Http\Controllers;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use DB;
class PracticeController extends Controller
{
    public function index(){

        $users = DB::table('0_daily_attendance')->take(5)
        ->get();
        
        
        dd($users);
    }

}
