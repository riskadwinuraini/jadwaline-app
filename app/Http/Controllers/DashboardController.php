<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class DashboardController extends Controller
{
    public function index()
    {
        $sum = Transaction::sum('total');
        return view('dashboard',compact('sum'));
    }
}
