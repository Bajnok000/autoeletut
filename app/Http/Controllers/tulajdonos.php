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
                "nev" => "requiered|min:5|max:20",
                "tulajdonkez" => "required",
                "tulajdonveg" => "required",
            ],
            [
                "nev.requiered" => "Töltse ki a mezőt",
                "nev.min" => "Minimum 5 karaktert adjon meg",
                "nev.max" => "Maximum 20 karaktert adjon meg",
                "tulajdonkez" => "Töltse ki a mezőt",
                "tulajdonveg" => "Töltse ki a mezőt",
            ]
        )
    }

}
