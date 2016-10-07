<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Pelajaran;

class PelajaranController extends Controller
{
    public function index()
    {
    	$pelajaran = Pelajaran::all();

    	return view('app.pelajaran.index', ['pelajaran' => $pelajaran]);
    }
}
