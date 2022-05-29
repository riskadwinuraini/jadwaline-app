<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        return view('manager.profile');
    }

    public function update(Request $request)
    {
        if($request->hasFile('photo')){
            $filename = $request->photo->getClientOriginalName();
             $this->deleteOldImage(); 
            $request->photo->storeAs('photos',$filename,'public');
            Auth()->user()->update(
                [
                    'photo'=>$filename,
                    'name' => request('name')
                ]
            );
            return back()->with('message','Profile Picture Uploaded Successfully');
        }
        return redirect()->back();
        
    }

    protected function deleteOldImage()
    {
      if (auth()->user()->image){
        Storage::delete('/public/photos/'.auth()->user()->image);
      }
     }
}
