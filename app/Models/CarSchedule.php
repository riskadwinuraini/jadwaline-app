<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarSchedule extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'car_schedules';
}
