<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;
use App\Etiquette;

class EtiquetteController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     /*
    |--------------------------------------------------------------------------
    | INDEX => affiche la "liste" des etiquettes 
    |--------------------------------------------------------------------------
    */
    public function index($idDso)
    {
        $etiquettes= Etiquette::all()->where('id_dso', $idDso);

        return view('dso.etiquettes.index', ['etiquettes'=>$etiquettes, 'idDso'=> $idDso]);
    }


	     /*
    |--------------------------------------------------------------------------
    | CREATE => affiche le formulaire etiquettes à remplir | /etiquettes/create
    |--------------------------------------------------------------------------
    */

 	public function create($idDso)
    {
        return view('dso.etiquettes.create', ['idDso'=> $idDso]);
    }
     /*
    |--------------------------------------------------------------------------
    | STORE => stocke les données nouvellement créées dans la DBB | POST /etiquettes
    |--------------------------------------------------------------------------
    */

     public function store($idDso, Request $request) {

        $img_name = 'dso' . $idDso . '_'. $request->file('photo_eti')->getClientOriginalName(); 

        //create a new etiquette 
        $etiquette = new Etiquette;
        
        //use the request data
        $etiquette->id_dso = ($idDso);
        $etiquette->ref_eti = request('ref_eti');
        $etiquette->hauteur_eti = request('hauteur_eti');
        $etiquette->largeur_eti = request('largeur_eti');
        $etiquette->diametre_eti = request('diametre_eti');
        $etiquette->observation_eti = request('observation_eti');
        $etiquette->photo_eti = $img_name;
        $etiquette->hauteur_bobine = request('hauteur_bobine');
        $etiquette->diametre_bobine = request('diametre_bobine');
        $etiquette->diametre_mandrin = request('diametre_mandrin');
        $etiquette->nbr_eti = request('nbr_eti');
        $etiquette->enroulement = request('enroulement');
        $etiquette->enroulement = request('enroulement');


        //put uploaded photo in storage
        $path = $request->file('photo_eti')->storeAs('eti_photos', $img_name);

        //save it to the dbb
        $etiquette->save();

        return redirect()->route('etiquette-index', ['idDso' => $idDso]);

    }

     public function edit($idDso, $idEtiquette) 
     {
        $data = Etiquette::find($idEtiquette);
        return view('dso.etiquettes.edit', ['data'=>$data, 'idDso'=>$idDso, 'idEtiquette'=>$idEtiquette]);
     }

         /*
    |--------------------------------------------------------------------------
        | SHOW => affiche l'etiquette spécifié | GET /etiquettes/idDso
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

        // Switch pour repérer de quel bouton vient le submit :
        switch ($request->input('action')) {

            case 'delete-picture': // Si c'est le bouton "Supprimer photo"
                    
                    Storage::delete('eti_photos/' . $etiquette->photo_eti);
                    $etiquette->photo_eti = NULL;
                    $etiquette->save();
                    return redirect()->route('etiquette-edit', ['idDso' => $idDso, 'idEtiquette' => $idEtiquette]);
                    break;

            case 'submit-form': // Si c'est le bouton de validation du formulaire :

                // Si la photo a été modifiée, remplace l'ancienne dans le storage  :
                if ($request->file('photo_eti')) {
                    if ($etiquette->photo_eti) { Storage::delete('eti_photos/' . $etiquette->photo_eti); }
                    $img_name = 'dso' . $idDso . '_'. $request->file('photo_eti')->getClientOriginalName();
                    $etiquette->photo_eti = $img_name;
                    $path = $request->file('photo_eti')->storeAs('eti_photos', $img_name);
                }
            
                $etiquette->id_dso = ($idDso);
                $etiquette->ref_eti = request('ref_eti');
                $etiquette->hauteur_eti = request('hauteur_eti');
                $etiquette->largeur_eti = request('largeur_eti');
                $etiquette->diametre_eti = request('diametre_eti');
                $etiquette->observation_eti = request('observation_eti');
                $etiquette->hauteur_bobine = request('hauteur_bobine');
                $etiquette->diametre_bobine = request('diametre_bobine');
                $etiquette->diametre_mandrin = request('diametre_mandrin');
                $etiquette->nbr_eti = request('nbr_eti');
                $etiquette->enroulement = request('enroulement');
                $etiquette->enroulement = request('enroulement');

                $etiquette->save();

                return redirect()->route('etiquette-index', ['idDso' => $idDso]);

                break;
        }
    }

    public function destroy($idDso, $idEtiquette) 
     {
        $etiquette = Etiquette::find($idEtiquette);

        // Supprime la photo correspondante dans le storage  :
        if ($etiquette->photo_eti) { 
            Storage::delete('eti_photos/' . $etiquette->photo_eti); 
        }

        $etiquette->delete(); 

        return redirect()->route('etiquette-index', ['idDso' => $idDso]);
     }
}
