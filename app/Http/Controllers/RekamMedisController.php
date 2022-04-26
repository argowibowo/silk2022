<?php

namespace App\Http\Controllers;

use App\Models\RekamMedis;
use App\Http\Requests\StoreRekamMedisRequest;
use App\Http\Requests\UpdateRekamMedisRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class RekamMedisController extends Controller
{
   
    public function index()
    {
        return view('view_rm.index',[
            // 'rm'=>RekamMedis::
            // all()
        ]);
    }

	public function tambah()
	{
        return view('view_rm.tambah',[
            // 'rm'=>RekamMedis::
            // all()
        ]);
    }
    
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$rm = DB::table('rekammedis')
		->where('NoRM','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('rm.index',['rm' => $rm]);
 
	}

}
