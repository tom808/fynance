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
                'balance' => 0.00,
                'created_at' => gmdate("Y-m-d\TH:i:s\Z", time()),
                'updated_at' => gmdate("Y-m-d\TH:i:s\Z", time())
            ]
        );

    }
}