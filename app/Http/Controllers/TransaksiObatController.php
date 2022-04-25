<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class TransaksiObatController extends Controller
{
    public function transaksiobatindex()
    {
    	$t = DB::table('transaksi')->get();
    	return view('transaksiobatindex',['transaksiobat' => $t]);
    }
  
    public function gettransaksiobat()
    {
    	$t = DB::table('transaksiobat')->get();
 
    	// mengirim data transaksi ke view index
    	if($t){
            return response()->json(["Result"=>
                    ["ResultCode"=> 1,
                    "ResultMessage"=>"Berhasil Get Obat" ],
                    "DataUser"=>$t
                ], 
            );
    	}
	}
  