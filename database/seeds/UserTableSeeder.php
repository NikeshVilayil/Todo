<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder {

    public function run()
    {	
    	$password = Hash::make('1234');
        DB::table('users')->insert(
        	[
        		'fname' => 'nikesh',
        		'lname' => 'vilayil',
        		'email' => 'nikeshvilayil@gmail.com',
        		'password' => $password,
        		'address' => 'mallapuram',
        		'status' => 'active',
        		'roll_id' => 1
        	]
        );    
    }

}