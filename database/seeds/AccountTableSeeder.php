<?php
/**
 * Created by: tom
 * DateTime: 15/06/15 21:58
 */

use Illuminate\Database\Seeder;

class AccountTableSeeder extends Seeder
{

    public function run()
    {

        DB::table('accounts')->insert(
            [
                'id' => 1,
                'name' => 'MainAccount',
                'balance' => 1240.00,
                'created_at' => date('Y-m-d G:i:s',time()),
                'updated_at' => date('Y-m-d G:i:s',time())
            ]
        );

    }
}