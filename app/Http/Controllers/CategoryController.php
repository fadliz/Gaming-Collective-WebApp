<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategs = Category::all();
        return view('admin.category', ['kategs' => $kategs]);
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
    
        $category = new Category;
        $category->nama = $request->category_name;
        $category->save();
    
        return redirect('/AdminCategory');
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $kateg = Category::find($id);
        $kateg->nama = $request->get('nama');

        $kateg->save();

        return redirect('/AdminCategory')->with('success', 'Category updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }

    public function show(Request $request){
        
        $item = Category::where('nama',$request->kateg)->first();
        
        return view('Category',['produk'=>$item->items->all(),'kategori'=>Category::all(),'temp' => $item]);
    }
}
