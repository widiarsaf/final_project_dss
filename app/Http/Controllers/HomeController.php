<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\User;
use Auth;
use DB;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        if(Auth::User()->level == '1'){
            $admin = User::where('level', '1')->first();
            $criteria = DB::table('criteria')->get();
            $location = DB::table('location')->get();
            return redirect()->route('alternative.index');
        }
        if(Auth::User()->level == '2'){
            $data = User::where('level', '2')->first();
            $criteria = DB::table('criteria')->get();
            $location = DB::table('location')->get();
            return redirect()->route('dataAnalyst');
        }
        $criteria = DB::table('criteria')->get();
        $location = DB::table('location')->get();
        return view('welcome', compact('location','criteria'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        request()->session()->invalidate();
 
        request()->session()->regenerateToken();
 
        return redirect('/');
    }
}
