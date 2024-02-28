<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\FlareClient\Http\Exceptions\InvalidData;

class LoginController extends Controller
{
  public function index()

  {
    return view('login.index', [
        'title' => 'login',
       // 'active' => 'login'
    ]);
  }

public function authenticate(Request $request)
{
  $credentials = $request->validate([
    'email' => 'required|email:dns',
    'password' => 'required',
  ]);

  if (Auth::attempt($credentials))
  {
    $request->session()->regenerate();
    return redirect()->intended('/post/dashboard');
  }

  return back()-with('loginEror', 'Login failed!');
}

public function logout(Request $request)
{
  Auth::logout();
  $request->session()->Invalidate();
  $request->session()->regenerateToken();
  return redirect('/');
}
}