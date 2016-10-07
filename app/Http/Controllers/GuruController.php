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
    	$guru = new Guru;

    	$guru->nip = $request->nip;
    	$guru->nama = $request->nama;

    	$guru->save();

    	return redirect()->route('app.guru.index');
    }

    public function update(Request $request)
    {
    	//
    }

    public function delete($id)
    {
    	$guru = Guru::find($id);

    	if ($guru) {
    		$guru->delete();
    	}

    	return redirect()->route('app.guru.index');
    }
}
