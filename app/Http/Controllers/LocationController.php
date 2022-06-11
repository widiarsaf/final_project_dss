<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LocationController extends Controller
{
    public function index()
    {
        $location = DB::table('location')->get();
        return view ('admin.location.index', compact('location'));
    }

    public function create()
    {
        return view('admin.location.add');
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
