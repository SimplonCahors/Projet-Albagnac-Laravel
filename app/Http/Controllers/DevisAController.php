<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DevisA1;
use App\DevisA2;
use App\DevisA3;

class DevisAController extends Controller
{
    public function create($idDso)
    {
      
    }

    public function store($idDso, Request $request) 
    {

    }

    public function edit($idDso) 
    {
        $data1 = DevisA1::where('id_dso', $idDso)->first();
        $data2 = DevisA2::where('id_dso', $idDso)->first();
        $data3 = DevisA3::where('id_dso', $idDso)->first();
        return view('dso.devis.a.edit', ['data1'=>$data1,'data2'=>$data2,'data3'=>$data3, 'idDso'=>$idDso]);
    }

    public function update($idDso, Request $request)
    {
        
        $devisA1 = DevisA1::where('id_dso', $idDso)->first();

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

        $devisA2 = DevisA2::where('id_dso', $idDso)->first();

        $devisA2->id_dso = ($idDso);
        $devisA2->nom_commercial = request('nom_commercial');
        $devisA2->fonction_commercial = request('fonction_commercial');
        $devisA2->mail_commercial = request('mail_commercial');
        $devisA2->tel_commercial = request('tel_commercial');
        $devisA2->experience_commercial = request('experience_commercial');

        $devisA2->save();

        $devisA3 = DevisA3::where('id_dso', $idDso)->first();

        $devisA3->id_dso = ($idDso);
        $devisA3->nom_tech = request('nom_tech');
        $devisA3->fonction_tech = request('fonction_tech');
        $devisA3->mail_tech = request('mail_tech');
        $devisA3->tel_tech = request('tel_tech');
        $devisA3->experience_tech = request('experience_tech');

        $devisA3->save();

        return redirect()->route('devis-a-edit', ['idDso' => $idDso]);

    }
}
