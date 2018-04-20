@extends('layouts.app')

@section('title', 'Emballages')

@section('sidebar')
    @parent
@endsection

@section('content')
  <section id="emballages">
	<i class="material-icons">menu</i>
	<form method="POST" action="#">
		 @csrf
		<div id="left">
			<div class="form-group row">
				<div class="col-6">
					<input type="text" class="form-control" id="ref-etiquette" name="ref-etiquette">
				</div>
				<label for="ref-etiquette" class="col-6 col-form-label">Réf. Interne</label>
			</div>
			<div class="form-group row">
				<div class="col-6">
					<input type="text" class="form-control" id="ref-etiquette" name="ref-etiquette">
				</div>
				<label for="ref-etiquette" class="col-6 col-form-label">Réf. Client</label>
			</div>

			<div class="card-header text-center">
				DIMENSIONS
			</div>
			<div class="form-group row">
				<div class="col-6">
					<input type="number" class="form-control" id="ref-etiquette" name="ref-etiquette">
				</div>
				<label for="ref-etiquette" class="col-6 col-form-label">Forme</label>
			</div>
			<div class="form-group row">
				<div class="col-6">
					<input type="number" class="form-control" id="ref-etiquette" name="ref-etiquette">
				</div>
				<label for="ref-etiquette" class="col-6 col-form-label">Hauteur en mm </label>
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
		</div>

		<div id="right">
			<div class="card-header text-center">
				CARACTÉRISTIQUES
			</div>
			<div class="form-group row">
				<div class="col-5">
					<input type="text" class="form-control" id="ref-etiquette" name="ref-etiquette">
				</div>
				<label for="ref-etiquette" class="col-7 col-form-label">Produits plein ou vides</label>
			</div>
			<div class="form-group row">
				<div class="col-5">
					<input type="number" class="form-control" id="ref-etiquette" name="ref-etiquette">
				</div>
				<label for="ref-etiquette" class="col-7 col-form-label">Température produit en °C</label>
			</div>
			<div class="form-group row">
				<div class="col-5">
					<input type="number" class="form-control" id="ref-etiquette" name="ref-etiquette">
				</div>
				<label for="ref-etiquette" class="col-7 col-form-label">Poids produit en g</label>
			</div>
			<div class="form-group row">
				<div class="col-5">
					<input type="text" class="form-control" id="ref-etiquette" name="ref-etiquette">
				</div>
				<label for="ref-etiquette" class="col-7 col-form-label">Matière</label>
			</div>
			<div class="form-group row">
				<div class="col-5">
					<input type="text" class="form-control" id="ref-etiquette" name="ref-etiquette">
				</div>
				<label for="ref-etiquette" class="col-7 col-form-label">Déformation</label>
			</div>
			<div class="form-group row">
				<div class="col-5">
					<input type="text" class="form-control" id="ref-etiquette" name="ref-etiquette">
				</div>
				<label for="ref-etiquette" class="col-7 col-form-label">Tolérance dimensionnelle</label>
			</div>
			<div class="container" id="btn-bottom-page">
				<button type="submit" class="btn btn-outline-primary grisfonce">Ajouter un emballage</button>
				<button type="submit" class="btn btn-outline-primary vert">Valider</button>
			</div>
		</div>
		
	</form>
	
</section>
@endsection