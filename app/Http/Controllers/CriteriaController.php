<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Criteria;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use DB;

class CriteriaController extends Controller
{
   
    public function index()
    {
        $criteria = DB::table('criteria')->get();
        return view ('admin.criteria.index', compact('criteria'));
    }

   
    public function create()
    {
         return view('admin.criteria.add');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'criteria_name'=>'required',
            'attribute'=>'nullable',
        ]);

        // rename the criteria input
        $criteria_input = $request->get('criteria_name');
        $criteria_lower = strtolower( $criteria_input );
        $criteria_underscore = str_replace(" ","_", $criteria_lower );

        // create new column in alternatives table
        Schema::table('alternative', function (Blueprint $table) use ($criteria_underscore){
            $table->float($criteria_underscore)->default(0)->nullable();
        });
        
        $criteria = new Criteria;
        $criteria ->criteria_name =  $criteria_underscore;
        $criteria ->attribute = $request->get('attribute');
        $criteria ->save();

        
        return redirect()->route('criteria.index');
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $criteria = DB::table('criteria')->where('id', $id)->first();
        return view('admin.criteria.edit', compact('criteria'));
    }

   
    public function update(Request $request, $id)
    {
        $request->validate([
            'criteria_name'=>'required',
            'attribute'=>'nullable',
        ]);

        $criteria = Criteria::where('id', $id)->first();
        $criteria_input = $request->get('criteria_name');
        $criteria_lower = strtolower( $criteria_input );
        $criteria_underscore = str_replace(" ","_", $criteria_lower );

         Schema::table('alternative', function (Blueprint $table) use ($criteria, $criteria_underscore) {
            $table->renameColumn("[$criteria->criteria_name]", "[$criteria_underscore]");
        });
        $criteria ->criteria_name =  $criteria_underscore;
        $criteria ->attribute = $request->get('attribute');
        $criteria->save();

        return redirect()->route('criteria.index');
    }

   
    public function destroy($id)
    {
        
        $criteria = Criteria::find($id);
        Schema::table('alternative', function (Blueprint $table) use ($criteria) {
            $table->dropColumn($criteria->criteria_name);
        });
        $criteria->delete();
        return redirect()->route('criteria.index');
    }
}
