<?php

namespace App\Http\Controllers;

use App\Models\RekamMedis;
use App\Http\Requests\StoreRekamMedisRequest;
use App\Http\Requests\UpdateRekamMedisRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request; 

class RekamMedisController extends Controller
{
   
    public function index()
    {
        $RekamMedis = DB::table('rekam_medis')
            ->join('pasien', 'rekam_medis.NoRM', '=', 'pasien.no_rm')
            ->join('poli', 'rekam_medis.id_poli', '=', 'poli.id')
            ->join('dokter', 'rekam_medis.id_dokter', '=', 'dokter.id') 
            ->get();


    return view('view_rm.index', compact('RekamMedis'));
    }

	public function tambah()
	{
        $dokter = DB::table('dokter')->get();
        $pasien = DB::table('pasien')->get();
        $poli = DB::table('poli')->get();

        return view('view_rm.tambah', compact('dokter','pasien','poli'));
    }

    public function simpan(Request $request)
    {
        DB::table('rekam_medis')->insert([
            'NoRm' => $request->psn_id,
            'tindakan' => $request->tindakan,
            'id_poli' => $request->pli_id,
            'id_dokter' => $request->dkr_id,
            'tanggal' => $request->tanggal,
    
        ]);
        return redirect('/rekam_medis');
    }

    public function hapus($id)
    {
        DB::table('rekam_medis')->where('id_rm',$id)->delete();
        
        return redirect('/rekam_medis');
    }
    
    public function cari(Request $request)
	{
		$cari = $request->cari;
 
    	$RekamMedis = DB::table('rekam_medis')
            ->join('pasien', 'rekam_medis.NoRM', '=', 'pasien.no_rm')
            ->join('poli', 'rekam_medis.id_poli', '=', 'poli.id')
            ->join('dokter', 'rekam_medis.id_dokter', '=', 'dokter.id') 
            ->where('NoRM','like',"%".$cari."%")
            ->paginate();
		
		return view('view_rm.index',['RekamMedis' => $RekamMedis]);
 
	}

}
