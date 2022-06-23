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
        $alternative = DB::table('alternatives')->where('id', $id)->first();
        return view('admin.alternative.edit', compact('alternatives','location', 'criteria'));
    }

 

    public function update(Request $request, $id)
    {
          $request->validate([
            'university'=>'required',
            'location'=>'nullable',
            'national_rank'=>'nullable',
            'quality_educations'=>'nullable',
            'alumni_employment'=>'nullable',
            'quality_faculty'=>'nullable',
            'research_performance'=>'nullable',
        ]);

        $alternative = Alternative::with('location')->where('id', $id)->first();
        $alternative->university = $request->get('university');
        $alternative->national_rank = $request->get('national_rank');
        $alternative->quality_educations = $request->get('quality_educations');
        $alternative->alumni_employment = $request->get('alumni_employment');
        $alternative->quality_faculty = $request->get('quality_faculty');
        $alternative->research_performance = $request->get('research_performance');

        $location = new Location;
        $location->id = $request->get('location');
        
        $alternative->location()->associate($location);
        $alternative->save();
        
        return redirect()->route('alternative.index');
    }


    public function destroy($id)
    {
        Alternative::find($id)->delete();
        return redirect()->route('alternative.index');
    }
}
