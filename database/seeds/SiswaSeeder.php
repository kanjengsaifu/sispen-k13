<?php

use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswas')->insert(['nis' => '1.2.13322', 'nama' => 'Agus', 'kelas_id' => 1]);
        DB::table('siswas')->insert(['nis' => '1.2.13323', 'nama' => 'Yono', 'kelas_id' => 1]);
        DB::table('siswas')->insert(['nis' => '1.3.14444', 'nama' => 'Atya', 'kelas_id' => 2]);
        DB::table('siswas')->insert(['nis' => '1.3.14445', 'nama' => 'Guna', 'kelas_id' => 2]);
    }
}
