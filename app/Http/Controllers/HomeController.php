<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use DB;

class HomeController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    public function index()
    {
         $location = DB::table('location')->get();
        return view('welcome', compact('location'));
    }
}
