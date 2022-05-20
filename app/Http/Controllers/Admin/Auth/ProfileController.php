<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateProfileRequest;

class ProfileController extends Controller
{
    public function index()
    {
        return view('admin.auth.profile');
    }
    
    public function update(UpdateProfileRequest $request)
    {

        $request->user()->update(
            $request->all()
        ); 

        return back();
    }
}
