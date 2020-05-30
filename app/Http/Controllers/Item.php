<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Main;

class Item extends Controller
{
    public function description(Request $request) {
        $id=$request->input("id");
    
        if($id) {
            $data = Main::item($id)->get();
            return view("item",["item"=>$data[0]]);
        }
        return redirect()->route('main');
        
    }
}