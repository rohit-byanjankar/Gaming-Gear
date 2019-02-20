<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    function show($id)
    {
        $product = DB::select(
            "select * from products where id = ?", [$id]
        );

        return view('pages.productdetail',[
            'product' => $product
        ]);
    }
}
