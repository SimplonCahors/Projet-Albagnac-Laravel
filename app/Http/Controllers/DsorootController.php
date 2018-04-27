<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Dsoroot;
use App\User;
use Auth;
use App\DevisA1;
use App\DevisA2;
use App\DevisA3;
use App\DevisB1;
use App\DevisB2;
use App\DevisC1;
use App\DevisC2;
use App\DevisD1;
use App\DevisD2;
use App\DevisD3;
use App\DevisD4;
use App\DevisD5;
use App\DevisD6;
use App\DevisD7;
use App\DevisD8;
use App\DevisE1;
use App\DevisE2;
use App\DevisE3;
use App\DevisF;

class DsorootController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsoList = Dsoroot::all();   // va chercher toutes les infos de la table Dsoroot
        $idUser = Auth::user()->id ;  // permet de recup l'id de l'utilisateur connecté
        $users = User::all();   // permet de recup les infos de la table Users

        $dsocom = Dsoroot::all()->where('id_user', $idUser);  // permet de recupérer les dso du com connecté

        $dsotermine =Dsoroot::all()->where('termine', true)->where('valide', false);// permet de recupérer les dso terminé pour l'adv 

        // return view('accueil')->with('dsoList', $dsoList)->with('idUser', $idUser) ;
        return view('accueil', ['dsoList'=>$dsoList, 'idUser'=> $idUser, 'users'=>$users, 'dsocom'=>$dsocom, 'dsotermine'=>$dsotermine]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function create()
    {
        $today = date("Y-m-d");
        return view('dso.devis.roots.create', ['today'=>$today]) ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'date_demande' => 'required',
            'date_rep' => 'required',
            'date_envoi' => 'required',
            'date_livraison' => 'required',
        ]);

        //create a new emballage
        $dsoRoot = new Dsoroot;

        //use the request data
        $dsoRoot->id_user = Auth::user()->id;
        $dsoRoot->date_demande = request('date_demande');
        $dsoRoot->date_rep = request('date_rep');
        $dsoRoot->date_envoi = request('date_envoi');
        $dsoRoot->date_livraison = request('date_livraison');
        $dsoRoot->termine = false;
        $dsoRoot->valide = false;

        //save it to the dbb
        $dsoRoot->save();

        $idDso = $dsoRoot->id;

        // save DevisA1
        $devisA1 = new DevisA1;

        $devisA1->id_dso = ($idDso);
        $devisA1->nom_client = request('nom_client');
        $devisA1->adresse_client = request('adresse_client');
        $devisA1->tel_client = request('tel_client');
        $devisA1->fax_client = request('fax_client');
        $devisA1->pays_client = request('pays_client');
        $devisA1->categorie_client = request('categorie_client');
        $devisA1->secteur_client = request('secteur_client');
        $devisA1->sousecteur_client = request('sousecteur_client');
        $devisA1->type_client = request('type_client');
        $devisA1->siret_client = request('siret_client');

        $devisA1->save();

        //save DevisA2
        $devisA2 = new DevisA2;

        $devisA2->id_dso = ($idDso);
        $devisA2->nom_commercial = request('nom_commercial');
        $devisA2->fonction_commercial = request('fonction_commercial');
        $devisA2->mail_commercial = request('mail_commercial');
        $devisA2->tel_commercial = request('tel_commercial');
        $devisA2->experience_commercial = request('experience_commercial');

        $devisA2->save();

        //save DevisA3
        $devisA3 = new DevisA3;

        $devisA3->id_dso = ($idDso);
        $devisA3->nom_tech = request('nom_tech');
        $devisA3->fonction_tech = request('fonction_tech');
        $devisA3->mail_tech = request('mail_tech');
        $devisA3->tel_tech = request('tel_tech');
        $devisA3->experience_tech = request('experience_tech');

        $devisA3->save();


        //save DevisB
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

        //save DevisC
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

        //save DevisD
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

        //save DevisE
        // $devisE1 = new DevisE1;

        // $devisE1->id_dso = ($idDso);
        // $devisE1->type_materiel = request('type_materiel');
        // $devisE1->marque_materiel = request('marque_materiel');
        // $devisE1->modele_materiel = request('modele_materiel');
        // $devisE1->mise_route_materiel = request('mise_route_materiel');

        // $devisE1->save();

        // $devisE2 = new DevisE2;

        // $devisE2->id_dso = ($idDso);
        // $devisE2->ref_eti = request('ref_eti');
        // $devisE2->position_eti = request('position_eti');
        // $devisE2->dimension_impression_eti = request('dimension_impression_eti');
        // $devisE2->rem_eti = request('rem_eti');

        // $devisE2->save();

        // $devisE3 = new DevisE3;

        // $devisE3->id_dso = ($idDso);
        // $devisE2->ref_emb = request('ref_emb');
        // $devisE2->position_emb = request('position_emb');
        // $devisE2->dimension_impression_emb = request('dimension_impression_emb');
        // $devisE2->rem_emb = request('rem_emb');

        // $devisE3->save();

        //save DevisF
        $devisF = new DevisF;

        $devisF->id_dso = ($idDso);
        $devisF->objet_rem = request('objet_rem');
        $devisF->descriptif_rem = request('descriptif_rem');

        $devisF->save();



        //redirect to the home page
        return redirect()->route('devis-a-edit', ['idDso' => $idDso]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idDso)
    {
        $data = Dsoroot::find($idDso);
        return view('dso.devis.roots.edit')->with('idDso', $idDso)->with('data', $data) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idUser, $idDso)
    {
        $dsoRoot = Dsoroot::find($idDso); // récupère le Dso à modifier

        //use the request data
        $dsoRoot->id_user = $idUser;
        $dsoRoot->date_demande = request('date_demande');
        $dsoRoot->date_rep = request('date_rep');
        $dsoRoot->date_envoi = request('date_envoi');
        $dsoRoot->date_livraison = request('date_livraison');

        //save it to the dbb
        $dsoRoot->save();

        //redirect to the home page
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function dsotermine($idDso)
    {
        $dsoRoot = Dsoroot::find($idDso); // récupère le Dso à modifier
        
        //use the request data
        $dsoRoot->termine = true;
        
        //save it to the dbb
        $dsoRoot->save();

        //redirect to the home page
        return redirect()->route('accueil');

    }

    public function dsovalide($idDso)
    {
        $dsoRoot = Dsoroot::find($idDso); // récupère le Dso à modifier
        
        //use the request data
        $dsoRoot->valide = true;
        
        //save it to the dbb
        $dsoRoot->save();

        //redirect to the home page
        return redirect()->route('accueil');

    }
}
