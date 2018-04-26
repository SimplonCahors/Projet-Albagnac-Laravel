<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Archives;

class ArchivesController extends Controller
{

    public function index()
    {
        return view('archives');
    }

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
