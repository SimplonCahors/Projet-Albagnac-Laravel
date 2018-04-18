@extends('layouts.app')

@section('title', 'Accueil')

@section('sidebar')
    @parent
<section id="btn_accueil">
    <button>Nouveau DSO</button>
    <button>Archivres DSO</button>
</section>    
@endsection

@section('content')
<section id="liste_accueil">
    <h3>DSO en cours :</h3>
    <div id="list_DSO">
    	
    </div>
</section>    
@endsection