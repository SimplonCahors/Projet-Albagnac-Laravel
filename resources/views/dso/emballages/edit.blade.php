@extends('layouts.app')

@section('title', 'Emballages')

@section('sidebar')
    @parent
@endsection

@section('content')

  <section id="emballages">
	<i class="material-icons">menu</i>

	<form action="/dso/{{$idDso}}/emballages/{{ $idEmballage }}/edit/" method="POST" enctype="multipart/form-data">
		@csrf

		<div id="left">
			<div class="form-group row">
				<div class="col-6">
					<input type="text" class="form-control" id="ref_int" name="ref_int" value="{{ $data->ref_int }}">
				</div>
				<label for="ref_int" class="col-6 col-form-label">Réf. Interne</label>
			</div>
			<div class="form-group row">
				<div class="col-6">
					<input type="text" class="form-control" id="ref_ext" name="ref_ext" value="{{ $data->ref_ext }}">
				</div>
				<label for="ref_ext" class="col-6 col-form-label">Réf. Client</label>
			</div>
			<div class="card-header text-center">
				DIMENSIONS
			</div>
			<div class="form-group row">
				<div class="col-6">
					<input type="number" class="form-control" id="forme" name="forme" value="{{ $data->forme }}">
				</div>
				<label for="forme" class="col-6 col-form-label">Forme</label>
			</div>
			<div class="form-group row">
				<div class="col-6">
					<input type="number" class="form-control" id="hauteur" name="hauteur" value="{{ $data->hauteur }}">
				</div>
				<label for="hauteur" class="col-6 col-form-label">Hauteur en mm </label>
			</div>
			<div class="form-group row">
				<div class="col-6">
					<input type="number" class="form-control" id="diametre_longueur" name="diametre_longueur" value="{{ $data->diametre_longueur }}">
				</div>
				<label for="diametre_longueur" class="col-6 col-form-label">Diamètre en mm</label>
			</div>
			<div class="form-group">
				<textarea class="form-control" id="observations" name="observations" rows="3" placeholder="Observations" value="{{ $data->observations }}"></textarea>
			</div>
			<div class="form-group">
				<p>Photo actuelle : {{ $data->url_photo ? $data->url_photo : 'aucune' }}</p>

				@if($data->url_photo)
					<button class="btn btn-primary" type="submit" name="action" value="delete-picture">Supprimer la photo</button>
					</br>
				@endif

				<label for="url_photo">Nouvelle photo :</label>
				<input type="file" class="form-control-file" id="url_photo" name="url_photo" value="{{ $data->url_photo }}">


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
					<input type="text" class="form-control" id="plein_vide" name="plein_vide">
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
					<input type="number" class="form-control" id="poids_prod" name="poids_prod">
				</div>
				<label for="poids_prod" class="col-7 col-form-label">Poids produit en g</label>
			</div>
			<div class="form-group row">
				<div class="col-5">
					<input type="text" class="form-control" id="matiere" name="matiere">
				</div>
				<label for="matiere" class="col-7 col-form-label">Matière</label>
			</div>
			<div class="form-group row">
				<div class="col-5">
					<input type="text" class="form-control" id="niveau_deform" name="niveau_deform">
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
				<button type="submit" class="btn btn-outline-primary vert" name="action" value="submit-form">Valider</button>
			</div>
		</div>

	</form>	
</section>
@endsection