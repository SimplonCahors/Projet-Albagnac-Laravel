<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DevisC1;
use App\DevisC2;

class DevisCController extends Controller
{
    public function create($idDso)
    {
        
    }

    public function store($idDso, Request $request) 
    {
        
    }

    public function edit($idDso) 
    {
        $data1 = DevisC1::where('id_dso', $idDso)->first();
        $data2 = DevisC2::where('id_dso', $idDso)->first();
        return view('dso.devis.c.edit', ['data1'=>$data1,'data2'=>$data2,'idDso'=>$idDso]);
    }

    public function update($idDso, Request $request)
    {
        $devisC1 = DevisC1::where('id_dso', $idDso)->first();

        $devisC1->id_dso = ($idDso);
        $devisC1->matiere_emb = request('matiere_emb');
        $devisC1->type_emb = request('type_emb');
        $devisC1->nbr_emb = request('nbr_emb');

        $devisC1->save();

        $devisC2 = DevisC2::where('id_dso', $idDso)->first();

        $devisC2->id_dso = ($idDso);
        $devisC2->matiere_eti = request('matiere_eti');
        $devisC2->type_eti = request('type_eti');
        $devisC2->nbr_eti = request('nbr_eti');

        $devisC2->save();

        return redirect()->route('devis-c-edit', ['idDso' => $idDso]);
    }
}
