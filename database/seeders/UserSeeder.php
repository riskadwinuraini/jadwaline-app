<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = [
            [
                'name' =>'Nelly Maulia',
                'email' =>'nelly123@gmail.com',
                'password' => bcrypt('nelly123'),
                'sim' => 'sim A',
                'role' => 'admin'
            ],
            [
                'name' =>'Eggi Permana',
                'email' =>'eggi_p098@gmail.com',
                'password' => bcrypt('eggi098'),
                'sim' => 'sim A',
                'role' => 'manager'
            ]
        ];

        DB::table('users')->insert($users);
    }
}
