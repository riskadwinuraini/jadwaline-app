<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransportSeeder extends Seeder
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
                'name'          =>'Lin A',
                'car_color'     =>'Kuning',
                'number_plate'  => "PA234RT",
                'user_id'       => 3,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'name'          =>'Lin B',
                'car_color'     =>'Kuning',
                'number_plate'  => "PA234RT",
                'user_id'       => 3,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
     
        ];

        DB::table('transports')->insert($schedule);
    }
}
