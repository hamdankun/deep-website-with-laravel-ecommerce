<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $products = \App\Product::paginate(10);
        return view('frontend.product.index', compact('products'));
    }

}
