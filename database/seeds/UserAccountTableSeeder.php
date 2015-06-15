<?php
/**
 * Created by: tom
 * DateTime: 15/06/15 22:14
 */

use Illuminate\Database\Seeder;

class UserAccountTableSeeder extends Seeder{


    public function run()
    {

        DB::table('user_accounts')->insert(
            [
                'id' => 1,
                'user_id' => 1,
                'account_id' => 1,
                'created_at' => gmdate("Y-m-d\TH:i:s\Z", time()),
                'updated_at' => gmdate("Y-m-d\TH:i:s\Z", time())
            ]
        );
    }
} 