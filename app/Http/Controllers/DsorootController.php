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
        $dsoList = Dsoroot::all();
        return view('accueil')->with('dsoList', $dsoList) ;
        // return view('dso.devis.roots.index'); // inutil
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function create($idUser)
    {
        return view('dso.devis.roots.create')->with('idUser', $idUser) ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $idUser)
    {
        
        // $this->validate(request(), [
        //     'date_demande' => 'required',
        //     'date_rep' => 'required',
        //     'date_envoi' => 'required',
        //     'date_livraison' => 'required',
        // ]);

        //create a new emballage 
        $dsoRoot = new Dsoroot;

        //use the request data
        $dsoRoot->id_user = $idUser;
        $dsoRoot->date_demande = request('date_demande');
        $dsoRoot->date_rep = request('date_rep');
        $dsoRoot->date_envoi = request('date_envoi');
        $dsoRoot->date_livraison = request('date_livraison');

        //save it to the dbb
        $dsoRoot->save();

        //redirect to the home page
        return redirect('/accueil');
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
    public function edit($idUser, $idDso)
    {
        $data = Dsoroot::find($idDso);
        return view('dso.devis.roots.edit')->with('idUser', $idUser)->with('idDso', $idDso)->with('data', $data) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idUser, $idDso)
    {

        $dsoRoot = Dsoroot::find($idDso); // récupère le Dso à modifier

        //use the request data
        $dsoRoot->id_user = $idUser;
        $dsoRoot->date_demande = request('date_demande');
        $dsoRoot->date_rep = request('date_rep');
        $dsoRoot->date_envoi = request('date_envoi');
        $dsoRoot->date_livraison = request('date_livraison');

        //save it to the dbb
        $dsoRoot->save();

        //redirect to the home page
        return redirect('/');
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
