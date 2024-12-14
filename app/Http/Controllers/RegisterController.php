<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view("register.index", [
            "title"=> "Sign Up",
            "active"=> "login",
        ]);
    }
    public function store(request $request){
        // dd($request->all());
       $validateddata = $request->validate([
        "name"=>["required","string","max:255"],
        "username"=>["required", "string", "unique:users", "min:5", "max:255"],
        "email"=> ["required", "string","email:dns","unique:users"],
        "password"=> ["required", "string","max:255","min:8"],
      ]);
      $validateddata["password"] = Hash::make($validateddata["password"], [
        "round" => 12,
      ]);
      User::create($validateddata);

      session()->flash('success', 'Akun ada sudah berhasil dibuat');
      return redirect('/login');

 }
}
