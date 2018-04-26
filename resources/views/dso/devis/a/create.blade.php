@extends('layouts.app')

@section('title', 'Devis')

@section('content')
@include('sous_nav')
@include('breadcrumb')
<section id="a">

	<form method="POST" action="{{ action('DevisAController@store', ['idDso'=> $idDso]) }}">
		@csrf
		<div id="accordion">
			<div class="card">
				<div class="card-header" id="headingOne">
					<h5 class="mb-0">
						<a role="button"  class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							INFORMATIONS ADMINISTRATIVES DU DEMANDEUR 
						</a>
					</h5>
				</div>

				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
					<div class="card-body">

						<div class="a form-group">
							<label for="nom_client">Nom du client :</label>
							<input type="text" class="form-control" id="nom_client" name="nom_client">
						</div>

						<div class="a form-group">
							<label for="adresse_client">Adresse postale :</label>
							<input type="text" class="form-control" id="adresse_client" name="adresse_client">
						</div>

						<div class="a form-group">
							<label for="tel_client">Téléphone :</label>
							<input type="tel" class="form-control" id="tel_client" name="tel_client">
						</div>

						<div class="a form-group">
							<label for="fax_client">Fax :</label>
							<input type="tel" class="form-control" id="fax_client" name="fax_client">
						</div>
						
						<div class="a form-group">
							<label for="pays_client">Pays :</label>
							<input type="text" class="form-control" id="pays_client" name="pays_client">
						</div>
						
						<div class="a form-group">
							<label for="categorie_client">Catégorie</label>
							<select class="form-control" id="categorie_client" name="categorie_client">
								<option selected>Choisir</option>
								<option value="1">Client</option>
								<option value="2">Revendeur</option>
							</select>
						</div>

						<div class="a form-group">
							<label for="secteur_client">Secteur</label>
							<select class="form-control" id="secteur_client" name="secteur_client">
								<option selected>Choisir</option>
								<option value="1">VINICOLE</option>
								<option value="2">INDUSTRIE</option>
							</select>
						</div>

						<div class="a form-group">
							<label for="sousecteur_client">Sous secteur</label>
							<select class="form-control" id="sousecteur_client" name="sousecteur_client">
								<option selected>Choisir</option>
								<option value="1">Agro-alimentaire</option>
								<option value="2">Cosmétique</option>
								<option value="3">Chimie</option>
								<option value="4">Vinicole</option>
								<option value="5">Autres secteurs</option>
							</select>
						</div>

						<div class="a form-group">
							<label for="type_client">Type client</label>
							<select class="form-control" id="type_client" name="type_client">
								<option selected>Choisir</option>
								<option value="1">Nouveau</option>
								<option value="2">Existant</option>
							</select>
						</div>
						
						<div class="a form-group">
							<label for="siret_client">SIRET :</label>
							<input type="tel" class="form-control" id="siret_client" name="siret_client">
						</div>
						
					</div>

					
				</div>
			</div>
			<div class="card">

				<div class="card-header" id="headingTwo">
					<h5 class="mb-0">
						<a role="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							CONTACT COMMERCIAL
						</a>
					</h5>
				</div>

				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
					<div class="card-body">

						<div class="a form-group">
							<label for="nom_commercial">Nom :</label>
							<input type="text" class="form-control" id="nom_commercial" name="nom_commercial">
						</div>

						<div class="a form-group">
							<label for="fonction_commercial">Fonction :</label>
							<input type="text" class="form-control" id="fonction_commercial" name="fonction_commercial">
						</div>

						<div class="a form-group">
							<label for="mail_commercial">Email :</label>
							<input type="email" class="form-control" id="mail_commercial" name="mail_commercial">
						</div>

						<div class="a form-group">
							<label for="tel_commercial">Téléphone :</label>
							<input type="tel" class="form-control" id="tel_commercial" name="tel_commercial">
						</div>

						<div class="a form-group">
							<label for="experience_commercial">Expérience :</label>
							<input type="text" class="form-control" id="experience_commercial" name="experience_commercial">
						</div>

					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-header" id="headingThree">
					<h5 class="mb-0">
						<a role="button"  class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							CONTACT TECHNIQUE
						</a>
					</h5>
				</div>

				<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
					<div class="card-body">
						
						<div class="a form-group">
							<label for="nom_tech">Nom :</label>
							<input type="text" class="form-control" id="nom_tech" name="nom_tech">
						</div>

						<div class="a form-group">
							<label for="fonction_tech">Fonction :</label>
							<input type="text" class="form-control" id="fonction_tech" name="fonction_tech">
						</div>

						<div class="a form-group">
							<label for="mail_tech">Email :</label>
							<input type="email" class="form-control" id="mail_tech" name="mail_tech">
						</div>

						<div class="a form-group">
							<label for="tel_tech">Téléphone :</label>
							<input type="tel" class="form-control" id="tel_tech" name="tel_tech">
						</div>

						<div class="a form-group">
							<label for="experience_tech">Expérience :</label>
							<input type="text" class="form-control" id="experience_tech" name="experience_tech">
						</div>

					</div>
				</div>
			</div>
		</div>
		<button class="btn btn-primary" type="submit">Valider ></button>
	</div>
</form>
</section>
@endsection
