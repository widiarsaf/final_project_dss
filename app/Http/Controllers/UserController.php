<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use DB;

class UserController extends Controller
{

    public function index()
    {
        $user = DB::table('users')->get();
        return view ('admin.user.index', compact('user'));
    }


    public function create()
    {
        return view('admin.user.add');
    }


    public function store(Request $request)
    {
         $request->validate([
            'username'=>'required',
            'email'=>['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'=>'required',
            'level'=>'required',
        ]);

        $user = new User;
        $user->username = $request->get('username');
        $user->email= $request->get('email');
        $user->password = Hash::make($request->get('password'));
        $user->level = $request->get('level');
        
        $user->save();
        
        return redirect()->route('user.index');
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
