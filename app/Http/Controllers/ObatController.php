<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class ObatController extends Controller
{
    public function obatindex()
    {
    	$obat = DB::table('obat')->get();
    	return view('obatindex',['obat' => $obat]);
    }
    public function obat_tambah()
    {
    	$obat = DB::table('obat')->get();

    	return view('obat_tambah',['obat' => $pobat]);
 
    }
    public function getobat()
    {
    	$obat = DB::table('obat')->get();
 
    	// mengirim data obat ke view index
    	if($obat){
            return response()->json(["Result"=>
                    ["ResultCode"=> 1,
                    "ResultMessage"=>"Berhasil Get Obat" ],
                    "DataUser"=>$obat
                ], 
            );
    	}
	}
    public function hapusobat($id)
    {
        DB::table('obat')->where('id_obat',$id)->delete();
        
        return redirect('/obatindex');
    }

    public function obat_edit($id)
    {
        $obat = DB::table('obat')->where('id_obat',$id)->get();

        return view('obat_edit',['id_obat' => $obat]);

        
    }