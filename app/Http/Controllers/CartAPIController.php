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
}
