<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index(){
        return view('/mypage/profile');
    }
    
    public function storeUser(RegisterRequest $request){
        $user=User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password '=> Hash::make($request->password),
            'password_confirmation' => $request->password_confirmation,
        ]);
        Auth::login($user);
        return redirect('/mypage/profile');
    }

    public function storeProfile(ProfileRequest $request){
        Profile::create([
            'image' => $request->image,
            'name' => $request->name,
            'postcode' => $request->postcode,
            'address' => $request->address,
        ]);
        return redirect('/?tab=mylist');
    }

    public function loginUser(LoginRequest $request){
        $credentials=$request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect('/?tab=mylist');
        }
    }

    public function logout(){
        return view('/login');
    }
}
