<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function register()
    {
    return view('register');
    }
    public function movelogin()
    {
    return view('login');
    }
    public function login(UserRequest $request)
    {
      $user = $request->only(['name', 'email', 'password']);
      User::create($user);

      return view('login');
    }
}