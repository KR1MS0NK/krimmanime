<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Middleware;



class UserController extends Controller
{

   
    public function __construct()
    {
       

        $this->middleware('auth');

    }

   public function showUsers()
   {
       $list = User::get();


       return view('user.User', compact('list'));

   }

  

   public function create()
   {
       return view('user.create-user');
   }

   public function saveUser(Request $request)
   {
       $user = new User;
       $user->name = $request->name;
       $user->email = $request->email;
       $user->password = Hash::make($request->password);
       $user->save();

       return redirect()->back()->with('success','User Created');

   }













}
