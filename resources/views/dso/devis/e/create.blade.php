<section id="a">
	<form method="POST" action="">
		@csrf
		<div id="accordion">
			<div class="card">
				<div class="card-header" id="headingOne">
					<h5 class="mb-0">
						<a role="button"  class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							MATERIELS IMPOSES PAR LE CLIENT
						</a>
					</h5>
				</div>

				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
					<div class="card-body">
						<div class="a form-group">
							<label for="nomclient">Type :</label>
							<input type="text" class="form-control">
						</div>
						<div class="a form-group">
							<label for="adresse">Marque :</label>
							<input type="text" class="form-control">
						</div>
						<div class="a form-group">
							<label for="telephone">Modele / informations :</label>
							<input type="text" class="form-control">
						</div>
						<div class="a form-group">
							<label for="fax">Remarques :</label>
							<input type="text" class="form-control">
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-header" id="headingTwo">
						<h5 class="mb-0">
							<a role="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								IMPRESSION / EMBALLAGE
							</a>
						</h5>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
						<div class="card-body">
							<div class="a form-group">
								<label for="nomclient">Référence étiquette :</label>
								<input type="text" class="form-control" placeholder="Numero de l'étiquette">
							</div>
							<div class="a form-group">
								<label for="adresse">Position de l'étiquette à imprimer sur l'emballage :</label>
								<input type="text" class="form-control" placeholder="Dimension (mm xmm)">
							</div>
							<div class="a form-group">
								<label for="telephone">Définition de la zone d'impression :</label>
								<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
							</div>
							<div class="a form-group">
								<label for="fax">Remarques :</label>
								<input type="text" class="form-control">
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingThree">
						<h5 class="mb-0">
							<a role="button"  class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								IMPRESSION / ETIQUETTE
							</a>
						</h5>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
						<div class="card-body">
							<div class="a form-group">
								<label for="nomclient">Référence emballage :</label>
								<input type="text" class="form-control">
							</div>
							<div class="a form-group">
								<label for="adresse">Position à imprimer sur l'emballage :</label>
								<input type="text" class="form-control">
							</div>
							<div class="a form-group">
								<label for="telephone">Définition de la zone d'impression :</label>
								<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
							</div>
							<div class="a form-group">
								<label for="fax">Remarques :</label>
								<input type="text" class="form-control">
							</div>
						</div>
					</div>
				</div>
			</div>
			<button type="button" class="btn btn-primary" type="submit">Valider ></button>
		</div>
	</form>
</section>
