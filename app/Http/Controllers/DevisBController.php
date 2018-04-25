<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DevisB1;
use App\DevisB2;

class DevisBController extends Controller
{
    public function create($idDso)
    {
        return view('devis-b-create', ['idDso'=> $idDso]);
    }

    public function store($idDso, Request $request) 
    {
        $devisB1 = new DevisB1;

        $devisB1->id_dso = ($idDso);
        $devisB1->besoin = request('besoin');
        $devisB1->rem_besoin = request('rem_besoin');
        $devisB1->fournisseur_actuel = request('fournisseur_actuel');
        $devisB1->nom_concurrent = request('nom_concurrent');
        $devisB1->type_concurrent = request('type_concurrent');
        $devisB1->rem_concurrent = request('rem_concurrent');

        $devisB1->save();

        $devisB2 = new DevisB2;

        $devisB2->id_dso = ($idDso);
        $devisB2->nbr_type_machines = request('nbr_type_machines');
        $devisB2->site_prod = request('site_prod');
        $devisB2->implantation_sites = request('implantation_sites');
        $devisB2->env_concurrentiel = request('env_concurrentiel');

        $devisB2->save();

        //redirect to the defined page
        //return redirect('/dso/{idDso}/emballages');
        //return view('dso.emballages.show');
       // return Redirect::action('UserController@profile', array('user' => 1));
    }

    public function edit($idDso, $idDevisB1, $idDevisB2) 
    {
        $data = DevisB::find($idDevisB1, $idDevisB2);
        return view('dso.devisB.edit', ['data'=>$data, 'idDso'=>$idDso, 'idDevisB1'=>$idDevisB1, 'idDevisB2'=>$idDevisB2]);
    }

    public function update($idDso, $idDevisB1, $idDevisB2, Request $request)
    {
        $devisB1 = DevisB::find($idDevisB1);

        $devisB1->id_dso = ($idDso);
        $devisB1->besoin = request('besoin');
        $devisB1->rem_besoin = request('rem_besoin');
        $devisB1->fournisseur_actuel = request('fournisseur_actuel');
        $devisB1->nom_concurrent = request('nom_concurrent');
        $devisB1->type_concurrent = request('type_concurrent');
        $devisB1->rem_concurrent = request('rem_concurrent');

        $devisB1->save();

        $devisB2 = DevisB::find($idDevisB2);

        $devisB2->id_dso = ($idDso);
        $devisB2->nbr_type_machines = request('nbr_type_machines');
        $devisB2->site_prod = request('site_prod');
        $devisB2->implantation_sites = request('implantation_sites');
        $devisB2->env_concurrentiel = request('env_concurrentiel');

        $devisB2->save();

    }
}
