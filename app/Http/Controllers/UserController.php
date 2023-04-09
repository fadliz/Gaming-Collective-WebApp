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
                'username' => $validatedData['username'],
                'profile' => 'post-images/default.png',
                'tipe' => 'user'
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


            $cek = User::where('username', $credentials['username'])->first();
        
            if($cek->tipe == 'admin'){
                return redirect()->intended('/adminDashboard');
            } else{
                return redirect()->intended('homepage');
            }

        }

        
        
        return back()->with('loginError', 'Login Failed!');
    }

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
 
        return redirect('/');
    }

    public function editProfilepPic(Request $request,$id){
        $ganti = user::find($id);
        user::where('id',$ganti->id)
        ->update([
            'profile' => $request->file('profpic')->store('post-images')
        ]);

        return redirect('/Profile');
    }
}
