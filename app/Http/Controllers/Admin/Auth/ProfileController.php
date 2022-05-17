<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('admin.auth.profile');
    }
    
    public function update(Request $request)
    {
        $request->user()->update(
            $request->all()
        ); 

        return back();
    }
}
