<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Guru;

class GuruController extends Controller
{
    public function index($page = 1)
    {
    	$guru = Guru::all();

    	return view('app.guru.index', ['guru' => $guru]);
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
