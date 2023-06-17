<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $addToCart = new Cart();
        $addToCart->user_id = auth()->user()->id; 
        $addToCart->vendor_id = $request->vendor_id; 
        $addToCart->product_id = $request->product_id; 
        $addToCart->price= $request->price;
        $addToCart->qty = $request->qty ? $request->qty: 1;
        $addToCart->total_price = 1*$request->price;
        $addToCart->save();
        flash('Product has been added to cart.');
        return redirect()->back()->withSuccess('Product has been added to cart');
       

    }

    public function checkout()
    {
        $products = Cart::with('product')->where('user_id', auth()->user()->id)->get();
        return view ('frontend.checkout.index', compact('products'));
    } 

    public function cartProductUpdate(Request $request, $id)

    {
        $cart = Cart::find($id);
        $cart->qty = $request->qty;
        $cart->save();
        return redirect()->back()->withSuccess('Cart has been updated');
    
    }
        public function cartProductDelete($id)
        {
            $cartProduct = Cart::find($id);
            $cartProduct->delete();
            return redirect()->back()->withSuccess('Product has been deleted from cart');
    
        }
}
