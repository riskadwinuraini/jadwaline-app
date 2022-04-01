<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CarScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('car_schedules')->insert([
        'start_time' => Carbon::now(),
        'end_time' => Carbon::now(),
        'day' => 'senin',
        'code' => 'A24'
        ]);
    }
}
