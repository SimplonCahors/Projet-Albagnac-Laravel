@extends('layouts.app')

@section('title', 'Information Commerciales')

@section('content')

	@include('sous_nav')
	@include('breadcrumb')

	<section id="a">

		<form method="POST" action="">
			@csrf

			<div id="accordion">

				<div class="card">

					<div class="card-header" id="headingOne">
						<h5 class="mb-0">
							<a role="button"  class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								ÉTAT DES LIEUX
							</a>
						</h5>
					</div>

					<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">

						<div class="card-body">

							<div class="a form-group">
								<label for="nomclient">Besoin :</label>
								<input type="text" class="form-control" name="besoin">
							</div>

							<div class="a form-group">
								<label for="adresse">Remarques :</label>
								<input type="text" class="form-control" name="rem_besoin">
							</div>

							<div class="a form-group">
								<label for="telephone">Fournisseurs Actuelles :</label>
								<input type="text" class="form-control" name="fournisseur_actuel">
							</div>

							<div class="a form-group">
								<label for="fax">Concurrence sur cette opportunité</label>
								<input type="text" class="form-control" placeholder="Nom :" name="nom_concurrent">
								<input type="text" class="form-control" placeholder="Type :" name="type_concurrent">
								<input type="text" class="form-control" placeholder="Remarques :" name="rem_concurrent">
							</div>

						</div>

					</div>
				</div>

				<div class="card">

					<div class="card-header" id="headingTwo">
						<h5 class="mb-0">
							<a role="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								PERSPECTIVES COMMERCIALES
							</a>
						</h5>
					</div>

					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">

						<div class="card-body">

							<div class="a form-group">
								<label for="nomclient">Nombre et type potentiel de machines :</label>
								<input type="text" class="form-control" name="nbr_type_machines">
							</div>

							<div class="a form-group">
								<label for="adresse">Implantation des sites en cas de groupe industriel :</label>
								<input type="text" class="form-control" name="site_prod">
							</div>

							<div class="a form-group">
								<label for="telephone">Site de production :</label>
								<input type="text" class="form-control" name="Implantations_sites">
							</div>

							<div class="a form-group">
								<label for="fax">Environnement concurrentiel lié à la demande de devis :</label>
								<input type="text" class="form-control" name="env_concurrentiel">
							</div>

						</div>

					</div>

				</div>

				<button type="button" class="btn btn-primary" type="submit">Valider ></button>

			</div>

		</form>

	</section>

@endsection