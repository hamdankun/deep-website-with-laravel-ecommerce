<?php

namespace App\Http\Controllers;

use Cart;
use App\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    const QTY = 1;

    public function index()
    {
        $products = Product::paginate(10);
        return view('frontend.product.index', compact('products'));
    }

    public function show($id) {
        $product = Product::find($id);
        $otherProducts = Product::where('id', '<>', $id)->get();
        return view('frontend.product.show', compact('product', 'otherProducts'));
    }

    public function addCart($id) {
        $product = Product::find($id);
        Cart::add($product->id, $product->name, static::QTY, $product->price);
        session()->flash('cart_notification', 'Product Has Been Added Into Cart');
        return redirect()->back();
    }

}
