<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\{Transport, CarSchedule, User};
use Illuminate\Http\Request;

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
        $countDataAngkutan = Transport::count();
        $countScheduleAngkutan = CarSchedule::count();
        $countUserAngkutan = User::count();
        return view('manager.dashboard', compact('countDataAngkutan', 'countScheduleAngkutan', 'countUserAngkutan'));
    }
}
