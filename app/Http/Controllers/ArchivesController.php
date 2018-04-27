<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Archives;
use App\Dsoroot;
use App\User;
use Auth;


class ArchivesController extends Controller
{

    public function index()
    {
        $dsoList = Dsoroot::all();   // va chercher toutes les infos de la table Dsoroot
        $idUser = Auth::user()->id ;  // permet de recup l'id de l'utilisateur connecté
        $users = User::all();   // permet de recup les infos de la table Users

        $dsocom = Dsoroot::all()->where('id_user', $idUser);  // permet de recupérer les dso du com connecté

        $dsovalide =Dsoroot::all()->where('termine', true)->where('valide', true);// permet de recupérer les dso terminé pour l'adv 

        // return view('accueil')->with('dsoList', $dsoList)->with('idUser', $idUser) ;
        return view('archives', ['dsoList'=>$dsoList, 'idUser'=> $idUser, 'users'=>$users, 'dsocom'=>$dsocom, 'dsovalide'=>$dsovalide]);
    }
    // {
    //     return view('archives');
    // }

    public function create($idDso)
    {

    }

    public function store($idDso, Request $request) 
    {

    }

    public function edit($idDso) 
    {

    }

    public function update($idDso, Request $request)
    {

    }
}
