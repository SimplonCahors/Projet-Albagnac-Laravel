<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DevisC1;
use App\DevisC2;

class DevisCController extends Controller
{
    public function create($idDso)
    {
        return view('dso.devisC.create', ['idDso'=> $idDso]);
    }

    public function store($idDso, Request $request) 
    {
        $devisC1 = new DevisC1;

        $devisC1->id_dso = ($idDso);
        $devisC1->matiere_emb = request('matiere_emb');
        $devisC1->type_emb = request('type_emb');
        $devisC1->nbr_emb = request('nbr_emb');

        $devisC1->save();

        $devisC2 = new DevisC2;

        $devisC2->id_dso = ($idDso);
        $devisC2->matiere_eti = request('matiere_eti');
        $devisC2->type_eti = request('type_eti');
        $devisC2->nbr_eti = request('nbr_eti');

        $devisC2->save();

        //redirect to the defined page
        //return redirect('/dso/{idDso}/emballages');
        //return view('dso.emballages.show');
       // return Redirect::action('UserController@profile', array('user' => 1));
    }

    public function edit($idDso, $idDevisC1, $idDevisC2) 
    {
        $data = DevisC::find($idDevisC1, $idDevisC2);
        return view('dso.devisC.edit', ['data'=>$data, 'idDso'=>$idDso, 'idDevisC1'=>$idDevisC1, 'idDevisC2'=>$idDevisC2]);
    }

    public function update($idDso, $idDevisC1, $idDevisC2, Request $request)
    {
        $devisC1 = DevisC::find($idDevisC1);

        $devisC1->id_dso = ($idDso);
        $devisC1->matiere_emb = request('matiere_emb');
        $devisC1->type_emb = request('type_emb');
        $devisC1->nbr_emb = request('nbr_emb');

        $devisC1->save();

        $devisC2 = DevisC::find($idDevisC2);

        $devisC2->id_dso = ($idDso);
        $devisC2->matiere_eti = request('matiere_eti');
        $devisC2->type_eti = request('type_eti');
        $devisC2->nbr_eti = request('nbr_eti');

        $devisC2->save();
    }
}
