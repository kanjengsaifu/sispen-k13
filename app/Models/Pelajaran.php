<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelajaran extends Model
{
    public function kds()
    {
    	return $this->hasMany(Kd::class);
    }

    public function getKdCountAttribute()
    {
    	return $this->kds->count();
    }
}
