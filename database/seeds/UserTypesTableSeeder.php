<?php

use Illuminate\Database\Seeder;

class UserTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('user_types')->insert([
            'name' => 'Admin',
            'access_level' => 0
        ]);
        DB::table('user_types')->insert([
            'name' => 'Normal',
            'access_level' => 1
        ]);
    }
}
