@extends('layouts.app')

@section('title', 'Emballages')

@section('sidebar')
@parent    
@endsection

@section('content')
@include('sous_nav')

<section id="liste_emballages">
	<div class="liste_emball">
		<ul>
			@foreach($devisE1 as $devisx)
			<li>
				<div class="card">
					<h5 class="card-header text-center">DevisE1 n°{{ $devisx->id }}</h5>
					<div class="card-body">
						<h5 class="card-title">Infos sur le devis</h5>
						<div class="icons">
							<a  href="{!! route('devis-e-edit', ['idDso'=>$idDso, 'idDevisE1'=>$devisx->id]) !!}"><i class="medium material-icons">create</i></a>
							<a href="/dso/{{ $idDso }}/emballages/{{ $devisx->id }}/destroyE1"><i class="medium material-icons">delete</i></a>
						</div>
					</div>
				</div>
			</li>
			@endforeach
		</ul>
		<div class="emball_buttons">
			<a href="/dso/{{ $idDso }}/emballages/create/" role="button" class="btn btn-primary">Ajouter un emballage</a>
			<a role="button" class="btn btn-primary">Suivant ></a>
		</div>
	</div>
</section>
@endsection