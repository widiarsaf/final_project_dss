<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Criteria;
use App\Models\Location;
use DB;

class ProcessController extends Controller
{

    public function index(Request $request){
      
       $request->validate([
            'location'=>'required',
            'national_rank'=>'required',
            'quality_educations'=>'required',
            'alumni_employment'=>'required',
            'quality_faculty'=>'required',
            'research_performance'=>'required',


            'first_option' => 'required',
            'second_option' => 'required',
            'third_option' => 'required'
        ]);


        // Change Weight
        
        $c1 = DB::table('weight_criteria')->where('criteria_name','location' )->update(['weight' => $request->get('location')]);
        $c2 = DB::table('weight_criteria')->where('criteria_name','national_rank' )->update(['weight' => $request->get('national_rank')]);
        $c3 = DB::table('weight_criteria')->where('criteria_name','quality_educations' )->update(['weight' => $request->get('quality_educations')]);
        $c4 = DB::table('weight_criteria')->where('criteria_name','alumni_employment' )->update(['weight' => $request->get('alumni_employment')]);
        $c5 = DB::table('weight_criteria')->where('criteria_name','quality_faculty' )->update(['weight' => $request->get('quality_faculty')]);
        $c6 = DB::table('weight_criteria')->where('criteria_name','research_performance' )->update(['weight' => $request->get('research_performance')]);
        
        
        // Change Value Location
        $loc_1 = DB::table('location')->where('id',$request->get('first_option'))->update(['value' => 4]);
        $loc_1 = DB::table('location')->where('id',$request->get('second_option'))->update(['value' => 3]);
        $loc_1 = DB::table('location')->where('id',$request->get('third_option'))->update(['value' => 2]);
        DB::table('location')
               ->where('value', '!=',1)
               ->where('id', '!=', $request->get('first_option'))
               ->where('id', '!=', $request->get('second_option'))
               ->where('id', '!=', $request->get('third_option'))
               ->update(['value' => 1]);
        

        $location = DB::table('location')->get();
        return view('welcome', compact('location'));

        // Create Determine Matrix



        // Create Normalized Matrix




        // Create Weighted Normalized Matrix




        
    }


    public function reset(Request $request){
        $criteria = DB::table('weight_criteria')->where('weight', '!=', 0)->update(['weight' => 0]);
        $location_reset= DB::table('location')->where('value', '!=', 0)->update(['value' => 0]);
        $location = DB::table('location')->get();
        return view('welcome', compact('location'));
    }

    
}
