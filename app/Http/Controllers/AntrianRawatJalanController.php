<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class AntrianRawatJalanController extends Controller
{
	public function antrianRawatJalanIndex()
	{
    	// mengambil data dari table antrian poli
		$antrian_pendaftaran = DB::table('antrian_pendaftaran')->join('poli','poli.id','=','antrian_pendaftaran.id_poli')
		->join('pasien','pasien.no_rm','=','antrian_pendaftaran.no_rm')
		->get();

    	// mengirim data antrian poli ke view index
		return view('View_antrian_pendaftaran/antrianRawatJalanIndex',['antrian_pendaftaran' => $antrian_pendaftaran]);

	}

	public function tambahAntrianRawatJalan()
	{
		$poli=DB::table('poli')->get();
		$pasien=DB::table('pasien')->get();
		return view('View_antrian_pendaftaran/tambahAntrianRawatJalan',compact('poli','pasien'));

	}
	public function editAntrianRawatJalan(Request $request, $id_antrian_pendaftaran)
	{
		$antrian_pendaftaran = DB::table('antrian_pendaftaran')->join('poli','poli.id','=','antrian_pendaftaran.id_poli')
		->join('pasien','pasien.no_rm','=','antrian_pendaftaran.no_rm')
		->where('antrian_pendaftaran.id_antrian_pendaftaran',$id_antrian_pendaftaran)->get();
		$poli=DB::table('poli')->get();
		$pasien=DB::table('pasien')->get();
		return view('View_antrian_pendaftaran/edit',compact('antrian_pendaftaran','poli','pasien'));

	}
	public function proseseditAntrianRawatJalan(Request $request,$id_antrian_pendaftaran)
	{
		DB::table('antrian_pendaftaran')->where('id_antrian_pendaftaran',$id_antrian_pendaftaran)->update([
			'id_poli' => $request->id_poli,
			'no_rm' => $request->no_rm,
			'tanggal' => $request->tanggal,
		]);
		return redirect(route('antrianRawatJalanIndex'))->with('up','-');
	}
	public function hapusAntrianRawatJalan($id_antrian_pendaftaran)
	{
		DB::table('antrian_pendaftaran')->where('id_antrian_pendaftaran',$id_antrian_pendaftaran)->delete();
		return redirect(route('antrianRawatJalanIndex'))->with('del','-');
	}

	public function createAntrianRawatJalan(Request $request)
	{
		$noUrutAkhir = DB::table('antrian_pendaftaran')->max('no_antrian');
		$nomor = sprintf("%03s", abs($noUrutAkhir + 1));
		DB::table('antrian_pendaftaran')->insert([
			'id_poli' => $request->id_poli,
			'no_rm' => $request->no_rm,
			'no_antrian' => $nomor,
			'tanggal' => $request->tanggal,
		]);
		return redirect(route('antrianRawatJalanIndex'))->with('add','-');
	}
}
