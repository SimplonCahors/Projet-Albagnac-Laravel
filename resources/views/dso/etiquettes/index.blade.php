@extends('layouts.app')

@section('title', 'Étiquettes')

@section('sidebar')
@parent    
@endsection

@section('content')
<section id="liste_etiquettes">
	<div class="liste_etiqu">
		<ul>
			<li>
				<div class="card">
					<h5 class="card-header text-center">Étiquette n°XXX</h5>
					<div class="card-body">
						<div><h5 class="card-title">Infos sur l'étiquette</h5></div>
						<div class="icons">
							<a><i class="medium material-icons">create</i></a>
							<a><i class="medium material-icons">delete</i></a>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="card">
					<h5 class="card-header text-center">Étiquette n°XXX</h5>
					<div class="card-body">
						<div><h5 class="card-title">Infos sur l'étiquette</h5></div>
						<div class="icons">
							<a><i class="medium material-icons">create</i></a>
							<a><i class="medium material-icons">delete</i></a>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="card">
					<h5 class="card-header text-center">Étiquette n°XXX</h5>
					<div class="card-body">
						<div><h5 class="card-title">Infos sur l'étiquette</h5></div>
						<div class="icons">
							<a><i class="medium material-icons">create</i></a>
							<a><i class="medium material-icons">delete</i></a>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="etiq_buttons">
			<a role="button" class="btn btn-primary">Ajouter une étiquette</a>
			<a role="button" class="btn btn-primary">Suivant ></a>
		</div>
	</section>
	@endsection