<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PoliController extends Controller
{
    public function poli_dash(){
        // mengambil data dari table pasien
    	$poli = DB::table('poli')->get();
 
    	// mengirim data pasien ke view index
    	return view('poli_dash',['poli' => $poli]);
    }

    public function poli_tambah(Request $request)
{
	DB::table('poli')->insert([
		'nama_poli' => $request->nama_poli,
	]);
	return redirect('/poli_dash');
}
public function poli_delete($id)
{
	DB::table('poli')->where('id',$id)->delete();
	
	return redirect('/poli_dash');
}
public function poli_edit($id)
{
	$poli = DB::table('poli')->where('id',$id)->get();

	return view('poli_edit',['poli' => $poli]);

}
public function poli_update(Request $request)
{
	DB::table('poli')->where('id',$request->id)->update([
		'nama_poli' => $request->nama_poli,
	]);
	return redirect('/poli_dash');
}
}
