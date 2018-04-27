@extends('layouts.app')

@section('title', 'DEVIS')

@section('sidebar')
@parent    
@endsection

@section('content')
@include('sous_nav')
@include('breadcrumb')
<section id="a">
	<form method="POST" action="{{ action('DevisEController@update', [$idDso]) }}">
		@csrf
		<div id="accordion">

			<div class="card">
				<div class="card-header" id="headingOne">
					<h5 class="mb-0">
						<a role="button"  class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
							MATÉRIELS IMPOSÉS / IMPRESSION
						</a>
					</h5>
				</div>
				<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
					<div class="card-body">
						<div class="liste_etiqu">
							<ul>
								@foreach($devisE1 as $devisx)
								<li>
									<div class="card">
										<h5 class="card-header text-center">FICHE n°{{ $devisx->id }}</h5>
										<div class="card-body">
											<div><h5 class="card-title">Du matériel</h5></div>
											<div class="icons">
												<a href="{!! route('devis-e-edit', ['idDso'=>$idDso, 'idDevisE1'=>$devisx->id]) !!}" role="button"><i class="medium material-icons">create</i></a>
												<a href="{!! route('devis-e-destroy', ['idDso'=>$idDso, 'idDevisE1'=>$devisx->id]) !!}" role="button"><i class="medium material-icons">delete</i></a>

											</div>
										</div>
									</div>
								</li>
								@endforeach
							</ul>
							<a href="{!! route('devis-e-create-e1', ['idDso'=>$idDso]) !!}" type="submit" role="button" class="btn btn-primary">AJOUTER</a>
						</div>
					</div>
				</div>
			</div>


			<div class="card">
				<div class="card-header" id="headingTwo">
					<h5 class="mb-0">
						<a role="button"  class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							IMPRESSION / ÉTIQUETTE
						</a>
					</h5>
				</div>
				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
					<div class="card-body">
						<div class="liste_etiqu">
							<ul>
								@foreach($devisE2 as $devisy)
								<li>
									<div class="card">
										<h5 class="card-header text-center">FICHE n°{{ $devisy->id }}</h5>
										<div class="card-body">
											<div><h5 class="card-title">Des étiquettes</h5></div>
											<div class="icons">
												<a href="{!! route('devis-e-edit', ['idDso'=>$idDso, 'idDevisE2'=>$devisy->id]) !!}" role="button"><i class="medium material-icons">create</i></a>
												<a href="{!! route('devis-e-destroy', ['idDso'=>$idDso, 'idDevisE2'=>$devisy->id]) !!}" role="button"><i class="medium material-icons">delete</i></a>

											</div>
										</div>
									</div>
								</li>
								@endforeach
							</ul>
							<a href="{!! route('devis-e-create-e2', ['idDso'=>$idDso]) !!}" type="submit" role="button" class="btn btn-primary">AJOUTER</a>
						</div>
					</div>
				</div>
			</div>


			<div class="card">
				<div class="card-header" id="headingThree">
					<h5 class="mb-0">
						<a role="button"  class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							IMPRESSION / EMBALLAGE
						</a>
					</h5>
				</div>
				<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
					<div class="card-body">
						<div class="liste_etiqu">
							<ul>
								@foreach($devisE3 as $devisz)
								<li>
									<div class="card">
										<h5 class="card-header text-center">FICHE n°{{ $devisz->id }}</h5>
										<div class="card-body">
											<div><h5 class="card-title">Des emballages</h5></div>
											<div class="icons">
												<a href="{!! route('devis-e-edit', ['idDso'=>$idDso, 'idDevisE3'=>$devisz->id]) !!}" role="button"><i class="medium material-icons">create</i></a>
												<a href="{!! route('devis-e-destroy', ['idDso'=>$idDso, 'idDevisE3'=>$devisz->id]) !!}" role="button"><i class="medium material-icons">delete</i></a>

											</div>
										</div>
									</div>
								</li>
								@endforeach
							</ul>
							<a href="{!! route('devis-e-create-e3', ['idDso'=>$idDso]) !!}" type="submit" role="button" class="btn btn-primary">AJOUTER</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<button class="btn btn-primary" type="submit">Valider ></button>
	</form>
</section>
@endsection