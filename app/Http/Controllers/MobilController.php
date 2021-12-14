<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MobilController extends Controller
{
    public function index()
    {
    	// mengambil data dari table mobil
        //$absen = DB::table('absen')->get();
        $mobil = DB::table('mobil')->paginate(8);

    	// mengirim data mobil ke view index
    	return view('mobil.index',['mobil' => $mobil]);

    }
    // method untuk menampilkan view form tambah mobil
    public function tambah()
    {
        // memanggil view tambah
        return view('mobil.tambah');
    }

    public function store(Request $request)
    {
	DB::table('mobil')->insert([
		'merkmobil' => $request->merkmobil,
		'stockmobil' => $request->stockmobil,
		'tersedia' => $request->tersedia,
	]);
	    return redirect('/mobil');
    }

    public function edit($id)
    {
        $mobil = DB::table('mobil')->where('kodemobil',$id)->get();

        return view('mobil.edit',['mobil' => $mobil]);
    }

    public function view($id)
    {
        $mobil = DB::table('mobil')->where('kodemobil',$id)->get();

        return view('mobil.detail',['mobil' => $mobil]);
    }

    public function update(Request $request)
    {
        DB::table('mobil')->where('kodemobil',$request->id)->update([
            'merkmobil' => $request->merkmobil,
		    'stockmobil' => $request->stockmobil,
		    'tersedia' => $request->tersedia
        ]);
            return redirect('/mobil');
    }

    public function hapus($id)
    {
        // menghapus data mobil berdasarkan id yang dipilih
        DB::table('mobil')->where('kodemobil',$id)->delete();

        // alihkan halaman ke halaman mobil
        return redirect('/mobil');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$mobil = DB::table('mobil')
		->where('merkmobil','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('mobil.index',['mobil' => $mobil]);

	}
}
