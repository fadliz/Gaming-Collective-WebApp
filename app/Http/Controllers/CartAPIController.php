<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartAPIController extends Controller
{
    //

    public function store($id,$userid){
        Cart::create([
            'User_id' => $userid,
            'Item_id' => $id,
            'quantity' => 1
        ]);

        return response()->json(['message' => 'Barang berhasil ditambahkan ke keranjang'], 200);
    }

    public function index($userid)
    {
        $carts = Cart::where('User_id', $userid)->with('item')->get();

        return response()->json(['carts' => $carts], 200);
    }

    public function destroy($id)
    {
        try {
            // Cari item Cart berdasarkan ID
            $cart = Cart::findOrFail($id);
            
            // Hapus item Cart
            $cart->delete();
            
            return response()->json(['message' => 'Cart item deleted successfully',200]);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to delete Cart item'], 500);
        }
    }

    public function destroyAll($id)
{
    try {
        Cart::where('User_id', $id)->delete();
        return response()->json(['message' => 'All carts deleted successfully'], 200);
    } catch (\Exception $e) {
        return response()->json(['message' => 'Failed to delete carts'], 500);
    }
}

}
