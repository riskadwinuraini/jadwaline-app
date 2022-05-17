<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'car_color', 'number_plate', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function car_code()
    {
        return $this->belongsTo(CarSchedule::class);
    }
}
