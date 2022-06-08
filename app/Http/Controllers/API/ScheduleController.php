<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ScheduleResource;
use App\Models\CarSchedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function getDashboard()
    {
        $data = CarSchedule::all();
        return response()->json([
            "status" => 200,
            "message" => "Success Fetch All data",
            "data" => $data
        ]);
    }

    public function getByDashboard($id)
    {
        $findSchedule = CarSchedule::findOrFail($id);
        return response()->json([
            "status"    => 200,
            "data"      => $findSchedule
        ]);
    }
}
