<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
        	'role_id' => '1',
        	'name' => 'admin',
        	'phone' => '01404684576',
        	'paymentp' =>'notselected',
        	'email' => 'admin@soft.com',

        	'password' => bcrypt('rootadmin'),
        	'address' => 'dhaka',


        ]);


       DB::table('users')->insert([
        'role_id' => '2',
        	'name' => 'member',
        	'phone' => '01404684576',
        	'paymentp' =>'notselected',
        	'email' => 'member@soft.com',

        	'password' => bcrypt('rootmember'),
        	'address' => 'dhaka',
        ]);
    }
}
