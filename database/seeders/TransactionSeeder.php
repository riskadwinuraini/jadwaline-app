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
                'code_transaction'  =>'234569',
                'payment_method'    =>'OVO',
                'total'             => 50000,
                'user_id'           => 1,
            ],
            [
                'code_transaction'  =>'334567',
                'payment_method'    =>'DANA',
                'total'             => 150000,
                'user_id'           => 2,
            ]
        ];

        DB::table('transactions')->insert($transactions);
    }
}
