<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Pelajaran;

class PelajaranController extends Controller
{
    public function index($page = 1)
    {
    	$pelajaran = Pelajaran::all();

    	return view('app.pelajaran.index', ['pelajaran' => $pelajaran]);
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
