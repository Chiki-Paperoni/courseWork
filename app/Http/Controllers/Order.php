<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Main;

class Order extends Controller
{
    public function postOrder(Request $request) {
        $name = $request->name;
        $surname = $request->surname;
        $phone = $request->phone;
        $np = $request->np;
        $email = $request->email;
        $order = $request->order;

        $area = json_decode(json_decode($order, true),true);
        $result = "";
        foreach($area as $item) {
            $result .= $item["id"] ;
            $result .= " ";
        }
        DB::table('orders')->insert(
        [['name' => $email,
          'surname' => $name,
          'phone' => $name,
          'np' => $name,
          'email' => $name,
          'ordered_ids' => $result]]);
        return view("main");
    }
}