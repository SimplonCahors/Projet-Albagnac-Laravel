@extends('layouts.app')

@section('title', 'Étiquettes')

@section('sidebar')
@parent    
@endsection

@section('content')
<section id="etiquettes">
	<i class="material-icons">menu</i>
	<form action="/dso/{{$idDso}}/etiquettes/" method="POST">
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
					<input type="number" class="form-control" id="hauteur_eti" min="0" name="hauteur_eti">
				</div>
				<label for="hauteur_eti" class="col-6 col-form-label">Hauteur en mm</label>
			</div>

			<div class="form-group row">
				<div class="col-6">
					<input type="number" class="form-control" id="largeur_eti" min="0" name="largeur_eti">
				</div>
				<label for="largeur_eti" class="col-6 col-form-label">Largeur en mm</label>
			</div>

			<div class="form-group row">
				<div class="col-6">
					<input type="number" class="form-control" id="diametre_eti" min="0" name="diametre_eti">
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
					<input type="number" class="form-control" id="hauteur_bobine" min="0" name="hauteur_bobine">
				</div>
				<label for="hauteur_bobine" class="col-7 col-form-label">Hauteur (H)</label>
			</div>

			<div class="form-group row">
				<div class="col-5">
					<input type="number" class="form-control" id="diametre_bobine" min="0" name="diametre_bobine">
				</div>
				<label for="diametre_bobine" class="col-7 col-form-label">Diamètre bobine (D)</label>
			</div>

			<div class="form-group row">
				<div class="col-5">
					<input type="number" class="form-control" id="diametre_mandrin" min="0" name="diametre_mandrin">
				</div>
				<label for="diametre_mandrin" class="col-7 col-form-label">Diamètre mandrin (d)</label>
			</div>

			<div class="form-group row">
				<div class="col-5">
					<input type="number" class="form-control" id="nbr_eti" min="0" name="nbr_eti">
				</div>
				<label for="nbr_eti" class="col-7 col-form-label">Nombre d'étiquettes</label>
			</div>

			<div class="form-group row">
				<div class="col-5">
					<select class="custom-select" id="enroulement" name="enroulement">
						<option selected>Choix</option>
						<option value="1">E1 : tête en avant (ET)</option>
						<option value="2">E2 : pied en avant (EP)</option>
						<option value="3">E3 : tête à droite (ED)</option>
						<option value="4">E4 : tête à gauche (EG)</option>
						<option value="5">I1 : tête en avant (IT)</option>
						<option value="6">I2 : pied en avant (IP)</option>
						<option value="7">I3 : tête à droite (ID)</option>
						<option value="8">I4 : tête à gauche (IG)</option>
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