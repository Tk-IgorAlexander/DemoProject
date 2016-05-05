<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'igor',
            'email' => 'igor.roldan'.'@tektonlabs.com',
            'password' => bcrypt('tkpass'),
            'verification_status' => 1,
            'user_type_id' => 1
        ]);



        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'verification_status' => 0,
            'user_type_id' => 2
        ]);
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'verification_status' => 0,
            'user_type_id' => 2
        ]);
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'verification_status' => 0,
            'user_type_id' => 2
        ]);

        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'verification_status' => 0,
            'user_type_id' => 2
        ]);

        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'verification_status' => 0,
            'user_type_id' => 2
        ]);

        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'verification_status' => 0,
            'user_type_id' => 2
        ]);

        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'verification_status' => 0,
            'user_type_id' => 2
        ]);
    }
}
