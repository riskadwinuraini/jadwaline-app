<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ReviewResource;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function getDashboard()
    {
        $data = Review::all();
        return response()->json([
            ReviewResource::collection($data), 'Review fetched.'
        ]);
    }
}
