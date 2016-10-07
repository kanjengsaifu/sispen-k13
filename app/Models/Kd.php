<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kd extends Model
{
    public function pelajaran()
    {
    	return $this->belongsTo(Pelajaran::class);
    }
}
