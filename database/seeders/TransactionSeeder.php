<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transactions = [
            [
                'code_transaction'  =>'234561',
                'payment_method'    =>'OVO',
                'total'             => 50000,
                'user_id'           => 1,
                'created_at'        => now(), 
                'updated_at'        => now()
            ],
            [
                'code_transaction'  =>'234562',
                'payment_method'    =>'DANA',
                'total'             => 150000,
                'user_id'           => 2,
                'created_at'        => now(), 
                'updated_at'        => now()
            ],
            [
                'code_transaction'  =>'234563',
                'payment_method'    =>'M-Banking',
                'total'             => 250000,
                'user_id'           => 1,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'code_transaction'  =>'234564',
                'payment_method'    =>'DANA',
                'total'             => 100000,
                'user_id'           => 3,
                'created_at'        => now(), 
                'updated_at'        => now()
            ],
            [
                'code_transaction'  =>'234565',
                'payment_method'    =>'SeaBank',
                'total'             => 150000,
                'user_id'           => 2,
                'created_at'        => now(), 
                'updated_at'        => now()
            ]
        ];

        DB::table('transactions')->insert($transactions);
    }
}
