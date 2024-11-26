<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function index(){
        return view("site.index", ["title"=>"Agatha Chritstie"]);
    }

    public function oldestnovel(){
        $oldest = DB::table("novels")->orderBy("year")->first();
        return view("novel.show", [
            "title" => "Legrégebbi könyv adatai",
            "novel" => $oldest
        ]);
    }

    public function cheapest(){
        $cheapest = DB::table("novels")->orderBy("price")->first();
        return view("novel.show", [
            "title" => "Legolcsóbb könyv",
            "novel" => $cheapest
        ]);
    }

    public function murder(){
        $gyilkos = DB::table("novels")->where("hungarian_title", "like", "%gyilkos%")->orWhere("english_title", "like", "%murder%")->get();
        return view("novel.index", [
            "title" => "Gyilkos könyvek",
            "novels" => $gyilkos,
            "murder" => true
        ]);
    }

    public function fifties(){
        $fifties = DB::table("novels")->whereBetween("year", [1950, 1959])->get();
        return view("novel.index", [
            "title" => "1950-es évek regényei",
            "novels" => $fifties,
            "fifties" => true
        ]);
    }
    
    public function mostorders(){
        $most = DB::table("orders")->orderByDesc("piece")->first();
        $novel = DB::table("novels")->where("id",$most->novel_id)->first();
        return view("novel.show", [
            "title" => "Legtöbb példányszámú rendelés",
            "novel" => $novel,
            "themostorders" => $most->piece
        ]);
    }
}
