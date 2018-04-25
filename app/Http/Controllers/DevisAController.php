<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DevisA;

class DevisAController extends Controller
{
    public function create($idDso)
    {
        return view('dso.devis.a.create', ['idDso'=> $idDso]);
    }

    public function store($idDso, Request $request) 
    {
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

        $devisA2 = new DevisA2;

        $devisA2->id_dso = ($idDso);
        $devisA2->nom_commercial = request('nom_commercial');
        $devisA2->fonction_commercial = request('fonction_commercial');
        $devisA2->mail_commercial = request('mail_commercial');
        $devisA2->tel_commercial = request('tel_commercial');
        $devisA2->experience_commercial = request('experience_commercial');

        $devisA2->save();

        $devisA3 = new DevisA3;

        $devisA3->id_dso = ($idDso);
        $devisA3->nom_tech = request('nom_tech');
        $devisA3->fonction_tech = request('fonction_tech');
        $devisA3->mail_tech = request('mail_tech');
        $devisA3->tel_tech = request('tel_tech');
        $devisA3->experience_tech = request('experience_tech');

        $devisA3->save();

        //redirect to the defined page
        //return redirect('/dso/{idDso}/emballages');
        //return view('dso.emballages.show');
       // return Redirect::action('UserController@profile', array('user' => 1));

    }

    public function edit($idDso, $idDevisA1, $idDevisA2, $idDevisA3) 
    {
        $data = DevisA::find($idDevisA1, $idDevisA2, $idDevisA3);
        return view('dso.devisA.edit', ['data'=>$data, 'idDso'=>$idDso, 'idDevisA1'=>$idDevisA1, 'idDevisA2'=>$idDevisA2, 'idDevisA3'=>$idDevisA3]);
    }

    public function update($idDso, $idDevisA1, $idDevisA2, $idDevisA3, Request $request)
    {
        $devisA1 = DevisA::find($idDevisA1);

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

        $devisA2 = DevisA::find($idDevisA2);

        $devisA2->id_dso = ($idDso);
        $devisA2->nom_commercial = request('nom_commercial');
        $devisA2->fonction_commercial = request('fonction_commercial');
        $devisA2->mail_commercial = request('mail_commercial');
        $devisA2->tel_commercial = request('tel_commercial');
        $devisA2->experience_commercial = request('experience_commercial');

        $devisA2->save();

        $devisA3 = DevisA::find($idDevisA3);

        $devisA3->id_dso = ($idDso);
        $devisA3->nom_tech = request('nom_tech');
        $devisA3->fonction_tech = request('fonction_tech');
        $devisA3->mail_tech = request('mail_tech');
        $devisA3->tel_tech = request('tel_tech');
        $devisA3->experience_tech = request('experience_tech');

        $devisA3->save();

    }
}
