<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function show($novelid){
        $orders = DB::table("orders")->where("novel_id", $novelid);
        $novelTitle = DB::table("novels")->first("id", $novelid)->value('hungarian_title');
        return view("order.show", [
            "title" => $novelTitle." című könyv rendelései",
            "orders" => $orders->get(),
            "novelTitle" => $novelTitle,
            "count" => $orders->count()
        ]);
    }
}
