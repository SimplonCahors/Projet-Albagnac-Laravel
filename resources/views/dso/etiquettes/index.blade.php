@extends('layouts.app')

@section('title', 'Étiquettes')

@section('sidebar')
@parent    
@endsection

@section('content')
@include('sous_nav')

<section id="liste_etiquettes">
	<div class="liste_etiqu">
		<ul>
		@foreach($etiquettes as $etiquette)
			<li>
				<div class="card">
					<h5 class="card-header text-center">Etiquette n°{{ $etiquette->id }}</h5>
					<div class="card-body">
						<h5 class="card-title">Infos sur l'etiquette</h5>
						<div class="icons">
							<a  href="/dso/{{ $idDso }}/etiquettes/{{ $etiquette->id }}/edit"><i class="medium material-icons">create</i></a>
							<a href="/dso/{{ $idDso }}/etiquettes/{{ $etiquette->id }}/destroy"><i class="medium material-icons">delete</i></a>
						</div>
					</div>
				</div>
			</li>
			@endforeach
		</ul>
		<div class="etiq_buttons">
			<a href="/dso/{{ $idDso }}/etiquettes/create/" role="button" class="btn btn-primary">Ajouter une étiquette</a>
			<a role="button" class="btn btn-primary">Suivant ></a>
		</div>
	</section>
	@endsection