@extends('layouts.app')

@section('title', 'Etiquettes')

@section('sidebar')
@parent    
@endsection

@section('content')
<section id="etiquettes">
	<i class="material-icons">menu</i>
	<form>
		<div class="form-group row">
			<div class="col-6">
				<input type="text" class="form-control" id="ref-etiquette" name="ref-etiquette">
			</div>
			<label for="ref-etiquette" class="col-6 col-form-label">Réf. Étiquette</label>
		</div>

		<div class="card-header text-center">
			DIMENSIONS
		</div>
		<div class="form-group row">
			<div class="col-6">
				<input type="number" class="form-control" id="ref-etiquette" name="ref-etiquette">
			</div>
			<label for="ref-etiquette" class="col-6 col-form-label">Hauteur en mm</label>
		</div>
		<div class="form-group row">
			<div class="col-6">
				<input type="number" class="form-control" id="ref-etiquette" name="ref-etiquette">
			</div>
			<label for="ref-etiquette" class="col-6 col-form-label">Largeur en mm </label>
		</div>
		<div class="form-group row">
			<div class="col-6">
				<input type="number" class="form-control" id="ref-etiquette" name="ref-etiquette">
			</div>
			<label for="ref-etiquette" class="col-6 col-form-label">Diamètre en mm</label>
		</div>
		<div class="form-group">
			<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Observations"></textarea>
		</div>
		<div class="form-group">
			<label for="exampleFormControlFile1">Ajouter une photo :</label>
			<input type="file" class="form-control-file" id="exampleFormControlFile1">
		</div>
		<div id="image-upload">
			<img src="">
		</div>

		<div class="card-header text-center">
			BOBINES
		</div>
		<div class="form-group row">
			<div class="col-5">
				<input type="number" class="form-control" id="ref-etiquette" name="ref-etiquette">
			</div>
			<label for="ref-etiquette" class="col-7 col-form-label">Hauteur (H)</label>
		</div>
		<div class="form-group row">
			<div class="col-5">
				<input type="number" class="form-control" id="ref-etiquette" name="ref-etiquette">
			</div>
			<label for="ref-etiquette" class="col-7 col-form-label">Diamètre bobine (D)</label>
		</div>
		<div class="form-group row">
			<div class="col-5">
				<input type="number" class="form-control" id="ref-etiquette" name="ref-etiquette">
			</div>
			<label for="ref-etiquette" class="col-7 col-form-label">Diamètre madrin (d)</label>
		</div>
		<div class="form-group row">
			<div class="col-5">
				<input type="number" class="form-control" id="ref-etiquette" name="ref-etiquette">
			</div>
			<label for="ref-etiquette" class="col-7 col-form-label">Nombre d'étiquettes</label>
		</div>
		<div class="form-group row">
			<div class="col-5">
				<select class="custom-select" id="inlineFormCustomSelect">
					<option selected>Choix</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select>
			</div>
			<label class="col-7 col-form-label" for="inlineFormCustomSelect">Enroulement</label>
		</div>
		<div class="container" id="btn-bottom-page">
			<button type="button" class="btn btn-outline-primary grisfonce">Ajouter une étiquette</button>
			<button type="button" class="btn btn-outline-primary vert">Valider</button>
		</div>
	</form>
	
</section>
@endsection