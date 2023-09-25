<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index(){
        $products = Product::all();
        return view("index",compact("products"));
    }

    public function shop(){
        return view("category");
    }
    // product :
// show
public function show(Product $id){
    $product = $id;
    return view("single-product" , compact("product"));
}
};


