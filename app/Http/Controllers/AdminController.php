<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        if(!empty(Session::get('login'))){
            return view('dashboard');
        }else{
            return redirect('/');
        }
    }
}