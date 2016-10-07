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
    	$siswa = new Siswa;

    	$siswa->kelas_id = $request->kelas_id;
    	$siswa->nis = $request->nis;
    	$siswa->nama = $request->nama;

    	$siswa->save();

    	return redirect()->route('app.siswa.index');
    }

    public function update(Request $request)
    {
    	//
    }

    public function delete($id)
    {
    	$siswa = Siswa::find($id);

    	if ($siswa) {
    		$siswa->delete();
    	}

    	return redirect()->route('app.siswa.index');
    }
}
