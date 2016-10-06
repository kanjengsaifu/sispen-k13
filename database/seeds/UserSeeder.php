<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(['guru_id' => 1, 'name' => 'test', 'email' => 'test1@test.com', 'password' => bcrypt('123456')]);
        DB::table('users')->insert(['guru_id' => 2, 'name' => 'test2', 'email' => 'test2@test.com', 'password' => bcrypt('123456')]);
    }
}
