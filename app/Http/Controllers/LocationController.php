<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
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
        $request->validate([
            'location_id'=>'required',
            'location_name'=>'required',
            'location_value'=>'nullable',
        ]);

        $location = new Location;
        $location->id = $request->get('location_id');
        $location->location_name = $request->get('location_name');
        $location->value = $request->get('location_value');
        $location->save();
        
        return redirect()->route('location.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $location = DB::table('location')->where('id', $id)->first();
        return view('admin.location.edit', compact('location'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'id'=>'required',
            'name'=>'required',
            'value'=>'nullable',
        ]);

        location::find($id)->update($request->all());
        location::save();
        return redirect()->route('location.index');
    }


    public function destroy($id)
    {
        location::find($id)->delete();
        return redirect()->route('location.index');
    }
}
