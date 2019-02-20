<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    function show($id)
    {
        $product = DB::select(
            "select * from products where id = ?", [$id]
        );

        return view('pages.order',[
            'product' => $product
        ]);
    }

    function placeOrder($pid)
    {  
        $uid = Auth::user()->id;
        Order::create([
           'product_id'=>$pid,
           'user_id'=>$uid
        ]);
        return redirect("/displayorder/$pid");
    }
}
