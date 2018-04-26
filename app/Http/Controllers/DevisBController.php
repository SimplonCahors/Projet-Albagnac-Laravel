<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DevisB1;
use App\DevisB2;

class DevisBController extends Controller
{
    public function create($idDso)
    {
        
    }

    public function store($idDso, Request $request) 
    {
        
    }

    public function edit($idDso) 
    {
        $data1 = DevisB1::where('id_dso', $idDso)->first();
        $data2 = DevisB2::where('id_dso', $idDso)->first();
        return view('dso.devis.b.edit', ['data1'=>$data1,'data2'=>$data2, 'idDso'=>$idDso]);
    }

    public function update($idDso, Request $request)
    {
        $devisB1 = DevisB1::where('id_dso', $idDso)->first();

        $devisB1->id_dso = ($idDso);
        $devisB1->besoin = request('besoin');
        $devisB1->rem_besoin = request('rem_besoin');
        $devisB1->fournisseur_actuel = request('fournisseur_actuel');
        $devisB1->nom_concurrent = request('nom_concurrent');
        $devisB1->type_concurrent = request('type_concurrent');
        $devisB1->rem_concurrent = request('rem_concurrent');

        $devisB1->save();

        $devisB2 = DevisB2::where('id_dso', $idDso)->first();

        $devisB2->id_dso = ($idDso);
        $devisB2->nbr_type_machines = request('nbr_type_machines');
        $devisB2->site_prod = request('site_prod');
        $devisB2->implantation_sites = request('implantation_sites');
        $devisB2->env_concurrentiel = request('env_concurrentiel');

        $devisB2->save();

        return redirect()->route('devis-b-edit', ['idDso' => $idDso]);

    }
}
