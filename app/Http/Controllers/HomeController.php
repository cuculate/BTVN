<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('home.home', compact('posts'));
    }

    public function login()
    {
        return view('home.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->route('home');
        } else {
            return redirect()->route('login')->with('error', 'Tài khoản hoặc mật khẩu sai!');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('home.show',compact('post'));
    }
}
