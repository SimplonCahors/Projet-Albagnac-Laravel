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
									</div>
								</div>
							</div>
						</div>
					</div>
					<button type="button" class="btn btn-primary" type="submit">Valider ></button>
				</div>
			</form>
		</section>

		<!-- <a  href="{!! route('devis-e-edit', ['idDso'=>$idDso, 'idDevisE1'=>$devisx->id]) !!}"><i class="medium material-icons">create</i></a>
		<a href="/dso/{{ $idDso }}/emballages/{{ $devisx->id }}/destroyE1"><i class="medium material-icons">delete</i></a>
	</div>
	<a href="/dso/{{ $idDso }}/emballages/create/" role="button" class="btn btn-primary">Ajouter</a>
	<a role="button" class="btn btn-primary">Suivant ></a>
	
	<a  href="/dso/{{ $idDso }}/emballages/{{ $devisx->id }}/edit"><i class="medium material-icons">create</i></a>
	<a href="/dso/{{ $idDso }}/emballages/{{ $devisx->id }}/destroy"><i class="medium material-icons">
		<a href="/dso/{{ $idDso }}/emballages/create/" role="button" class="btn btn-primary">Ajouter</ -->

			@endsection