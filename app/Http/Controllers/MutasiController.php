<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MutasiController extends Controller
{
    public function index()
    {
    	//$mutasi = DB::table('mutasi')->get();
        $mutasi = DB::table('mutasi')->paginate(6);

    	return view('mutasi.index',['mutasi' => $mutasi]);
    }
    public function tambah()
    {
        return view('mutasi.tambah');
    }
    public function store(Request $request)
    {
	DB::table('mutasi')->insert([
		'IDPegawai' => $request->IDPegawai,
		'Departemen' => $request->Departemen,
		'SubDepartemen' => $request->SubDepartemen,
		'MulaiBertugas' => $request->MulaiBertugas
	]);
	    return redirect('/mutasi');
    }
    public function edit($ID)
    {
        $mutasi = DB::table('mutasi')->where('ID',$ID)->get();

        return view('mutasi.edit',['mutasi' => $mutasi]);
    }
    public function update(Request $request)
    {
        DB::table('mutasi')->where('ID',$request->ID)->update([
            'IDPegawai' => $request->IDPegawai,
            'Departemen' => $request->Departemen,
            'SubDepartemen' => $request->SubDepartemen,
            'MulaiBertugas' => $request->MulaiBertugas
        ]);
        return redirect('/mutasi');
    }
    public function hapus($ID)
    {
        DB::table('mutasi')->where('ID',$ID)->delete();

        return redirect('/mutasi');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$mutasi = DB::table('mutasi')
		->where('mutasi_IDPegawai','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('mutasi.index',['mutasi' => $mutasi]);

	}
}

