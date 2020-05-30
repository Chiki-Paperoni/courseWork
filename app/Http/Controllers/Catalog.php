<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Main;

class Catalog extends Controller
{
    public function getItems(Request $request) {
        $s=$request->input("s");
        $c=$request->input("c");


        if($s) {
            $data = Main::season($s)->orderByRaw('rand_id')->paginate(12);
        } else if ($c) {
            $data = Main::category($c)->orderByRaw('items.id')->paginate(12);
        } else {
            $data = Main::allItems()->paginate(12);
        }
        if ($data->total() != 0 )
            return view("catalog",["items"=>$data]);
        return redirect()->route('main');
    }
}