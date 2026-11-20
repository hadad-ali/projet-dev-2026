<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {
        // data bd => select * from products
        $prds = Product::all();

        return view('products.list'
        , compact('prds'));
    }

    public function show($id){
        $p = Product::findOrFail($id);
        // if($p == null) return 404
        return view("products.detail",
        compact('p'));
    }
}
