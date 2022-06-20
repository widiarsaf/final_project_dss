<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Criteria;
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

        $criteria = new Criteria;
        $criteria ->criteria_name = $request->get('criteria_name');
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

        $criteria =Criteria::where('id', $id)->first();
        $criteria ->criteria_name = $request->get('criteria_name');
        $criteria ->attribute = $request->get('attribute');
        $criteria->save();

        return redirect()->route('criteria.index');
    }

   
    public function destroy($id)
    {
        Criteria::find($id)->delete();
        return redirect()->route('criteria.index');
    }
}
