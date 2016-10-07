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
    	$pelajaran = new Pelajaran;

    	$pelajaran->pelajaran = $request->pelajaran;

    	$pelajaran->save();

    	return redirect()->route('app.pelajaran.index');
    }

    public function update(Request $request)
    {
    	//
    }

    public function delete($id)
    {
    	$pelajaran = Pelajaran::find($id);

    	if ($pelajaran) {
    		$pelajaran->delete();
    	}

    	return redirect()->route('app.pelajaran.index');
    }
}
