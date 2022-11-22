<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class baleset extends Controller
{
    //
    public function baleset(){
        return view('balesetek');
    }
    public function balesetRogzites(Request $req){
        $req -> validate(
            [
                "balesetido" => "required",
                "serules" => "required",
            ],
            [
                "balesetido.required" => "Töltse ki a mezőt",
                "serules.required" => "Töltse ki a mezőt",
            ]
            );
    }
    DB::insert("INSERT INTO baleset (balesetido, serules) VALUES (?,?)",[
        $req->get('balesetido'),
        $req->get('serules')]);

        return redirect("/baleset");
}
