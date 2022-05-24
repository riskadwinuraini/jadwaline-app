<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $schedule = [
            [
                'transport_id'  => 1,
                'from'          =>'Bondowoso',
                'to'            => 'Maesan',
                'start_time'    => "13:14:30",
                'end_time'      => "13:14:30",
                'day'           => 'senin',
            ],
                        [
                'transport_id'  => 2,
                'from'          =>'Maesan',
                'to'            => "Tamanan",
                'start_time'    => "13:14:30",
                'end_time'      => "13:14:30",
                'day'           => 'senin',
            ],
     
        ];

        DB::table('car_schedules')->insert($schedule);
    }
}

