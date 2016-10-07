<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
	public $timestamps = false;
	public $incrementing = false;
	protected $primaryKey = 'nis';

    public function kelas()
    {
    	return $this->belongsTo(Kelas::class);
    }
}
