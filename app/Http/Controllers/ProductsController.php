<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $prds = Product::all();
        // dd($prds);
        return view('products.list'
        , compact('prds'));
    }
}
