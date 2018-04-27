@extends('layouts.app')

@section('title', 'DEVIS')

@section('sidebar')
@parent    
@endsection

@section('content')
@include('sous_nav')
<section id="a">
	<form method="POST" action="">
		@csrf
		<div id="accordion">
			<div class="card">
				<div class="card">
					<div class="card-header" id="headingThree">
						<h5 class="mb-0">
							<a role="button"  class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								MATÉRIELS IMPOSÉS / IMPRESSION
							</a>
						</h5>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
						<div class="card-body">
							<section id="liste_etiquettes">
	<div class="liste_etiqu">
		<ul>
			<li>
				<div class="card">
					<h5 class="card-header text-center">FICHE n°XXX</h5>
					<div class="card-body">
						<div><h5 class="card-title">Information</h5></div>
						<div class="icons">
							<a><i class="medium material-icons">create</i></a>
							<a><i class="medium material-icons">delete</i></a>
						</div>
					</div>
				</div>
			</li>
<a href="" type="submit" role="button">Creation</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<button type="button" class="btn btn-primary" type="submit">Valider ></button>
		</div>
	</form>
</section>

<!-- <section id="a">
	<form method="POST" action="">
		@csrf
		<div id="accordion">
			<div class="card">
				<div class="card-header" id="headingOne">
					<h5 class="mb-0">
						<a role="button"  class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							MATÉRIELS IMPOSÉS / IMPRESSION
						</a>
					</h5>
				</div>

				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
					<section id="liste_emballages">
						<div class="liste_emball">
							<ul>
								@foreach($devisE1 as $devisx)
								<li>
									<div class="card">
									<h5 class="card-header text-center">Matériel imposé par le client</h5>
										<div class="card-body">
											<h5 class="card-title">Infos sur l'emballage</h5>
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
								<a href="/dso/{{ $idDso }}/emballages/create/" role="button" class="btn btn-primary">Ajouter</a>
								<a role="button" class="btn btn-primary">Suivant ></a>
							</div>


				<div class="card">
					<div class="card-header" id="headingThree">
						<h5 class="mb-0">
							<a role="button"  class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								IMPRESSION
							</a>
						</h5>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
						<section id="liste_emballages">
							<div class="liste_emball">
								<ul>
									@foreach($devisE1 as $devisx)
									<li>
										<div class="card">
											<h5 class="card-header text-center">Emballage n°{{ $devisx->id }}</h5>
											<div class="card-body">
												<h5 class="card-title">Infos sur l'emballage</h5>
												<div class="icons">
													<a  href="/dso/{{ $idDso }}/emballages/{{ $devisx->id }}/edit"><i class="medium material-icons">create</i></a>
													<a href="/dso/{{ $idDso }}/emballages/{{ $devisx->id }}/destroy"><i class="medium material-icons">delete</i></a>
												</div>
											</div>
										</div>
									</li>
									@endforeach
								</ul>
								<div class="emball_buttons">
									<a href="/dso/{{ $idDso }}/emballages/create/" role="button" class="btn btn-primary">Ajouter</a>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
			<button type="button" class="btn btn-primary" type="submit">Valider ></button>
		</div> -->



@endsection
