<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DevisE;

class DevisEController extends Controller
{
    public function create($idDso)
    {
        return view('dso.devisE.create', ['idDso'=> $idDso]);
    }

    public function store($idDso, Request $request) 
    {
        $devisE1 = new DevisE1;

        $devisE1->id_dso = ($idDso);
        $devisE1->type_materiel = request('type_materiel');
        $devisE1->marque_materiel = request('marque_materiel');
        $devisE1->modele_materiel = request('modele_materiel');
        $devisE1->mise_route_materiel = request('mise_route_materiel');

        $devisE1->save();

        $devisE2 = new DevisE2;

        $devisE2->id_dso = ($idDso);
        $devisE2->ref_eti = request('ref_eti');
        $devisE2->position_eti = request('position_eti');
        $devisE2->dimension_impression_eti = request('dimension_impression_eti');
        $devisE2->rem_eti = request('rem_eti');

        $devisE2->save();

        $devisE3 = new DevisE3;

        $devisE3->id_dso = ($idDso);
        $devisE2->ref_emb = request('ref_emb');
        $devisE2->position_emb = request('position_emb');
        $devisE2->dimension_impression_emb = request('dimension_impression_emb');
        $devisE2->rem_emb = request('rem_emb');

        $devisE3->save();
    }

    public function edit($idDso, $idDevisE1, $idDevisE2, $idDevisE3) 
    {
        $data = DevisE::find($idDevisE1, $idDevisE2, $idDevisE3);
        return view('dso.devisE.edit', ['data'=>$data, 'idDso'=>$idDso, 'idDevisE1'=>$idDevisE1, 'idDevisE2'=>$idDevisE2, 'idDevisE3'=>$idDevisE3]);
    }

    public function update($idDso, $idDevisE1, $idDevisE2, $idDevisE3, Request $request)
    {
        $devisE1 = DevisE::find($idDevisE1);

        $devisE1->id_dso = ($idDso);
        $devisE1->type_materiel = request('type_materiel');
        $devisE1->marque_materiel = request('marque_materiel');
        $devisE1->modele_materiel = request('modele_materiel');
        $devisE1->mise_route_materiel = request('mise_route_materiel');

        $devisE1->save();

        $devisE2 = DevisE::find($idDevisE2);

        $devisE2->id_dso = ($idDso);
        $devisE2->ref_eti = request('ref_eti');
        $devisE2->position_eti = request('position_eti');
        $devisE2->dimension_impression_eti = request('dimension_impression_eti');
        $devisE2->rem_eti = request('rem_eti');

        $devisE2->save();

        $devisE3 = DevisE::find($idDevisE3);

        $devisE3->id_dso = ($idDso);
        $devisE2->ref_emb = request('ref_emb');
        $devisE2->position_emb = request('position_emb');
        $devisE2->dimension_impression_emb = request('dimension_impression_emb');
        $devisE2->rem_emb = request('rem_emb');

        $devisE3->save();
    }
}
