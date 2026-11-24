<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        // data bd => select * from products
        $prds = Product::all();

        return view('products.list', compact('prds'));
    }

    public function show($id)
    {
        $p = Product::findOrFail($id);

        // if($p == null) return 404
        return view('products.detail',
            compact('p'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $form)
    {
        Product::create([
            'titre' => $form->input('tt'),
            'prix' => $form->pp,
        ]);
        return redirect()->route('products.index');
    }
}
