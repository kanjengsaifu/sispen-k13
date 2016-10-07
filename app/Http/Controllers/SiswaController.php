<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
    	$siswa = Siswa::all();

    	return view('app.siswa.index', ['siswa' => $siswa]);
    }
}
