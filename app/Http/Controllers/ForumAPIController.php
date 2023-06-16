<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreForumRequest;
use App\Http\Requests\UpdateForumRequest;
use Illuminate\Http\Request;

class ForumAPIController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $forums = Forum::with('user')->get();
        return response()->json($forums);
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
        Forum::create([
            'Category_id' => $request->kategori,
            'User_id' => $request->userid,
            'question' => $request->question
        ]);

        return response()->json(['success' => 'Submitted successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
{
    $forum = Forum::with('user')->findOrFail($id);
    return response()->json($forum);
}
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $post = Forum::find($id);
        Forum::where('id', $post->id)->update([
            'Category_id' => $request->kategori,
            'question' => $request->question
        ]);

        return response()->json(['message' => 'Updated successfully']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateForumRequest $request, Forum $forum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Forum::find($id);
        foreach ($post->replies as $item) {
            $item->delete();
        }

        $post->delete();
        return response()->json(['message' => 'Deleted successfully']);
    }
}