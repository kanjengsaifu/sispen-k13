<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelases';

    public function getKelasNameAttribute()
    {
    	return $this->tingkat . ' - ' . $this->kelas;
    }

    public function siswas()
    {
    	return $this->hasMany(Siswa::class);
    }
}
