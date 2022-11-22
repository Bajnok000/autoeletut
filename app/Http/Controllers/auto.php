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

                "tipus.required" => "Töltsd ki a mezőt",
                
                "szin.required" => "Töltsd ki a mezőt",
            ]
        );

        DB::insert("INSERT INTO autok (rendszam, tipus, szin) VALUES (?,?,?)",[
        $req->get('rendszam'),
        $req->get('tipus'),
        $req->get('szin')]);

        return redirect("/auto");
        
    }
}
