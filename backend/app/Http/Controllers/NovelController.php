<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class NovelController extends Controller
{
    public function index(){
        $novels = DB::table("novels")->select("id", "category", "hungarian_title", "price")->get();
        return view("novel.index", [
            "title" => "Regények",
            "novels" => $novels,
            "categories" => $this->categories()
        ]);

    }

    public function list($category){
        $categoryNovels = DB::table("novels")->where("category", $category)->get();
        return view("novel.index", [
            "title" => "Regények - ".$category." kategória",
            "novels" => $categoryNovels,
            "categories" => $this->categories()
        ]);
    }

    public function show($id){
        $novel = DB::table("novels")->where("id", $id)->first();
        return view("novel.show", [
            "title" => "Kiválasztott könyv adatai",
            "novel" => $novel
        ]);
    }

    private function categories() : Collection{
        $builder = DB::table("novels");
        return $builder->select("category")->distinct()->get();
    }
}
