<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Guru;

class GuruController extends Controller
{
    public function index()
    {
    	$guru = Guru::all();

    	return view('app.guru.index', ['guru' => $guru]);
    }
}
