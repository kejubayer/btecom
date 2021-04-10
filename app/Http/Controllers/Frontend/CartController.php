<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;

class CartController extends Controller
{
    public function store($id)
    {
        $product = Product::findorfail($id);
        $cart = session()->has('cart') ? session()->get('cart') : [];
        if (array_key_exists($product->id, $cart)) {
            $cart[$product->id]['quantity']++;
        } else {
            $cart[$product->id] = [
                'product_id' => $product->id,
                'title' => $product->name,
                'quantity' => 1,
                'price' => $product->price,
                'photo' => $product->photo,
            ];
        }

        session(['cart' => $cart]);
        return redirect()->back();
    }

    public function checkout()
    {
        $carts = session()->has('cart')? session()->get('cart'):[];
        return view('frontend.order.checkout',compact('carts'));
    }
}
