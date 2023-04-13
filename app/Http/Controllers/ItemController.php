<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('admin.product', ['items' => $items]);
    }

    public function create()
    {
        return view('items.create');
    }

    public function store(Request $request)
    {
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

        return redirect('/products')->with('success', 'Item saved!');
    }

    public function show($id)
    {
        $item = Item::find($id);
        return view('ProductDetail', ['item' => $item]);
    }

    public function edit($id)
    {
        $item = Item::find($id);
        return view('items.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {

        $item = Item::find($id);
        $item->name = $request->get('name');
        $item->price = $request->get('price');
        $item->Category_id = $request->get('kategori');
        $item->description = $request->get('description');

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('post-images');
            $item->image = $image;
        }

        $item->save();

        return redirect('/products')->with('success', 'Item updated!');
    }

    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();

        return redirect('/items')->with('success', 'Item deleted!');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $items = Item::where('name', 'LIKE', "%$query%")->get();

        if ($items->count() > 0) {
            return redirect()->route('items.show', ['item' => $items->first()->id]);
        } else {
            return redirect()->back()->with('error', 'No results found.');
        }
    }
}
