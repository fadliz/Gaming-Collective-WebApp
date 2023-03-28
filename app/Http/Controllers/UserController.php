<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

    public function store(Request $request){
        if($request->ConPassword == $request->password){
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
                'username' => $validatedData['username']
            ]);

            return redirect('/login')->with('success','Registration succesfull! please login!');
        }
        return redirect('/signup')->with('failed','Registration failed! please try again!');
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);

        

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('homepage');

        }
        
        return view('login');
    }

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
 
        return redirect('/login');
    }
}
