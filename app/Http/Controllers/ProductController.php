<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
      
    }

    public function index()
    { 
    	return view('adminpanel.addproduct');
    }

    public function showbestdeal()
    { 
    	return view('adminpanel.addbestdeals');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $this->validate($request,[
            'Pname'=>'required',
            'Pdetail'=>'required',
            'Pcategory' => 'required',
            'price' => 'required',
            'img'=>'required',
            'best'=>'required'
        ]);
        //dd("sdfsdf");
        $Pname = $request->input('Pname');
        $Pdetail = $request->input('Pdetail');
        $price = $request->input('price');
        $Pcategory = $request->input('Pcategory');
        $best=$request->input('best');

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/demo/');
            $image->move($destinationPath, $name);
        }
        $img = '/demo/'.$name;

        $product = product::create([
            'name'=>$Pname,
            'detail'=>$Pdetail,
            'price'=>$price,
            'category'=>$Pcategory,
            'image'=>$img,
            'bestdeals'=>$best
        ]);
        return redirect('/adminpanel/addproduct');
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
