@extends('layouts.app')

@section('title', 'Devis')

@section('content')
<section id="a">
	<form method="POST" action="{{ action('DevisCController@update', [$idDso]) }}">
		@csrf
		<div id="accordion">
			<div class="card">
				<div class="card-header" id="headingOne">
					<h5 class="mb-0">
						<a role="button"  class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							EMBALLAGES
						</a>
					</h5>
				</div>

				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
					<div class="card-body">

						<div class="a form-group">
							<label for="matiere_emb">Matière de l'emballage</label>
							<select class="form-control" id="matiere_emb" name="matiere_emb">
								<option selected>{{ $data1->matiere_emb }}</option>
								<option value="Métal">Métal</option>
								<option value="Plastique">Plastique</option>
								<option value="Verre">Verre</option>
								<option value="Autre">Autre</option>
							</select>
						</div>

						<div class="a form-group">
							<label for="type_emb">Type d'emballage</label>
							<select class="form-control" id="type_emb" name="type_emb">
								<option selected>{{ $data1->type_emb }}</option>
								<option value="Cylindrique">Cylindrique</option>
								<option value="Carré">Carré</option>
								<option value="Barquette">Barquette</option>
								<option value="Conique">Conique</option>
								<option value="Forme spéciale">Forme spéciale</option>
								<option value="Ovoïde">Ovoïde</option>
								<option value="Bocal">Bocal</option>
								<option value="Sachet">Sachet</option>
							</select>
						</div>

						<div class="a form-group">
							<label for="nbr_emb">Nombre d'emballages :</label>
							<input type="number" min="0" class="form-control" id="nbr_emb" name="nbr_emb" value="{{ $data1->nbr_emb }}">
						</div>
						<div class="container" id="btn-bottom-page">
							<button type="submit" class="btn btn-outline-primary grisfonce">Ajouter un emballage</button>
						</div>

					</div>

						
					</div>
				</div>
				<div class="card">

					<div class="card-header" id="headingTwo">
						<h5 class="mb-0">
							<a role="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								ETIQUETTES
							</a>
						</h5>
					</div>

					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
						<div class="card-body">
						<div class="a form-group">
							<label for="matiere_eti">Matière de l'étiquette</label>
							<select class="form-control" id="matiere_eti" name="matiere_eti">
								<option selected>{{ $data2->matiere_eti }}</option>
								<option value="Opaque">Opaque</option>
								<option value="Transparente">Transparente</option>
							</select>
						</div>

						<div class="a form-group">
							<label for="type_eti">Type d'étiquette</label>
							<select class="form-control" id="type_eti" name="type_eti">
								<option selected>{{ $data2->type_eti }}</option>
								<option value="Collerette entourante">Collerette entourante</option>
								<option value="Collerette">Collerette</option>
								<option value="Corp">Corp</option>
								<option value="Contre">Contre</option>
								<option value="Medaille">Medaille</option>
								<option value="Capsule thermo">Capsule thermo</option>
								<option value="Capsule">Capsule</option>
								<option value="Livret">Livret</option>
								<option value="1 rabat">1 rabat</option>
								<option value="2 rabats">2 rabats</option>
								<option value="Simple">Simple</option>
							</select>
						</div>
						<div class="a form-group">
							<label for="nbr_eti">Nombre d'étiquettes :</label>
							<input type="number" min="0" class="form-control" id="nbr_eti" name="nbr_eti" value="{{ $data2->nbr_eti }}">
						</div>
						<div class="container" id="btn-bottom-page">
							<button type="submit" class="btn btn-outline-primary grisfonce">Ajouter une étiquette</button>
						</div>
						</div>
					</div>
				</div>
			</div>
			<button type="button" class="btn btn-primary" type="submit">Valider ></button>
		</div>
	</form>
</section>
@endsection
