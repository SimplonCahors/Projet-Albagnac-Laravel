<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DevisE1;
use App\DevisE2;
use App\DevisE3;


class DevisEController extends Controller
{
    public function create($idDso)
    {
       
    }

    public function store($idDso, Request $request) 
    {
       
    }

    public function edit($idDso) 
    {
        $data1 = DevisE1::where('id_dso', $idDso)->first();
        $data2 = DevisE2::where('id_dso', $idDso)->first();
        $data3 = DevisE3::where('id_dso', $idDso)->first();
        return view('dso.devis.e.edit', ['data1'=>$data1,'data2'=>$data2,'data3'=>$data3, 'idDso'=>$idDso]);
    }

    public function update($idDso, Request $request)
    {
        $devisE1 = DevisE1::where('id_dso', $idDso)->first();

        $devisE1->id_dso = ($idDso);
        $devisE1->type_materiel = request('type_materiel');
        $devisE1->marque_materiel = request('marque_materiel');
        $devisE1->modele_materiel = request('modele_materiel');
        $devisE1->mise_route_materiel = request('mise_route_materiel');

        $devisE1->save();

        $devisE2 = DevisE2::where('id_dso', $idDso)->first();

        $devisE2->id_dso = ($idDso);
        $devisE2->ref_eti = request('ref_eti');
        $devisE2->position_eti = request('position_eti');
        $devisE2->dimension_impression_eti = request('dimension_impression_eti');
        $devisE2->rem_eti = request('rem_eti');

        $devisE2->save();

        $devisE3 = DevisE3::where('id_dso', $idDso)->first();

        $devisE3->id_dso = ($idDso);
        $devisE2->ref_emb = request('ref_emb');
        $devisE2->position_emb = request('position_emb');
        $devisE2->dimension_impression_emb = request('dimension_impression_emb');
        $devisE2->rem_emb = request('rem_emb');

        $devisE3->save();

        return redirect()->route('devis-e-edit', ['idDso' => $idDso]);
    }
}
