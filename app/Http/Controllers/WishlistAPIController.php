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

}
