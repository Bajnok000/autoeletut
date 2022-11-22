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

    public function tulajRogzites(Request $req){
        $req -> validate(
            [
                "nev" => "required|min:5|max:20",
                "tulajdonkez" => "required",
                "tulajdoonveg" => "required",
            ],
            [
                "nev.required" => "Töltse ki a mezőt",
                "nev.min" => "Minimum 5 karaktert adjon meg",
                "nev.max" => "Maximum 20 karaktert adjon meg",
                "tulajdonkez.required" => "Töltse ki a mezőt",
                "tulajdoonveg.required" => "Töltse ki a mezőt",
            ]
            );
    }
    DB::insert("INSERT INTO tulajdonos (tulajdonos, tulajdonkezd, tulajdonvege) VALUES (?,?,?)",[$req->('tulajdonos'),
        $req->('tulajdonoskezd'),
        $req->('tulajdonosvege]')]);

        return redirect("/tulajdonos");
}
