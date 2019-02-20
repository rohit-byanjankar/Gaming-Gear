<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function show(Request $request)
    {
        $data = $request->input('search');
        $products = DB::select("select * from products where name LIKE '%".$data."%'");
        return view('pages.search',['request'=>$request,'products'=>$products]);
    }
}
