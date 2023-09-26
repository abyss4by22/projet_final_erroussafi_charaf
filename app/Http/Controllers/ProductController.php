<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //admin
    public function storeProducts(Request $request, Product $product)
    {

        request()->validate([
            "name" => ["required"],
            "desc" => ["required"],
            "price" => ["required"],
            "stock" => ["required"],
            "img" => ["required"],
        ]);

        $img = $request->file("img");


        $img->storePublicly('img/', 'public');



        $data = [
            "name" => $request->name,
            "price" => $request->price,
            "stock" => $request->stock,
            "desc" => $request->desc,
            "category_id" => 1,
            "user_id" => 1,
            "img" => $img->hashName(),
        ];


        $product->create($data);
        return redirect()->back();
    }



    //product update
    public function update(Request $request, Product $product)
{
    request()->validate([
        "name" => ["required"],
        "desc" => ["required"],
        "price" => ["required"],
        "stock" => ["required"],
    ]);

    $img = $request->file("img");

    if ($img) {
        $img->storePublicly('img/', 'public');
        $data = [
            "name" => $request->name,
            "price" => $request->price,
            "stock" => $request->stock,
            "desc" => $request->desc,
            "category_id" => 1,
            "user_id" => 1,
            "img" => $img->hashName(),
        ];
    } else {
        $data = [
            "name" => $request->name,
            "price" => $request->price,
            "stock" => $request->stock,
            "desc" => $request->desc,
            "category_id" => 1,
            "user_id" => 1,
            "img" => $product->img,
        ];
    }

    $product->update($data);
    return redirect()->back();
}







    //product delete

    public function delete(Product $product)
    {
        $product->delete();
        return redirect()->back();
    }
}
