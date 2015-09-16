<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RollTableSeeder extends Seeder {

    public function run()
    {
        DB::table('roll')->insert(
        	['id' => 1, 'name' => 'admin'],
        	['id' => 2, 'name' => 'user']
        );

        
    }

}