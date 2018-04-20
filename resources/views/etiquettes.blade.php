@extends('layouts.app')

@section('title', 'Étiquettes')

@section('sidebar')
@parent    
@endsection

@section('content')
<section id="etiquettes">
	<i class="material-icons">menu</i>
	<form method="POST" action="#">
		 @csrf
		<div id="left">
			<div class="form-group row">
				<div class="col-6">
					<input type="text" class="form-control" id="ref_eti" name="ref_eti">
				</div>
				<label for="ref_eti" class="col-6 col-form-label">Réf. Étiquette</label>
			</div>

			<div class="card-header text-center">
				DIMENSIONS
			</div>
			<div class="form-group row">
				<div class="col-6">
					<input type="number" class="form-control" id="hauteur_eti" name="hauteur_eti">
				</div>
				<label for="hauteur_eti" class="col-6 col-form-label">Hauteur en mm</label>
			</div>
			<div class="form-group row">
				<div class="col-6">
					<input type="number" class="form-control" id="largeur_eti" name="largeur_eti">
				</div>
				<label for="largeur_eti" class="col-6 col-form-label">Largeur en mm </label>
			</div>
			<div class="form-group row">
				<div class="col-6">
					<input type="number" class="form-control" id="diametre_eti" name="diametre_eti">
				</div>
				<label for="diametre_eti" class="col-6 col-form-label">Diamètre en mm</label>
			</div>
			<div class="form-group">
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Observations" name="observation_eti"></textarea>
			</div>
			<div class="form-group">
				<label for="photo_eti">Ajouter une photo :</label>
				<input type="file" class="form-control-file" id="photo_eti" name="photo_eti">
			</div>
			<div id="image-upload">
				<img src="">
			</div>
		</div>

		<div id="right">
			<div class="card-header text-center">
				BOBINES
			</div>
			<div class="form-group row">
				<div class="col-5">
					<input type="number" class="form-control" id="hauteur_bobine" name="hauteur_bobine">
				</div>
				<label for="hauteur_bobine" class="col-7 col-form-label">Hauteur (H)</label>
			</div>
			<div class="form-group row">
				<div class="col-5">
					<input type="number" class="form-control" id="diametre_bobine" name="diametre_bobine">
				</div>
				<label for="diametre_bobine" class="col-7 col-form-label">Diamètre bobine (D)</label>
			</div>
			<div class="form-group row">
				<div class="col-5">
					<input type="number" class="form-control" id="diametre_mandrin" name="diametre_mandrin">
				</div>
				<label for="diametre_mandrin" class="col-7 col-form-label">Diamètre mandrin (d)</label>
			</div>
			<div class="form-group row">
				<div class="col-5">
					<input type="number" class="form-control" id="nbr_eti" name="nbr_eti">
				</div>
				<label for="nbr_eti" class="col-7 col-form-label">Nombre d'étiquettes</label>
			</div>
			<div class="form-group row">
				<div class="col-5">
					<select class="custom-select" id="enroulement" name="enroulement">
						<option selected>Choix</option>
						<option value="1">One</option>
						<option value="2">Two</option>
						<option value="3">Three</option>
					</select>
				</div>
				<label class="col-7 col-form-label" for="enroulement">Enroulement</label>
			</div>
			<div class="container" id="btn-bottom-page">
				<button type="submit" class="btn btn-outline-primary grisfonce">Ajouter une étiquette</button>
				<button type="submit" class="btn btn-outline-primary vert">Valider</button>
			</div>
		</div>
		
	</form>
	
</section>
@endsection