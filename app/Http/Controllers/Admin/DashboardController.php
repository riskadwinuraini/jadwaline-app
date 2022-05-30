<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{Review, Transaction, CarSchedule};
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $schedules = CarSchedule::all();
        $count = Review::count();
        $transactions = Transaction::whereDate('created_at', Carbon::today())->get();
        return view('admin.dashboard', compact('count', 'transactions', 'schedules'));
    }
}
