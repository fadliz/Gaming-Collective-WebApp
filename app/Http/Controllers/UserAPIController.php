<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

    public function profpic($id)
{   
    if($id != 0){
        $user = User::find($id);
    
        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }
    
        $avatarPath = $user->profile; // Path gambar avatar dalam tabel user

    } else{
        $avatarPath = 'post-images/default.png';
    }

    if (!$avatarPath) {
        return response()->json(['error' => 'Avatar not found'], 404);
    }

    $image = Storage::disk('public')->get($avatarPath);

    return response($image, 200)->header('Content-Type', 'image/jpeg');
}

    public function profile($url) 
    {
        if (!$url) {
            return response()->json(['error' => 'User not found'], 404);
        }

        $image = Storage::disk('public')->get($url);

        return response($image, 200)->header('Content-Type', 'image/jpeg');
    }

public function update(Request $request, $id)
    {
        // Logika untuk memperbarui data pengguna dengan ID yang diberikan
        $user = User::find($id);
        if ($user) {
            // Lakukan pembaruan data
            if($request->username == null)
            User::where('id',$id)->update([
                'email' => $request->email
            ]);

            else if($request->email == null){
                User::where('id',$id)->update([
                    'username' => $request->username
                ]);
            }

            else{
                User::where('id',$id)->update([
                    'username' => $request->username,
                    'email' => $request->email
                ]);
            }
            return response()->json(['message' => 'User updated successfully']);
        } else {
            return response()->json(['error' => 'User not found'], 404);
        }
    }

}