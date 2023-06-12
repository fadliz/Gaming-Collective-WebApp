<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\Storage;

class ItemAPIController extends Controller
{
    //
    

    public function index()
    {
        $items = Item::all();

        return response()->json(['items' => $items], 200);
    }

    public function imgItem($id)
    {   
        if($id != 0){
            $item = Item::find($id);
        
            if (!$item) {
                return response()->json(['error' => 'item not found'], 404);
            }
        
            $avatarPath = $item->image; // Path gambar avatar dalam tabel user

        } else{
            $avatarPath = 'post-images/default.png';
        }

        if (!$avatarPath) {
            return response()->json(['error' => 'Avatar not found'], 404);
        }

        $image = Storage::disk('public')->get($avatarPath);

        return response($image, 200)->header('Content-Type', 'image/jpeg');
    }

}
