<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DevisE1;
use App\DevisE2;
use App\DevisE3;


class DevisEController extends Controller
{
 public function index($idDso)
 {
    $devisE1 = DevisE1::all()->where('id_dso', $idDso);
    $devisE2 = DevisE2::all()->where('id_dso', $idDso);
    $devisE3 = DevisE3::all()->where('id_dso', $idDso);

    return view('dso.devis.e.index', ['devisE1'=>$devisE1, 'devisE1'=>$devisE1,'devisE1'=>$devisE1, 'idDso'=> $idDso]);
}

public function create($idDso)
{
    return view('dso.devis.e.create', ['idDso'=> $idDso]);

}

public function store($idDso, Request $request) 
{
    //create a new emballage 
    $devisE1 = new DevisE1;

    //use the request data
    $devisE1->id_dso = ($idDso);
    $devisE1->type_materiel = request('type_materiel');
    $devisE1->marque_materiel = request('marque_materiel');
    $devisE1->modele_materiel = request('modele_materiel');
    $devisE1->mise_route_materiel = request('mise_route_materiel');

    //save it to the dbb
    $devisE1->save();

     //create a new emballage 
    $devisE2 = new DevisE2;

    //use the request data
    $devisE2->id_dso = ($idDso);
    $devisE2->type_materiel = request('type_materiel');
    $devisE2->marque_materiel = request('marque_materiel');
    $devisE2->modele_materiel = request('modele_materiel');
    $devisE2->mise_route_materiel = request('mise_route_materiel');

    //save it to the dbb
    $devisE2->save();

    //create a new emballage 
    $devisE3 = new DevisE3;

    //use the request data
    $devisE3->id_dso = ($idDso);
    $devisE3->type_materiel = request('type_materiel');
    $devisE3->marque_materiel = request('marque_materiel');
    $devisE3->modele_materiel = request('modele_materiel');
    $devisE3->mise_route_materiel = request('mise_route_materiel');

    //save it to the dbb
    $devisE3->save();

    //redirect to the defined page
    return redirect()->route('devis-e-index', ['idDso' => $idDso]);
}

public function edit($idDso, $idDevisE1) 
{
    $data1 = DevisE1::find($idDevisE1);
    // $data2 = DevisE2::where('id_dso', $idDso)->first();
    // $data3 = DevisE3::where('id_dso', $idDso)->first();
    // return view('dso.devis.e.edit', ['data1'=>$data1,'data2'=>$data2,'data3'=>$data3, 'idDso'=>$idDso]);
    return view('dso.devis.e.edit', ['data1'=>$data1, 'idDevisE1'=>$idDevisE1, 'idDso'=>$idDso]);
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

    return redirect()->route('devis-e-index', ['idDso' => $idDso]);
}

public function destroyE1($idDso,$idDevisE1)
{
    $devisE1 = DevisE1::find($idDevisE1)->delete(); 
    return redirect()->route('devis-e-index', ['idDso' => $idDso]);
}

public function destroyE2($idDso,$idDevisE2)
{
    $devisE2 = DevisE2::find($idDevisE2)->delete(); 
    return redirect()->route('devis-e-index', ['idDso' => $idDso]);
}

public function destroyE3($idDso,$idDevisE3)
{
    $devisE3 = DevisE3::find($idDevisE3)->delete(); 
    return redirect()->route('devis-e-index', ['idDso' => $idDso]);
}

}
