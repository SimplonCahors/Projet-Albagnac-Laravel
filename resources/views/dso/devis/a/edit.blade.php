@extends('layouts.app')

@section('title', 'Devis')

@section('content')

	@include('sous_nav')
	@include('breadcrumb')

	<section id="a">

		<form method="POST" action="{{ action('DevisAController@update', [$idDso]) }}">
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
								<input type="text" class="form-control" name="nom_client" value="{{ $data1->nom_client }}">
							</div>

							<div class="a form-group">
								<label for="adresse_client">Adresse postale :</label>
								<input type="text" class="form-control" name="adresse_client"  value="{{ $data1->adresse_client }}">
							</div>

							<div class="a form-group">
								<label for="tel_client">Téléphone :</label>
								<input type="tel" class="form-control" name="tel_client"  value="{{ $data1->tel_client }}">
							</div>

							<div class="a form-group">
								<label for="fax_client">Fax :</label>
								<input type="tel" class="form-control" name="fax_client"  value="{{ $data1->fax_client }}">
							</div>
							
							<div class="a form-group">
								<label for="pays_client">Pays :</label>
								<input type="text" class="form-control" name="pays_client"  value="{{ $data1->pays_client }}">
							</div>
							
							<div class="a form-group">
								<label for="categorie_client">Catégorie</label>
								<select class="form-control" name="categorie_client">
									<option selected>{{ $data1->categorie_client }}</option>
									<option value="Client">Client</option>
									<option value="Revendeur">Revendeur</option>
								</select>
							</div>

							<div class="a form-group">
								<label for="secteur_client">Secteur</label>
								<select class="form-control" name="secteur_client">
									<option selected>{{ $data1->serveur_client }}</option>
									<option value="VINICOLE">VINICOLE</option>
									<option value="INDUSTRIE">INDUSTRIE</option>
								</select>
							</div>

							<div class="a form-group">
								<label for="sousecteur_client">Sous secteur</label>
								<select class="form-control" name="sousecteur_client">
									<option selected>{{ $data1->sousecteur_client }}</option>
									<option value="1">Agro-alimentaire</option>
									<option value="2">Cosmétique</option>
									<option value="3">Chimie</option>
									<option value="4">Vinicole</option>
									<option value="5">Autres secteurs</option>
								</select>
							</div>

							<div class="a form-group">
								<label for="type_client">Type client</label>
								<select class="form-control" name="type_client">
									<option selected>{{ $data1->type_client }}</option>
									<option value="1">Nouveau</option>
									<option value="2">Existant</option>
								</select>
							</div>
							
							<div class="a form-group">
								<label for="siret_client">SIRET :</label>
								<input type="tel" class="form-control" name="siret_client" value="{{ $data1->siret_client }}">
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
								<input type="text" class="form-control" name="nom_commercial" value="{{ $data2->nom_commercial }}">
							</div>

							<div class="a form-group">
								<label for="fonction_commercial">Fonction :</label>
								<input type="text" class="form-control" name="fonction_commercial" value="{{ $data2->fonction_commercial }}">
							</div>

							<div class="a form-group">
								<label for="mail_commercial">Email :</label>
								<input type="email" class="form-control" name="mail_commercial" value="{{ $data2->mail_commercial }}">
							</div>

							<div class="a form-group">
								<label for="tel_commercial">Téléphone :</label>
								<input type="tel" class="form-control" name="tel_commercial" value="{{ $data2->tel_commercial }}">
							</div>

							<div class="a form-group">
								<label for="experience_commercial">Expérience :</label>
								<input type="text" class="form-control" name="experience_commercial" value="{{ $data2->experience_commercial }}">
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
								<input type="text" class="form-control" name="nom_tech" value="{{ $data3->nom_tech }}">
							</div>

							<div class="a form-group">
								<label for="fonction_tech">Fonction :</label>
								<input type="text" class="form-control" name="fonction_tech" value="{{ $data3->fonction_tech }}">
							</div>

							<div class="a form-group">
								<label for="mail_tech">Email :</label>
								<input type="email" class="form-control" name="mail_tech" value="{{ $data3->mail_tech }}">
							</div>

							<div class="a form-group">
								<label for="tel_tech">Téléphone :</label>
								<input type="tel" class="form-control" name="tel_tech" value="{{ $data3->experience_tech }}">
							</div>

							<div class="a form-group">
								<label for="experience_tech">Expérience :</label>
								<input type="text" class="form-control" name="experience_tech" value="{{ $data3->__OO__ }}">
							</div>

						</div>

					</div>

				</div>

			</div>

			<button class="btn btn-primary" type="submit">Valider ></button>

		</form>

	</section>
	
@endsection
