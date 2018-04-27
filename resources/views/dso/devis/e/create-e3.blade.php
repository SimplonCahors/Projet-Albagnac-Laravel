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
				<div class="card-header" id="headingThree">
					<h5 class="mb-0">
						<a role="button"  class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							IMPRESSION / EMBALLAGE
						</a>
					</h5>
				</div>
				<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
					<div class="card-body">
						<div class="a form-group">
							<label for="nomclient">Référence emballage :</label>
							<input type="text" class="form-control" name="ref_emb">
						</div>
						<div class="a form-group">
							<label for="adresse">Position à imprimer sur l'emballage :</label>
							<input type="text" class="form-control" name="position_emb">
						</div>
						<div class="a form-group">
							<label for="telephone">Définition de la zone d'impression :</label>
							<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="dimension_impression_emb">
						</div>
						<div class="a form-group">
							<label for="fax">Remarques :</label>
							<input type="text" class="form-control" name="rem_emb">
						</div>
					</div>
				</div>
			</div>
			<button class="btn btn-primary" type="submit">Ajouter</button>
		</div>
	</form>
</section>
@endsection
