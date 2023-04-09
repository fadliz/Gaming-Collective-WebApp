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

    public function store(Request $request)
    {
        $cart = new Cart;
        $cart->user_id = auth()->user()->id;
        $cart->item_id = $request->item_id;
        $cart->quantity = $request->quantity;
        $cart->save();

        return back()->with('success', 'Item added to cart!');
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

        return back()->with('success', 'Item removed from cart!');
    }
}
