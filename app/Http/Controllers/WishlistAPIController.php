<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistAPIController extends Controller
{
    //

    public function store($id,$userid)
    {
        $existingItem = Wishlist::where('Item_id', $id)->first();

        if ($existingItem) {
            return response()->json(['error' => 'Item already exists in Wishlist!'], 500);
        }

        Wishlist::create([
            'User_id' => $userid,
            'Item_id' => $id,
        ]);

        return response()->json(['success' => 'Item added to Wishlist!'], 200);
    }

    public function index($userid)
    {
        $carts = Wishlist::where('User_id', $userid)->with('item')->get();

        return response()->json(['wishes' => $carts], 200);
    }
    public function destroy($id)
    {
        try {
            // Cari item Cart berdasarkan ID
            $cart = Wishlist::findOrFail($id);
            
            // Hapus item Cart
            $cart->delete();
            
            return response()->json(['message' => 'Cart item deleted successfully',200]);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to delete Cart item'], 500);
        }
    }

}
