<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountManageController extends Controller
{
    public function index()
    {

        /**
         * TODO: fungsi untuk menampilkan data user berupa role manager
         * ? link : https://github.com/spatie/laravel-permission/issues/682
         */
    

        $accountManager = User::whereHas("roles", function($q){ $q->where("name", "manager"); })->get();

        return view('admin.account-manage.manager.index', compact('accountManager'));
    }

    public function create()
    {
        return view('admin.account-manage.manager.create');
    }

    public function store(Request $request)
    {

        $attr = $request->all();
        $attr['password'] = Hash::make($request->input('password'));

        User::create($attr);

        return back();
    }

    // public function getDriver()
    // {

    //      /**
    //      * 
    //      * TODO: fungsi untuk menampilkan data user berupa role supir
    //      * 
    //      */
    

    //     $accountSupir = User::whereHas("roles", function($q){ $q->where("name", "supir"); })->get();

    //     return view('admin.account-manage.driver.index', compact('accountSupir'));
    // }
}
