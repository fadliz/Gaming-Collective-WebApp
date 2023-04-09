<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('items.index', compact('items'));
    }

    public function create()
    {
        return view('items.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Category_id' => 'required',
            'name' => 'required',
            'price' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('post-images');
            $imagePath = $image;
        } else {
            $imagePath = 'image/default.png';
        }

        $item = new Item([
            'Category_id' => $request->kategori,
            'name' => $request->get('name'),
            'price' => $request->get('price'),
            'description' => $request->get('description'),
            'image' => $imagePath,
        ]);

        $item->save();

        return redirect('/items')->with('success', 'Item saved!');
    }

    public function show($id)
    {
        $item = Item::find($id);
        return view('items.show', compact('item'));
    }

    public function edit($id)
    {
        $item = Item::find($id);
        return view('items.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Category_id' => 'required',
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        $item = Item::find($id);
        $item->name = $request->get('name');
        $item->price = $request->get('price');
        $item->description = $request->get('description');

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('post-images');
            $item->image = $image;
        }

        $item->save();

        return redirect('/items')->with('success', 'Item updated!');
    }

    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();

        return redirect('/items')->with('success', 'Item deleted!');
    }
}
