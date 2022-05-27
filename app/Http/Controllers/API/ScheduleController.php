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
            ScheduleResource::collection($data), 'Schedule fetched.'
        ]);
    }
}
