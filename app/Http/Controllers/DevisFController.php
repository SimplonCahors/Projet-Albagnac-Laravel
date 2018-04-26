<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DevisF;

class DevisFController extends Controller
{
    public function create($idDso)
    {
        
    }

    public function store($idDso, Request $request) 
    {
        
    }

    public function edit($idDso) 
    {
        $data = DevisF::where('id_dso', $idDso)->first();
        return view('dso.devis.f.edit', ['data'=>$data, 'idDso'=>$idDso]);
    }

    public function update($idDso, Request $request)
    {
        $devisF = DevisF::where('id_dso', $idDso)->first();

        $devisF->id_dso = ($idDso);
        $devisF->objet_rem = request('objet_rem');
        $devisF->descriptif_rem = request('descriptif_rem');

        $devisF->save();

        return redirect()->route('devis-f-edit', ['idDso' => $idDso]);
    }
}
