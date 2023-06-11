<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
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

public function register(Request $request)
    {
        
        // Validasi data
        
        $validatedData = $request->validate([
            'name' => 'required|max : 255',
            'email' => 'required|email:dns|unique:users',
            'username'=>'required|unique:users',
            'password' => 'required|min:8',
            
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        
        
        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => $validatedData['password'],
            'username' => $validatedData['username'],
            'profile' => 'post-images/default.png',
            'tipe' => 'user'
        ]);

        // Kirim respons sukses
        return response()->json(['message' => 'Registrasi berhasil'], 200);
    }

}
