<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $carts = auth()->user()->carts;
        return view('carts.index', compact('carts'));
    }

    public function store(Request $request,$id)
    {
        Cart::create([
            'User_id'=> $request->userid,
            'Item_id'=> $id,
            'quantity' => 1
        ]);

        return view('Cart',['carts'=>Cart::all()])->with('success', 'Item added to cart!');
    }

    public function update(Request $request, Cart $cart)
    {
        $cart->quantity = $request->quantity;
        $cart->save();

        return back()->with('success', 'Cart updated!');
    }

    public function destroy(Cart $cart)
    {
        $cart->delete();

        return view('Cart',['carts'=>Cart::all()])->with('success', 'Item removed from cart!');
    }
}
