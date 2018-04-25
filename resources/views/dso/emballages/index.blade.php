@extends('layouts.app')

@section('title', 'Emballages')

@section('sidebar')
@parent    
@endsection

@section('content')
@include('sous_nav')
<section id="liste_etiquettes">
	<div class="liste_etiqu">
		<ul>
			@foreach($emballages as $emballage)
			<li>
				<div class="card">
					<h5 class="card-header text-center">Emballage n°{{ $emballage->id }}</h5>
					<div class="card-body">
						<h5 class="card-title">Infos sur l'emballage</h5>
						<div class="icons">
							<a  href="/dso/{{ $idDso }}/emballages/{{ $emballage->id }}/edit"><i class="medium material-icons">create</i></a>
							<a href="/dso/{{ $idDso }}/emballages/{{ $emballage->id }}/destroy"><i class="medium material-icons">delete</i></a>
						</div>
					</div>
				</div>
			</li>
			@endforeach
		</ul>
		<div class="etiq_buttons">
			<a href="/dso/{{ $idDso }}/emballages/create/" role="button" class="btn btn-primary">Ajouter un emballage</a>
			<a role="button" class="btn btn-primary">Suivant ></a>
		</div>
	</div>
</section>
@endsection