<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index($page = 1)
    {
    	$siswa = Siswa::all();

    	return view('app.siswa.index', ['siswa' => $siswa]);
    }

    public function save(Request $request)
    {
    	//
    }

    public function update(Request $request)
    {
    	//
    }

    public function delete($guru_id)
    {
    	//
    }
}
