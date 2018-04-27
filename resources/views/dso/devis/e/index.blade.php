@extends('layouts.app')

@section('title', 'DEVIS')

@section('sidebar')
@parent    
@endsection

@section('content')
@include('sous_nav')
@include('breadcrumb')
<section id="liste_emballages">
	<div class="liste_emball">
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
							<!-- <section id="liste_etiquettes"> -->
								<div class="liste_etiqu">
									<ul>
										@foreach($devisE1 as $devisx)
										<li>
											<div class="card">
												<h5 class="card-header text-center">FICHE n°{{ $devisx->id }}</h5>
												<div class="card-body">
													<div><h5 class="card-title">Information</h5></div>
													<div class="icons">
														<a href="{!! route('devis-e-edit', ['idDso'=>$idDso, 'idDevisE1'=>$devisx->id]) !!}" role="button"><i class="medium material-icons">create</i></a>
														<a href="{!! route('devis-e-destroy', ['idDso'=>$idDso, 'idDevisE1'=>$devisx->id]) !!}" role="button"><i class="medium material-icons">delete</i></a>

													</div>
												</div>
											</div>
										</li>
										@endforeach
									</ul>
									<a href="{!! route('devis-e-create', ['idDso'=>$idDso]) !!}" type="submit" role="button" class="btn btn-primary">AJOUTER</a>
								</div>
								<!-- </section> -->
							</div>
						</div>
					</div>
				</div>
				<a href="" role="button" class="btn btn-primary" type="submit">Valider ></a>
			</div>
		</div>
	</section>
	@endsection