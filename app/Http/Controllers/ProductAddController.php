<?php

namespace App\Http\Controllers;

use App\Models\product_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductAddController extends Controller
{
    public function addProduct(){
        return view('product');
    }
    public function allProduct(){
        $product= product_model::all();

        return view('productAll',compact("product"));
    }

    public function ProductPost(Request $request){
        //dd($request->all());
        $product = new product_model();
        $product-> name_Product= $request->name_Product;
        $product-> des_Product= $request->des_Product;
        $product-> image_Product= $request->image->getClientOriginalName();
        //dd($request->image->getClientOriginalName());
        $path= public_path("img/");
        $request->image->move($path, $request->image->getClientOriginalName());
        //$request->image_Product->move("/image",$request->image_Product->getClientOriginalName());
        $product->save();
        //dd($acc['name']);
        //dd (Auth::attempt($acc));
        //dd(Auth::check()&&Auth::user()->email=="mrphu852@gmail.com");
        
    }
}
