@extends('layouts.app')

@section('title', 'Emballages')

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="card-header text-center">
        <h3 class="pb-3 mb-4 font-italic border-bottom">bien envoyé à la bdd</h3>
        <div class="col-6">
            
            <!-- <h2>niveau de déformation : {{ $idEmballages->niveau_deform }}</h2>
            
            <p>température produit : {{ $idEmballages->temp_produit }}</p> -->

        </div>
    </div>
@endsection