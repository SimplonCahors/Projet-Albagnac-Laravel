@extends('layouts.app')

@section('title', 'Emballages')

@section('sidebar')
    @parent
@endsection

@section('content')
  <section id="emballages">
	<i class="material-icons">menu</i>
	<form action="/dso/{idDso}/emballages" method="POST">
		@csrf

		<div id="left">

			<div class="form-group row">
				<div class="col-6">
					<input type="text" class="form-control" id="ref_int" name="ref_int">
				</div>
				<label for="ref_int" class="col-6 col-form-label">Réf. Interne</label>
			</div>

			<div class="form-group row">
				<div class="col-6">
					<input type="text" class="form-control" id="ref_ext" name="ref_ext">
				</div>
				<label for="ref_ext" class="col-6 col-form-label">Réf. Client</label>
			</div>

			<div class="card-header text-center">
				DIMENSIONS
			</div>

			<div class="form-group row">
				<div class="col-6">
					<select class="form-control" id="forme" name="forme">
						<option selected>Choisir</option>
						<option value="1">Cylindrique</option>
						<option value="2">Carré</option>
						<option value="3">Barquette</option>
						<option value="4">Conique</option>
						<option value="5">Forme spéciale</option>
						<option value="6">Ovoïde</option>
						<option value="7">Bocal</option>
						<option value="8">Sachet</option>
					</select>
				</div>
				<label for="forme" class="col-6 col-form-label">Forme</label>
			</div>

			<div class="form-group row">
				<div class="col-6">
					<input type="number" class="form-control" min="0" id="hauteur" name="hauteur">
				</div>
				<label for="hauteur" class="col-6 col-form-label">Hauteur en mm </label>
			</div>

			<div class="form-group row">
				<div class="col-6">
					<input type="number" class="form-control" id="diametre_longueur" min="0" name="diametre_longueur">
				</div>
				<label for="diametre_longueur" class="col-6 col-form-label">Diamètre en mm</label>
			</div>

			<div class="form-group">
				<textarea class="form-control" id="observations" name="observations" rows="3" placeholder="Observations">
				</textarea>
			</div>

			<div class="form-group">
				<label for="url_photo">Ajouter une photo :</label>
				<input type="file" class="form-control-file" id="url_photo" name="url_photo">
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
					<select class="form-control" id="plein_vide" name="plein_vide">
						<option selected>Choisir</option>
						<option value="1">Plein</option>
						<option value="2">Vide</option>
					</select>
				</div>
				<label for="plein_vide" class="col-7 col-form-label">Produits plein ou vides</label>
			</div>

			<div class="form-group row">
				<div class="col-5">
					<input type="number" class="form-control" id="temp_produit" name="temp_produit">
				</div>
				<label for="temp_produit" class="col-7 col-form-label">Température produit en °C</label>
			</div>

			<div class="form-group row">
				<div class="col-5">
					<input type="number" class="form-control" id="poids_prod"  min="0" name="poids_prod">
				</div>
				<label for="poids_prod" class="col-7 col-form-label">Poids produit en g</label>
			</div>
			
			<div class="form-group row">
				<div class="col-5">
					<select class="form-control" id="matiere" name="matiere">
						<option selected>Choisir</option>
						<option value="1">Métal</option>
						<option value="2">Plastique</option>
						<option value="3">Verre</option>
						<option value="4">Autre</option>
					</select>
				</div>
				<label for="matiere" class="col-7 col-form-label">Matière</label>
			</div>

			<div class="form-group row">
				<div class="col-5">
					<select class="form-control" id="niveau_deform" name="niveau_deform">
						<option selected>Choisir</option>
						<option value="1">0</option>
						<option value="2">1</option>
						<option value="3">2</option>
						<option value="4">3</option>
						<option value="5">4</option>
						<option value="6">5</option>
					</select>
				</div>
				<label for="niveau_deform" class="col-7 col-form-label">Déformation</label>
			</div>

			<div class="form-group row">
				<div class="col-5">
					<input type="text" class="form-control" id="tolerance_dim" name="tolerance_dim">
				</div>
				<label for="tolerance_dim" class="col-7 col-form-label">Tolérance dimensionnelle</label>
			</div>

			<div class="container" id="btn-bottom-page">
				<button type="button" class="btn btn-outline-primary grisfonce">Ajouter un emballage</button>
				<button type="submit" class="btn btn-outline-primary vert" name="">Valider</button>
			</div>

		</div>

	</form>	
</section>
@endsection