@extends('layouts.app')

@section('title', 'Emballages')

@section('sidebar')
    @parent
@endsection

@section('content')
  <section id="emballages">
	<i class="material-icons">menu</i>

	<form action="/dso/{{$idDso}}/emballages" method="POST" enctype="multipart/form-data">
		@csrf

		<div id="left">

			<div class="form-group row">
				<div class="col-6">
					<input type="text" class="form-control" name="ref_int">
				</div>
				<label for="ref_int" class="col-6 col-form-label">Réf. Interne</label>
			</div>

			<div class="form-group row">
				<div class="col-6">
					<input type="text" class="form-control" name="ref_ext">
				</div>
				<label for="ref_ext" class="col-6 col-form-label">Réf. Client</label>
			</div>

			<div class="card-header text-center">
				DIMENSIONS
			</div>

			<div class="form-group row">
				<div class="col-6">
					<select class="form-control" name="forme">
						<option value="" selected>Choisir</option>
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
				<label for="forme" class="col-6 col-form-label">Forme</label>
			</div>

			<div class="form-group row">
				<div class="col-6">
					<input type="number" class="form-control" min="0" name="hauteur">
				</div>
				<label for="hauteur" class="col-6 col-form-label">Hauteur en mm </label>
			</div>

			<div class="form-group row">
				<div class="col-6">
					<input type="number" class="form-control" min="0" name="diametre_longueur">
				</div>
				<label for="diametre_longueur" class="col-6 col-form-label">Diamètre en mm</label>
			</div>

			<div class="form-group">
				<textarea class="form-control" name="observations" rows="3" placeholder="Observations">
				</textarea>
			</div>

			<div class="form-group">
				<label for="url_photo">Ajouter une photo :</label>
				<input type="file" class="form-control-file" name="url_photo">
			</div>
			<div id="image-upload">
				<img src="" >
			</div>

		</div>

		<div id="right">

			<div class="card-header text-center">
				CARACTÉRISTIQUES
			</div>

			<div class="form-group row">
				<div class="col-5">
					<select class="form-control" name="plein_vide">
						<option value="" selected>Choisir</option>
						<option value="Plein">Plein</option>
						<option value="Vide">Vide</option>
					</select>
				</div>
				<label for="plein_vide" class="col-7 col-form-label">Produits plein ou vides</label>
			</div>

			<div class="form-group row">
				<div class="col-5">
					<input type="number" class="form-control" name="temp_produit">
				</div>
				<label for="temp_produit" class="col-7 col-form-label">Température produit en °C</label>
			</div>

			<div class="form-group row">
				<div class="col-5">
					<input type="number" class="form-control" min="0" name="poids_prod">
				</div>
				<label for="poids_prod" class="col-7 col-form-label">Poids produit en g</label>
			</div>
			
			<div class="form-group row">
				<div class="col-5">
					<select class="form-control" name="matiere">
						<option value="" selected>Choisir</option>
						<option value="Métal">Métal</option>
						<option value="Plastique">Plastique</option>
						<option value="Verre">Verre</option>
						<option value="Autre">Autre</option>
					</select>
				</div>
				<label for="matiere" class="col-7 col-form-label">Matière</label>
			</div>

			<div class="form-group row">
				<div class="col-5">
					<select class="form-control" name="niveau_deform">
						<option value="" selected>Choisir</option>
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</div>
				<label for="niveau_deform" class="col-7 col-form-label">Déformation</label>
			</div>

			<div class="form-group row">
				<div class="col-5">
					<input type="text" class="form-control" name="tolerance_dim">
				</div>
				<label for="tolerance_dim" class="col-7 col-form-label">Tolérance dimensionnelle</label>
			</div>

			<div class="container" id="btn-bottom-page">
				<button type="submit" class="btn btn-outline-primary vert" name="">Valider</button>
			</div>

		</div>

	</form>	
</section>
@endsection