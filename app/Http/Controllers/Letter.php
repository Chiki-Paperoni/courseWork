<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Main;

class Letter extends Controller
{
    public function postLetter(Request $request) {
        $email = $request->email;
        $name = $request->name;
        $text = $request->text;

        DB::table('letters')->insert([['email' => $email,'name' => $name,'letter' => $text]]);
        return view("main");
    }
}