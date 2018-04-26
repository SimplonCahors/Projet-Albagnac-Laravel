<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Dsoroot;
use App\User;
use Auth;
use App\DevisA1;
use App\DevisA2;
use App\DevisA3;

class DsorootController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsoList = Dsoroot::all();   // va chercher toutes les infos de la table Dsoroot
        $idUser = Auth::user()->id ;  // permet de recup l'id de l'utilisateur connecté
        $users = User::all();   // permet de recup les infos de la table Users

        $dsocom = Dsoroot::all()->where('id_user', $idUser);  // permet de recupérer les dso du com connecté

        // return view('accueil')->with('dsoList', $dsoList)->with('idUser', $idUser) ;
        return view('accueil', ['dsoList'=>$dsoList, 'idUser'=> $idUser, 'users'=>$users, 'dsocom'=>$dsocom]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function create()
    {
        $today = date("Y-m-d");
        return view('dso.devis.roots.create', ['today'=>$today]) ;
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
        $dsoRoot->id_user = Auth::user()->id;
        $dsoRoot->date_demande = request('date_demande');
        $dsoRoot->date_rep = request('date_rep');
        $dsoRoot->date_envoi = request('date_envoi');
        $dsoRoot->date_livraison = request('date_livraison');

        //save it to the dbb
        $dsoRoot->save();

        $idDso = $dsoRoot->id;
        // save DevisA1
        $devisA1 = new DevisA1;

        $devisA1->id_dso = ($idDso);
        $devisA1->nom_client = request('nom_client');
        $devisA1->adresse_client = request('adresse_client');
        $devisA1->tel_client = request('tel_client');
        $devisA1->fax_client = request('fax_client');
        $devisA1->pays_client = request('pays_client');
        $devisA1->categorie_client = request('categorie_client');
        $devisA1->secteur_client = request('secteur_client');
        $devisA1->sousecteur_client = request('sousecteur_client');
        $devisA1->type_client = request('type_client');
        $devisA1->siret_client = request('siret_client');

        $devisA1->save();


        //redirect to the home page
        return redirect()->route('devis-a-create', ['idDso' => $idDso]);
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
