<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    public $timestamps = false;
	public $incrementing = false;
	protected $primaryKey = 'nip';
}
