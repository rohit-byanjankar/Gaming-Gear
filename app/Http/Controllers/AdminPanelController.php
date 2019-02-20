<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\Order;
use App\User;
use Illuminate\Support\Facades\DB;

class AdminPanelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     
    public function __construct(){
        //$this->middleware('auth:admin',['except'=>['login']]);
    }

    public function index()
    {
        
        return view('adminpanel.main');
    }


    public function viewOrder(){
        $orders = DB::select('
        Select products.name, orders.email, orders.id
        from 
            products
            INNER JOIN
                (select users.email, orders.product_id, orders.id
                from 
                    users
                    INNER JOIN 
                        orders
                            ON users.id = orders.user_id) AS orders
                            ON orders.product_id = products.id
        ');
        //dd($orders);
        return view('adminpanel.showorder',['orders'=>$orders]);
    }

    public function viewShowProduct()
    {
        {
            $products = product::simplePaginate(5);
            return view('adminpanel.showproduct',['products'=>$products]
            );
        }
    }

    public function viewAddProduct()
    {
            return view('adminpanel.addproduct');
    }

    public function viewUsers()
    {
        {
            $user = user::all();
    
            return view('adminpanel.showusers',compact('user')
            );
        }
    }

    public function viewBestDeals()
    {
        {
            $product = DB::select(
                "select * from products where bestdeals='yes'"
            );
            return view('adminpanel.showbestdeals',compact('product'));
        }
    }

}
