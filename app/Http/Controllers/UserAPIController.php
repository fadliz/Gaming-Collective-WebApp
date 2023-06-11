<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAPIController extends Controller
{
    //

    public function login(Request $request)
{
    $credentials = $request->only('username', 'password');

    if (Auth::attempt($credentials)) {
        // Login berhasil, buat token dan kirimkan sebagai response
        $user = Auth::user();
        $token = $user->createToken('Personal Access Token')->plainTextToken;
        return response()->json(['data'=>$user,'token'=> $token], 200);
    } else {
        // Login gagal, kirimkan pesan error sebagai response
        return response()->json(['error' => 'Unauthorized'], 401);
    }
}

}
