<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function show($cat)
    {
        $products = DB::select("select * from products where category = ?",[$cat]);
        //dd($products);
    	return view('pages.category',compact('products'));
    }
}
