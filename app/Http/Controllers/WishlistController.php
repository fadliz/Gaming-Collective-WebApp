<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateWishlistRequest;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Wishlist::create([
            'User_id'=> $request->userid,
            'Item_id'=> $request->itemid,
        ]);

        return view('Wishlist',['wishes'=>Wishlist::all()])->with('success', 'Item added to Wishlist!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Wishlist $wishlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wishlist $wishlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWishlistRequest $request, Wishlist $wishlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $wishes = Wishlist::find($id);

        $wishes->delete();

        return redirect('/Wishlist');
    }
}
