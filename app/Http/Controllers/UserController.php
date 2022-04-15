<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function register()
    {
        return view('register');
    }

    public function profile()
    {
        return view('profile');
    }

    public function update(Request $request)
    {

        $name = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->store('public/images');


        $attr = $request->all();
        $attr['image'] = $path;

        $request->user()->update(
            $attr
        );

        return back();
    }
}
