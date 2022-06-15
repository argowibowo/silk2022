<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class ObatController extends Controller
{
    public function obatindex()
    {
    	// mengambil data dari table obat
    	$obat = DB::table('obat')->join('stok_obat','stok_obat.kode_obat','=','obat.kode_obat')->orderBy('id_obat','DESC')->get();

    	// mengirim data obat ke view index
    	return view('view_obat/obatindex',['obat' => $obat]);

    }
    public function obat_tambah()
    {
        return view('view_obat/obat_tambah');
    }
    public function updateobat($id_obat)
    {
        $data = DB::table('obat')->join('stok_obat','stok_obat.kode_obat','=','obat.kode_obat')->where('obat.id_obat',$id_obat)->get();

        // mengirim data obat ke view index
        return view('view_obat/obat_edit',compact('data'));
    }

    public function getObat()
    {
    	// mengambil data dari table obat
    	$obat = DB::table('obat')->get();

    	// mengirim data obat ke view index
    	if($obat){
            return response()->json(["Result"=>
                ["ResultCode"=> 1,
                "ResultMessage"=>"Success get data obat" ],
                "DataUser"=>$obat
            ], 200
        );
        }
    }

    public function tambahObat()
    {
    	$obat = DB::table('obat')->get();

    	return view('tambahObat',['obat' => $obat]);

    }

    public function createObat(Request $request)
    {
      DB::table('obat')->insert([
         'nama' => $request->nama,
         'kode_obat' => $request->kode_obat,
         'jenis_obat' => $request->jenis_obat,
     ]);

      DB::table('stok_obat')->insert([
        'kode_obat' => $request->kode_obat,
        'stok' => $request->stok,
        'tanggal_masuk' => $request->tanggal_masuk,
        'exp_date' => $request->exp_date,
    ]);

      return redirect(route('obatindex'));
  }
  public function obat_edit(Request $request,$id_obat)
  {
    DB::table('obat')->where('id_obat',$id_obat)->update([
        'nama' => $request->nama,
        'kode_obat' => $request->kode_obat,
        'jenis_obat' => $request->jenis_obat,
    ]);

    DB::table('stok_obat')->where('id',$id_obat)->update([
        'kode_obat' => $request->kode_obat,
        'stok' => $request->stok,
        'tanggal_masuk' => $request->tanggal_masuk,
        'exp_date' => $request->exp_date,
    ]);

    return redirect(route('obatindex'));
}
  public function hapusObat($id_obat)
  {
    DB::table('obat')->where('id_obat',$id_obat)->delete();

    DB::table('stok_obat')->where('id',$id_obat)->delete();

    return redirect(route('obatindex'));
}

}