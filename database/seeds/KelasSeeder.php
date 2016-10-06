<?php

use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelases')->insert(['kelas' => 'A', 'tingkat' => 10]);
        DB::table('kelases')->insert(['kelas' => 'B', 'tingkat' => 10]);
    }
}
