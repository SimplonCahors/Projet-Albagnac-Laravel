<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Emballage;


/*
|--------------------------------------------------------------------------
| EN COURS CHARLOTTE PAS TOUCHER !!
|--------------------------------------------------------------------------
| => INDEX   : affiche la liste des emballages | /emballages
| => CREATE  : affiche le formulaire emballages à remplir | /emballages/create
| => STORE   : stocke les données nouvellement créées dans la DBB | via POST /emballages
| => SHOW    : affiche l'emballage spécifié | via GET /emballages/id
| => EDIT    : affiche le formulaire pour éditer les données de la DBB | via GET /emballages/id/edit
| => UPDATE  : actualise les données dans la DBB | (submit) via PATCH /emballages/id
| => DESTROY : supprime les données dans la DBB | /emballages/id
*/

class EmballageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     /*
    |--------------------------------------------------------------------------
    | INDEX => affiche la "liste" des emballages | /emballages
    |--------------------------------------------------------------------------
    */
    public function index($idDso)
    {
        $emballages = Emballage::all()->where('id_dso', $idDso);

        return view('dso.emballages.index', ['emballages'=>$emballages, 'idDso'=> $idDso]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     /*
    |--------------------------------------------------------------------------
    | CREATE => affiche le formulaire emballages à remplir | /emballages/create
    |--------------------------------------------------------------------------
    */
     public function create($idDso)
    {
        return view('dso.emballages.create', ['idDso'=> $idDso]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     /*
    |--------------------------------------------------------------------------
    | STORE => stocke les données nouvellement créées dans la DBB | POST /emballages
    |--------------------------------------------------------------------------
    */
    public function store($idDso, Request $request) {

        //create a new emballage 
        $emballage = new Emballage;
        
        //use the request data
        $emballage->id_dso = ($idDso);
        $emballage->ref_int = request('ref_int');
        $emballage->ref_ext = request('ref_ext');
        $emballage->forme = request('forme');
        $emballage->diametre_longueur = request('diametre_longueur');
        $emballage->hauteur = request('hauteur');
        $emballage->observations = request('observations');
        $emballage->url_photo = request('url_photo');
        $emballage->plein_vide = request('plein_vide');
        $emballage->temp_produit = request('temp_produit');
        $emballage->poids_prod = request('poids_prod');
        $emballage->matiere = request('matiere');
        $emballage->niveau_deform = request('niveau_deform');
        $emballage->tolerance_dim = request('tolerance_dim');

        //save it to the dbb
        $emballage->save();

        //redirect to the defined page
        
        return redirect()->route('emballage-index', ['idDso' => $idDso]);
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id) // envoie à GET emballages/id
    // {
    //     $emballage = Blog::find($id);
        
    //     return view('blogs.show', compact('emballage'));
    // }

    //refactoring de la fonction en haut
     /*
    |--------------------------------------------------------------------------
    | SHOW => affiche l'emballage spécifié | GET /emballages/id
    |--------------------------------------------------------------------------
    */
     public function show(Emballage $idEmballage) 
     {
         $emballage->id = ($idEmballage);
         return view('dso.emballages.show', compact('idEmballage', 'emballage'));
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
         /*
    |--------------------------------------------------------------------------
    | EDIT => affiche le formulaire pour éditer les données de la DBB | GET /emballages/id/edit
    |--------------------------------------------------------------------------
    */public function edit($idDso , $idEmballage)
    {
        $data = Emballage::find($idEmballage);
         return view('dso.emballages.edit', ['data'=>$data, 'idDso'=> $idDso, 'idEmballage'=>$idEmballage]);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
     /*
    |--------------------------------------------------------------------------
    | UPDATE => actualise les données dans la DBB | (submit) PATCH /emballages/id
    |--------------------------------------------------------------------------
    */
     public function update($idDso, Request $request, $idEmballage)
    {
        $update = Emballage::find($idEmballage);

        $update->ref_int = request('ref_int');
        $update->ref_ext = request('ref_ext');
        $update->forme = request('forme');
        $update->diametre_longueur = request('diametre_longueur');
        $update->hauteur = request('hauteur');
        $update->observations = request('observations');
        $update->url_photo = request('url_photo');
        $update->plein_vide = request('plein_vide');
        $update->temp_produit = request('temp_produit');
        $update->poids_prod = request('poids_prod');
        $update->matiere = request('matiere');
        $update->niveau_deform = request('niveau_deform');
        $update->tolerance_dim = request('tolerance_dim');

        $update->save();

        return redirect()->route('emballage-index', ['idDso' => $idDso]);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
     /*
    |--------------------------------------------------------------------------
    | DESTROY => supprime les données dans la DBB | /emballages/id
    |--------------------------------------------------------------------------
    */
    public function destroy($idDso,$id)
    {
        $emballage = Emballage::find($idEmballage)->delete(); 

        return redirect()->route('emballage-index', ['idDso' => $idDso]);
    }
}
