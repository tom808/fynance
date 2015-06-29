<?php
use Illuminate\Database\Seeder;

/**
 * Created by: tom
 * DateTime: 16/06/15 06:32
 */

class TransactionSeeder extends Seeder {

    public function run() {

        DB::table('transactions')->insert(
        [
            [
                'id' => 1,
                'type' => 'CREDIT',
                'category' => 'Savings',
                'name' => 'Monthly Credit',
                'value' => 1400.00,
                'date' => new DateTime('2015-06-01'),
                'created_at' => date('Y-m-d G:i:s',time()),
                'updated_at' => date('Y-m-d G:i:s',time())
            ]
            ,
            [
                'id' => 2,
                'type' => 'DEBIT',
                'category' => 'Bills',
                'name' => 'Gas/Electric',
                'value' => 60.00,
                'date' => new DateTime('2015-06-02'),
                'created_at' => date('Y-m-d G:i:s',time()),
                'updated_at' => date('Y-m-d G:i:s',time())
            ]
            ,
            [
                'id' => 3,
                'type' => 'DEBIT',
                'name' => 'Shopping',
                'category' => 'Food Shopping',
                'value' => 100.00,
                'date' => new DateTime('2015-06-03'),
                'created_at' => date('Y-m-d G:i:s',time()),
                'updated_at' => date('Y-m-d G:i:s',time())
            ]
        ]

        );

    }

} 