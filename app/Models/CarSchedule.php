<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarSchedule extends Model
{
    use HasFactory;

    protected $table = 'car_schedules';

    protected $guarded = [];
    // protected $fillable = ['transport_id', 'from', 'to', 'start_time', 'end_time', 'day'];

    public function transport()
    {
        return $this->belongsTo(Transport::class);
    }
}
