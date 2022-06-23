<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alternative;
use App\Models\Location;
use App\Models\Criteria;
use DB;

class AlternativeController extends Controller
{
    public function index()
    {
        $criteria = Criteria::pluck('criteria_name');
        $alternative = Alternative::with('location')->get();
        return view ('admin.alternative.index', compact('alternative', 'criteria'));
    }


    public function create()
    {
        $criteria = Criteria::pluck('criteria_name');
        $location = DB::table('location')->get();
        return view('admin.alternative.add', compact('location', 'criteria'));
    }


    public function store(Request $request)
    {
        // dd($request->get('university'));
        $criteria = Criteria::pluck('criteria_name');
        $request->validate([
            'university'=>'required',
        ]);

        $alternative = new Alternative;
        $alternative->university = $request->get('university');

        foreach ($criteria as $c){

            if($c == 'location'){
                 $location = new Location;
                 $location->id = $request->get($c);
        
                $alternative->location()->associate($location);
            }
            else{
                $alternative->$c = $request->get($c);
            }
        }
       
       
        $alternative->save();
        
        return redirect()->route('alternative.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $criteria = Criteria::pluck('criteria_name');
        $location = DB::table('location')->get();
        $alternative = DB::table('alternative')->where('id', $id)->first();
        return view('admin.alternative.edit', compact('alternative','location', 'criteria'));
    }

 

    public function update(Request $request, $id)
    {

        $criteria = Criteria::pluck('criteria_name');
        $request->validate([
            'university'=>'required',
        ]);

        $alternative = Alternative::with('location')->where('id', $id)->first();
        $alternative->university = $request->get('university');

        foreach ($criteria as $c){

            if($c == 'location'){
                 $location = new Location;
                 $location->id = $request->get($c);
        
                $alternative->location()->associate($location);
            }
            else{
                $alternative->$c = $request->get($c);
            }
        }
       
       
        $alternative->save();
        
        return redirect()->route('alternative.index');
    }


    public function destroy($id)
    {
        Alternative::find($id)->delete();
        return redirect()->route('alternative.index');
    }
}
