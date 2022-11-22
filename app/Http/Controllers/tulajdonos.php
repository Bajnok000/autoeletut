<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tulajdonos extends Controller
{
    //
    public function getContent(){
        return view('tulajdonosok');
    }
}
