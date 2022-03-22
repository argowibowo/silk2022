<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
    	return view('welcome');
    }

    public function validasiLogin(Request $request){
        $findUser = DB::table('users as u')
                        ->where('username', $request->input('username'))->get()->first;
        if($findUser->id){
            if(Hash::check($request->input('password'), $findUser->id->password)){
                $request->session()->put('login','1');
                $request->session()->put('username',$request->input('username'));
                $request->session()->put('is_dokter',$findUser->id->is_dokter);
                $request->session()->put('is_farmasi',$findUser->id->is_farmasi);
                $request->session()->put('is_pendaftaran',$findUser->id->is_pendaftaran);
                return redirect('/dash');
            }else{
                return redirect('/');
            }
        }
        return redirect('/');
    }

    public function generatepassword(){
        $tmp = Hash::make("admin123");
        return $tmp;
    }

    public function logoutSistem(Request $request){
        $request->session()->forget('login');
        return redirect('/');
    }
}