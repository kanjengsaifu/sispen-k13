<?php

use Illuminate\Database\Seeder;

class PelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelajarans')->insert(['pelajaran' => 'Matematika']);
        DB::table('pelajarans')->insert(['pelajaran' => 'Bahasa Indonesia']);
    }
}
