<?php

namespace App\Http\Controllers;

use Cart;
use App\Order;
use App\Product;
use App\Customer;
use App\OrderDetail;
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
        Cart::add($product->id, $product->name,
            request()->has('qty') ? request()->get('qty') : static::QTY,
            $product->price
        );
        session()->flash('cart_notification', 'Product Has Been Added Into Cart');
        return redirect()->back();
    }

    public function shoppingCart() {
        return view('frontend.product.shopping-cart');
    }

    public function stepOne() {
        return view('frontend.product.checkout.step-1');
    }

    public function stepTwo() {
        return view('frontend.product.checkout.step-2');
    }

    public function postStepTwo() {
        session()->put('customer_information', request()->except('_token'));
        return redirect('/step-3');
    }

    public function stepThree() {
        return view('frontend.product.checkout.step-3');
    }

    public function postStepThree() {
        session()->put('customer_payment_and_delivery', request()->except('_token'));
        return redirect('/step-4');
    }

    public function stepFour() {
        return view('frontend.product.checkout.step-4');
    }

    /**
     * Store user information, order, order detail to database
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirecto
     */
    public function postStepFour() {
        $cart = collect(Cart::content());
        $customerInformation = session('customer_information');
        $paymentDeliveryMethod = collect(session('customer_payment_and_delivery'));
        $customerId = Customer::create($customerInformation);
        $paymentDeliveryMethod = $paymentDeliveryMethod->merge(['customer_id' => $customerId]);
        $orderId = Order::create($paymentDeliveryMethod);
        $cart = $cart->map(function($cart) use($orderId) {
            return [
              'product_id' => $cart->product_id,
              'order_id' => $orderId,
              'price' => $cart->price,
              'qty' => $cart->qty
            ];
        });
        OrderDetail::insert($cart->all());
        return redirect('success');
    }

}
