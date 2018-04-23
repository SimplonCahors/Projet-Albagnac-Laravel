<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dsoroot;

class DsorootController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('dso.devis.roots.index'); // inutile
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($idUser)
    {
        return view('dso.devis.roots.create')->with('idUser', $idUser) ; // le chemin semble ok
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate(request(), [
            
            'date_demande' => 'required',
            'date_rep' => 'required',
            'date_envoi' => 'required',
            'date_livraison' => 'required',
        ]);

            //create a new emballage 
            $dsoRoot = new Dsoroot;

            //use the request data
            $dsoRoot->id_user = request('id_user');
            $dsoRoot->date_demande = request('date_demande');
            $dsoRoot->date_rep = request('date_rep');
            $dsoRoot->date_envoi = request('date_envoi');
            $dsoRoot->date_livraison = request('date_livraison');


            //save it to the dbb
            $dsoRoot->save();

        //create a new post using the request data and save it to the dbb
        //Dsoroot::create(request(['date_demande', 'date_rep', 'date_envoi', 'date_livraison']));

        //redirect to the home page
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
