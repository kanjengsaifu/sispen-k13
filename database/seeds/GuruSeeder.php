<?php

use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gurus')->insert(['nip' => '993933311', 'nama' => 'Test guru.Spd']);
        DB::table('gurus')->insert(['nip' => '993933312', 'nama' => 'Test guru2.Spd']);
    }
}
