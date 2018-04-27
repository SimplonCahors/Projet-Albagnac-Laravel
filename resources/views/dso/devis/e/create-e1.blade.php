@extends('layouts.app')

@section('title', 'DEVIS')

@section('sidebar')
@parent    
@endsection

@section('content')
<section id="a">
	<form method="POST" action="{!! route('devis-e-store', ['idDso'=>$idDso]) !!}">
		@csrf
		<div id="accordion">
			<div class="card">
				<div class="card-header" id="headingOne">
					<h5 class="mb-0">
						<a role="button"  class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							MATÉRIELS IMPOSÉS PAR LE CLIENT
						</a>
					</h5>
				</div>

				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
					<div class="card-body">
						<div class="a form-group">
							<label for="nomclient">Type :</label>
							<input type="text" class="form-control" name="type_materiel">
						</div>
						<div class="a form-group">
							<label for="adresse">Marque :</label>
							<input type="text" class="form-control" name="marque_materiel">
						</div>
						<div class="a form-group">
							<label for="telephone">Modèle / informations :</label>
							<input type="text" class="form-control" name="modele_materiel">
						</div>
						<div class="a form-group">
							<label for="fax">Remarques :</label>
							<input type="text" class="form-control" name="mise_route_materiel">
						</div>
					</div>
				</div>

			</div>
			<button class="btn btn-primary" type="submit">Ajouter</button>
		</div>
	</form>
</section>
@endsection
