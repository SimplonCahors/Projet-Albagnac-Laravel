<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etiquette;

class EtiquetteController extends Controller
{
	     /*
    |--------------------------------------------------------------------------
    | CREATE => affiche le formulaire emballages à remplir | /emballages/create
    |--------------------------------------------------------------------------
    */

 	public function create($idDso)
    {
        return view('dso.etiquettes.create', ['idDso'=> $idDso]);
    }
     /*
    |--------------------------------------------------------------------------
    | STORE => stocke les données nouvellement créées dans la DBB | POST /emballages
    |--------------------------------------------------------------------------
    */

     public function store($idDso, Request $request) {

        //create a new emballage 
        $etiquette = new Etiquette;
        
        //use the request data
        $etiquette->id_dso = ($idDso);
        $etiquette->ref_eti = request('ref_eti');
        $etiquette->hauteur_eti = request('hauteur_eti');
        $etiquette->largeur_eti = request('largeur_eti');
        $etiquette->diametre_eti = request('diametre_eti');
        $etiquette->observation_eti = request('observation_eti');
        $etiquette->photo_eti = request('photo_eti');
        $etiquette->hauteur_bobine = request('hauteur_bobine');
        $etiquette->diametre_bobine = request('diametre_bobine');
        $etiquette->diametre_mandrin = request('diametre_mandrin');
        $etiquette->nbr_eti = request('nbr_eti');
        $etiquette->enroulement = request('enroulement');
        $etiquette->enroulement = request('enroulement');

        //save it to the dbb
        $etiquette->save();

        //redirect to the defined page
        //return redirect('/dso/{idDso}/emballages');
        //return view('dso.emballages.show');
       // return Redirect::action('UserController@profile', array('user' => 1));

    }

     public function edit($idDso, $idEtiquette) 
     {
        $data = Etiquette::find($idEtiquette);
        return view('dso.etiquettes.edit', ['data'=>$data, 'idDso'=>$idDso, 'idEtiquette'=>$idEtiquette]);
     }

         /*
    |--------------------------------------------------------------------------
        | SHOW => affiche l'emballage spécifié | GET /emballages/idDso
 $idEtiquette,    |--------------------------------------------------------------------------
    */
     public function show(Etiquette $idEtiquette) 
     {
         $etiquette->id = ($idEtiquette);
         return view('dso.etiquettes.show', compact('idEtiquette', 'etiquette'));
     }


     public function update($idDso, $idEtiquette, Request $request)
    {
        $etiquette = Etiquette::find($idEtiquette);
        
        //use the request data
        $etiquette->id_dso = ($idDso);
        $etiquette->ref_eti = request('ref_eti');
        $etiquette->hauteur_eti = request('hauteur_eti');
        $etiquette->largeur_eti = request('largeur_eti');
        $etiquette->diametre_eti = request('diametre_eti');
        $etiquette->observation_eti = request('observation_eti');
        $etiquette->photo_eti = request('photo_eti');
        $etiquette->hauteur_bobine = request('hauteur_bobine');
        $etiquette->diametre_bobine = request('diametre_bobine');
        $etiquette->diametre_mandrin = request('diametre_mandrin');
        $etiquette->nbr_eti = request('nbr_eti');
        $etiquette->enroulement = request('enroulement');
        $etiquette->enroulement = request('enroulement');

        //save it to the dbb
        $etiquette->save();
    }

    public function destroy($idDso, $idEtiquette) 
     {
        $etiquette = Etiquette::find($idEtiquette)->delete(); 

        return redirect('/dso/'.$idDso.'/emballages/');
     }
}
