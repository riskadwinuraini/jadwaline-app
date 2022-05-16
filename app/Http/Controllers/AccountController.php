<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AccountController extends Controller
{
    public function index()
    {
        $accounts = User::orderBy('created_at', 'DESC')->get();
        
        return view('admin.account.index', compact('accounts'));
    }
}
