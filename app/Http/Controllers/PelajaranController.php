<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PelajaranController extends Controller
{
    public function index()
    {
    	return view('app.pelajaran.index');
    }
}
