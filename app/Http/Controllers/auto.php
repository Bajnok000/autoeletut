<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class auto extends Controller
{
    //
    public function getContent(){
        return view('auto');
    }

    public function autoRogzites(Request $req){
        $req->validate(
            [
                "rendszam" => "required|min:6|max:10",
                "tipus" => "required",
                "szin" => "required",
            ],
            [
                "rendszam.required" => "Töltsd ki a mezőt",
                "rendszam.min" => "Kevesbb mint 6 karaktert adott meg",
                "rendszam.max" => "Maximum 10 karaktert irhat be",

                "tipus" => "Töltsd ki a mezőt",
                
                "szin" => "Töltsd ki a mezőt",
            ]
        );
    }
}
