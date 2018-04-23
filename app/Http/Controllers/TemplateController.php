<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Template;

/**
 * Pour créer un controller :
 * 
 * 1° => Changer la class " Template " en fonction du controller défini (ex : Etiquette )
 * 2° => de même " templates " en " etiquettes "
 * 3° => puis " template " en " etiquette "
 * 
 * en fonction du template défini éditer les fonctions()
 */
/*
|--------------------------------------------------------------------------
| EN COURS CHARLOTTE PAS TOUCHER !!
|--------------------------------------------------------------------------
| => INDEX   : affiche la liste des templates | /templates
| => CREATE  : affiche le formulaire templates à remplir | /templates/create
| => STORE   : stocke les données nouvellement créées dans la BDD | via POST /templates
| => SHOW    : affiche l'emballage spécifié | via GET /templates/id
| => EDIT    : affiche le formulaire pour éditer les données de la BDD | via GET /templates/id/edit
| => UPDATE  : actualise les données dans la BDD | (submit) via PATCH /templates/id
| => DESTROY : supprime les données dans la BDD | /templates/id
*/

class TemplateController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | INDEX => affiche la "liste" des templates | /templates
    |--------------------------------------------------------------------------
    */

    /** infos Laravel
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* exemple avec eloquent:
            
            //fetch all templates avec le premier en premier
            $templates = Template::all();
            
            //fetch all templates avec le dernier en premier
            $templates = Template::latest()->get();

            return view('dso.templates.index', compact('templates'));
        */
    }


    /*
    |--------------------------------------------------------------------------
    | CREATE => affiche le formulaire templates à remplir | /templates/create
    |--------------------------------------------------------------------------
    */
        /** infos Laravel
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
    
    
     public function create()
    {
        return view('dso.templates.create');
    }


    /*
    |--------------------------------------------------------------------------
    | STORE => stocke les données nouvellement créées dans la BDD | POST /templates
    |--------------------------------------------------------------------------
    */
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */

    
    public function store($idDso, Request $request) {

        //create a new template 
        $template = new Template;
        
        //use the request data
        $template->id_dso = ($idDso);
        $template->ref_int = request('ref_int');
        $template->ref_ext = request('ref_ext');
        $template->forme = request('forme');
        $template->diametre_longueur = request('diametre_longueur');
        $template->hauteur = request('hauteur');
        $template->observations = request('observations');
        $template->url_photo = request('url_photo');
        $template->plein_vide = request('plein_vide');
        $template->temp_produit = request('temp_produit');
        $template->poids_prod = request('poids_prod');
        $template->matiere = request('matiere');
        $template->niveau_deform = request('niveau_deform');
        $template->tolerance_dim = request('tolerance_dim');

        //save it to the BDD
        $template->save();

        //redirect to the defined page
        return redirect('/dso/{idDso}/templatesSuivant');
    }


    /*  // à voir pour refactoring de la fonction du haut si on a le temps
        public function store() {

            // validation de Laravel avec require correspond au requiired des input avec les Models
            $this->validate(request($idDso), [
                'ref_int' => 'required',
                'ref_ext' => 'required',
            ]);

            // create a new template using the request data and save it to the BDD
            Template::create(request([
                
                'idDso',
                'ref_int',
                'ref_ext',
                'forme',
                'diametre_longueur',
                'hauteur',
                'observations',
                'url_photo',
                'plein_vide',
                'temp_produit',
                'poids_prod',
                'matiere',
                'niveau_deform',
                'tolerance_dim'

                ]));

            //redirect to the home page
            return redirect('/dso/1/templates/1');
        }
    */



    /*
    |--------------------------------------------------------------------------
    | SHOW => affiche le template spécifié | GET /templates/id
    |--------------------------------------------------------------------------
    */
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /* même fonction écrite différement
        public function show($id)  envoie à GET templates/id
        {
            $template = Template::find($id);
            
            return view('templates.show', compact('template'));
        }
    */
    //refactoring de la fonction en haut
    public function show(Template $idTemplate) 
    {
        return view('dso.templates.show', compact('idTemplate'));
    }

    

    /*
    |--------------------------------------------------------------------------
    | EDIT => affiche le formulaire pour éditer les données de la BDD | GET /templates/id/edit
    |--------------------------------------------------------------------------
    */
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        //
    }



    /*
    |--------------------------------------------------------------------------
    | UPDATE => actualise les données dans la BDD | (submit) PATCH /templates/id
    |--------------------------------------------------------------------------
    */
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }



    /*
    |--------------------------------------------------------------------------
    | DESTROY => supprime les données dans la BDD | /templates/id
    |--------------------------------------------------------------------------
    */
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
}
