<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data['products'] = \App\Product::all();
        return view('product.index', $data);
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $product = new \App\Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->weight = $request->weight;
        $product->description = $request->description;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $image->move(public_path('product-images'), $name);
            $product->image = $name;
        }

        $product->save();
        return redirect('/product');
    }

    public function edit($id)
    {
        $data['product'] = \App\Product::find($id);
        return view('product.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $product = \App\Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->weight = $request->weight;
        $product->description = $request->description;
        $product->save();
        return redirect('/product');
    }
}
