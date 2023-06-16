<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reply;
use Illuminate\Http\Request;

class ReplyAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        // Retrieve all replies
        $replies = Reply::all();

        return response()->json($replies);
    }

    public function idIndex($post_id)
{
    // Retrieve the replies based on the requested post_id
    $replies = Reply::where('post_id', $post_id)
                    ->with('forum.user') // eager load the forum and user relationships
                    ->get();

    $formattedReplies = [];

    foreach ($replies as $reply) {
        $user = $reply->user;

        $formattedReplies[] = [
            'id' => $reply->id,
            'post_id' => $reply->post_id,
            'user_id' => $reply->user_id,
            'answers' => $reply->answers,
            'created_at' => $reply->created_at,
            'updated_at' => $reply->updated_at,
            'username' => $user->username,
        ];
    }

    return response()->json($formattedReplies);
}


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'post_id' => 'required',
            'user_id' => 'required',
            'answers' => 'required',
        ]);

        // Create a new reply
        $reply = Reply::create([
            'post_id' => $request->post_id,
            'user_id' => $request->user_id,
            'answers' => $request->answers,
        ]);

        // Return a JSON response with the created reply
        return response()->json($reply, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reply  $reply
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Reply $reply)
    {
        // Return a JSON response with the specified reply
        return response()->json($reply);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reply  $reply
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Reply $reply)
    {
        // Validate the request data
        $request->validate([
            'answers' => 'required',
        ]);

        // Update the reply
        $reply->update([
            'answers' => $request->answers,
        ]);

        // Return a JSON response with the updated reply
        return response()->json($reply);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reply  $reply
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Reply $reply)
    {
        // Delete the reply
        $reply->delete();

        // Return a JSON response indicating success
        return response()->json(['message' => 'Reply deleted']);
    }
}