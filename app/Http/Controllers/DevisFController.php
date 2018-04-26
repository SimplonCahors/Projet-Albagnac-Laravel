<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DevisF;

class DevisFController extends Controller
{
    public function create($idDso)
    {
        return view('dso.devisF.create', ['idDso'=> $idDso]);
    }

    public function store($idDso, Request $request) 
    {
        
    }

    public function edit($idDso, $idDevisF) 
    {
        $data = DevisF::find($idDevisF);
        return view('dso.devisF.edit', ['data'=>$data, 'idDso'=>$idDso, 'idDevisF'=>$idDevisF]);
    }

    public function update($idDso, $idDevisF, Request $request)
    {
        $devisF = DevisF::find($idDevisF);

        $devisF->id_dso = ($idDso);
        $devisF->objet_rem = request('objet_rem');
        $devisF->descriptif_rem = request('descriptif_rem');

        $devisF->save();
    }
}
