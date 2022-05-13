<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AccountManageController extends Controller
{
    public function getManager()
    {

        /**
         * TODO: fungsi untuk menampilkan data user berupa role manager
         * ? link : https://github.com/spatie/laravel-permission/issues/682
         */
    

        $accountManager = User::whereHas("roles", function($q){ $q->where("name", "manager"); })->get();

        return view('admin.account-manage.manager.index', compact('accountManager'));
    }

    public function getDriver()
    {

         /**
         * 
         * TODO: fungsi untuk menampilkan data user berupa role supir
         * 
         */
    

        $accountSupir = User::whereHas("roles", function($q){ $q->where("name", "supir"); })->get();

        return view('admin.account-manage.driver.index', compact('accountSupir'));
    }
}
