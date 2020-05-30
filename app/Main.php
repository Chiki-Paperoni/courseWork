<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    public static function category($type) {
        // items.id,items.img,items.size,items.furniture,items.howtouse,seasons.season_name,categories.category_name
        $items = DB::table('items')
        ->select('items.id','items.img','seasons.season_name','categories.category_name',"price")
        ->join('categories', 'categories.id', '=', 'items.category_id')
        ->join('seasons', 'seasons.id', '=', 'items.season_id')
        ->where('categories.id', $type);
        return $items;
    }
    public static function season($type) {
        $items = DB::table('items')
        ->select('items.id','items.img','seasons.season_name','categories.category_name',"price")
        ->join('categories', 'categories.id', '=', 'items.category_id')
        ->join('seasons', 'seasons.id', '=', 'items.season_id')
        ->where('seasons.id', $type);
        return $items;
    }
    public static function allItems() {
        $items = DB::table('items')
        ->select('items.id','items.img','seasons.season_name','categories.category_name',"price")
        ->join('categories', 'categories.id', '=', 'items.category_id')
        ->join('seasons', 'seasons.id', '=', 'items.season_id');
        return $items;
    }
    public static function item($id) {
        $item = DB::table('items')
        ->select('items.id','items.img','items.size','items.furniture','items.howtouse','seasons.season_name','categories.category_name',"price")
        ->join('categories', 'categories.id', '=', 'items.category_id')
        ->join('seasons', 'seasons.id', '=', 'items.season_id')
        ->where('items.id', $id);
        return $item;
    }


}
