<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use DB;

class CompteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $adv = $request->input('role');
        $password = $request->input('password');
        
        DB::table('users')->insert([
            'name' => $name,
            'email' => $email,
            'adv'  => $adv,
            'password' => Hash::make($password)
        ]);
        return redirect()->route('users-index');
        
    }
    public function createadmin()
    {
        $name = 'admin';
        $email = 'admin@admin.com';
        $adv = true;
        $password = 'secret';
        
        DB::table('users')->insert([
            'name' => $name,
            'email' => $email,
            'adv'  => $adv,
            'password' => Hash::make($password)
        ]);
        return redirect()->route('users-index');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $users = DB::table('users')->get();
        return view('users/index', ['users' => $users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $users = DB::table('users')
        ->where('id','=',$id)
        ->delete();
        return redirect()->route('users-index');
    }
}
