<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class SettingTableSeeder extends Seeder {

    public function run()
    {
        DB::table('settings')->insert(
        	['setting_name' => 'todo_validation','setting_value' => 1]
        );
    }

}