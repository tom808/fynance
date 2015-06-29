<?php
/**
 * Created by: tom
 * DateTime: 15/06/15 22:10
 */

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

    public function run()
    {

        DB::table('users')->insert(
            [
                'id' => 1,
                'name' => 'Tom',
                'email' => 'tom@fynance.com',
                'password' => Hash::make('secret'),
                'created_at' =>  date('Y-m-d G:i:s',time()),
                'updated_at' => date('Y-m-d G:i:s',time())
            ]
        );

    }

}