<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DevisD1;
use App\DevisD2;
use App\DevisD3;
use App\DevisD4;
use App\DevisD5;
use App\DevisD6;
use App\DevisD7;
use App\DevisD8;


class DevisDController extends Controller
{
    public function create($idDso)
    {
        return view('dso.devisD.create', ['idDso'=> $idDso]);
    }

    public function store($idDso, Request $request) 
    {
        $devisD1 = new DevisD1;

        $devisD1->id_dso = ($idDso);
        $devisD1->type_machine_amont = request('type_machine_amont');
        $devisD1->type_convoy_amont = request('type_convoy_amont');
        $devisD1->transfert_amont = request('transfert_amont');
        $devisD1->arrivee_prod_amont = request('arrivee_prod_amont');
        $devisD1->type_machine_aval = request('type_machine_aval');
        $devisD1->type_convoy_aval = request('type_convoy_aval');
        $devisD1->transfert_aval = request('transfert_aval');
        $devisD1->sortie_prod_aval = request('sortie_prod_aval');
        $devisD1->sens_machine = request('sens_machine');
        $devisD1->cadence_souhaitee = request('cadence_souhaitee');
        $devisD1->milieu = request('milieu');
        $devisD1->hauteur_convoyeur = request('hauteur_convoyeur');
        $devisD1->espace_au_sol = request('espace_au_sol');
        $devisD1->temp_local = request('temp_local');

        $devisD1->save();

        $devisD2 = new DevisD2;

        $devisD2->id_dso = ($idDso);
        $devisD2->comm_machine_amont = request('comm_machine_amont');
        $devisD2->comm_machine_aval = request('comm_machine_aval');
        $devisD2->coupure_bourrage = request('coupure_bourrage');
        $devisD2->descriptif = request('descriptif');

        $devisD2->save();

        $devisD3 = new DevisD3;

        $devisD3->id_dso = ($idDso);
        $devisD3->tension_elec = request('tension_elec');
        $devisD3->reg_de_neutre = request('reg_de_neutre');
        $devisD3->debit_m3h = request('debit_m3h');
        $devisD3->pression_bar = request('pression_bar');

        $devisD3->save();

        $devisD4 = new DevisD4;

        $devisD4->id_dso = ($idDso);
        $devisD4->controle_conformite = request('controle_conformite');
        $devisD4->demande_fat = request('demande_fat');
        $devisD4->date_desiree_fat = request('date_desiree_fat');
        $devisD4->demande_cem = request('demande_cem');
        $devisD4->demande_certif_ext = request('demande_certif_ext');

        $devisD4->save();

        $devisD5 = new DevisD5;

        $devisD5->id_dso = ($idDso);
        $devisD5->install_client = request('install_client');
        $devisD5->plan_prevention = request('plan_prevention');
        $devisD5->mise_en_route = request('mise_en_route');
        $devisD5->demande_certif_ext = request('demande_certif_ext');

        $devisD5->save();

        $devisD6 = new DevisD6;

        $devisD6->id_dso = ($idDso);
        $devisD6->sur_machine = request('sur_machine');
        $devisD6->en_salle = request('en_salle');
        $devisD6->nombre_jours = request('nombre_jours');
        $devisD6->nombre_personnes = request('nombre_personnes');

        $devisD6->save();

        $devisD7 = new DevisD7;

        $devisD7->id_dso = ($idDso);
        $devisD7->quantite = request('quantite');
        $devisD7->cd = request('cd');
        $devisD7->numerique = request('numerique');
        $devisD7->langue = request('langue');

        $devisD7->save();

        $devisD8 = new DevisD8;

        $devisD8->id_dso = ($idDso);
        $devisD8->charge_albagnac = request('charge_albagnac');
        $devisD8->charge_client = request('charge_client');

        $devisD8->save();
    }

    public function edit($idDso, $idDevisD1, $idDevisD2, $idDevisD3, $idDevisD4, $idDevisD5, $idDevisD6, $idDevisD7, $idDevisD8) 
    {
        $data = DevisD::find($idDevisD1, $idDevisD2, $idDevisD3, $idDevisD4, $idDevisD5, $idDevisD6, $idDevisD7, $idDevisD8);
        return view('dso.devisD.edit', ['data'=>$data, 'idDso'=>$idDso, 'idDevisD1'=>$idDevisD1, 'idDevisD2'=>$idDevisD2, 'idDevisD3'=>$idDevisD3, 'idDevisD4'=>$idDevisD4, 'idDevisD5'=>$idDevisD5, 'idDevisD6'=>$idDevisD6, 'idDevisD7'=>$idDevisD7, 'idDevisD8'=>$idDevisD8]);
    }

     public function update($idDso, $idDevisD1, $idDevisD2, $idDevisD3, $idDevisD4, $idDevisD5, $idDevisD6, $idDevisD7, $idDevisD8, Request $request)
    {
        $devisD1 = DevisD1::find($idDevisD1);

        $devisD1->id_dso = ($idDso);
        $devisD1->type_machine_amont = request('type_machine_amont');
        $devisD1->type_convoy_amont = request('type_convoy_amont');
        $devisD1->transfert_amont = request('transfert_amont');
        $devisD1->arrivee_prod_amont = request('arrivee_prod_amont');
        $devisD1->type_machine_aval = request('type_machine_aval');
        $devisD1->type_convoy_aval = request('type_convoy_aval');
        $devisD1->transfert_aval = request('transfert_aval');
        $devisD1->sortie_prod_aval = request('sortie_prod_aval');
        $devisD1->sens_machine = request('sens_machine');
        $devisD1->cadence_souhaitee = request('cadence_souhaitee');
        $devisD1->milieu = request('milieu');
        $devisD1->hauteur_convoyeur = request('hauteur_convoyeur');
        $devisD1->espace_au_sol = request('espace_au_sol');
        $devisD1->temp_local = request('temp_local');

        $devisD1->save();

        $devisD2 = DevisD2::find($idDevisD2);

        $devisD2->id_dso = ($idDso);
        $devisD2->comm_machine_amont = request('comm_machine_amont');
        $devisD2->comm_machine_aval = request('comm_machine_aval');
        $devisD2->coupure_bourrage = request('coupure_bourrage');
        $devisD2->descriptif = request('descriptif');

        $devisD2->save();

        $devisD3 = DevisD3::find($idDevisD3);

        $devisD3->id_dso = ($idDso);
        $devisD3->tension_elec = request('tension_elec');
        $devisD3->reg_de_neutre = request('reg_de_neutre');
        $devisD3->debit_m3h = request('debit_m3h');
        $devisD3->pression_bar = request('pression_bar');

        $devisD3->save();

        $devisD4 = DevisD4::find($idDevisD4);

        $devisD4->id_dso = ($idDso);
        $devisD4->controle_conformite = request('controle_conformite');
        $devisD4->demande_fat = request('demande_fat');
        $devisD4->date_desiree_fat = request('date_desiree_fat');
        $devisD4->demande_cem = request('demande_cem');
        $devisD4->demande_certif_ext = request('demande_certif_ext');

        $devisD4->save();

        $devisD5 = DevisD5::find($idDevisD5);

        $devisD5->id_dso = ($idDso);
        $devisD5->install_client = request('install_client');
        $devisD5->plan_prevention = request('plan_prevention');
        $devisD5->mise_en_route = request('mise_en_route');
        $devisD5->demande_certif_ext = request('demande_certif_ext');

        $devisD5->save();

        $devisD6 = DevisD6::find($idDevisD6);

        $devisD6->id_dso = ($idDso);
        $devisD6->sur_machine = request('sur_machine');
        $devisD6->en_salle = request('en_salle');
        $devisD6->nombre_jours = request('nombre_jours');
        $devisD6->nombre_personnes = request('nombre_personnes');

        $devisD6->save();

        $devisD7 = DevisD7::find($idDevisD7);

        $devisD7->id_dso = ($idDso);
        $devisD7->quantite = request('quantite');
        $devisD7->cd = request('cd');
        $devisD7->numerique = request('numerique');
        $devisD7->langue = request('langue');

        $devisD7->save();

        $devisD8 = DevisD8::find($idDevisD8);

        $devisD8->id_dso = ($idDso);
        $devisD8->charge_albagnac = request('charge_albagnac');
        $devisD8->charge_client = request('charge_client');

        $devisD8->save();
    }
}
