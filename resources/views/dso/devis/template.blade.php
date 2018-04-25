@extends('layouts.app')

@section('title', 'Devis')

@section('content')
<section id="a">
	<form method="POST" action="">
		@csrf
		<div id="accordion">
			<div class="card">
				<div class="card-header" id="headingOne">
					<h5 class="mb-0">
						<a role="button"  class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							INFORMATIONS GÉNÉRALES
						</a>
					</h5>
				</div>

				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
					<div class="card-body">
						<div class="a form-group">
							<label for="nomclient">Nom du client :</label>
							<input type="text" class="form-control">
						</div>
						<div class="a form-group">
							<label for="adresse">Adresse postale :</label>
							<input type="text" class="form-control">
						</div>
						<div class="a form-group">
							<label for="telephone">Téléphone :</label>
							<input type="text" class="form-control">
						</div>
						<div class="a form-group">
							<label for="fax">Fax :</label>
							<input type="text" class="form-control">
						</div>
						<div class="a form-group">
							<label for="pays">Pays :</label>
							<input type="text" class="form-control">
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
								<label for="nomclient">Nom :</label>
								<input type="text" class="form-control">
							</div>
							<div class="a form-group">
								<label for="adresse">Fonction :</label>
								<input type="text" class="form-control">
							</div>
							<div class="a form-group">
								<label for="telephone">Email :</label>
								<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
							</div>
							<div class="a form-group">
								<label for="fax">Téléphone :</label>
								<input type="text" class="form-control">
							</div>
							<div class="a form-group">
								<label for="pays">Expérience :</label>
								<input type="text" class="form-control">
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
								<label for="nomclient">Nom :</label>
								<input type="text" class="form-control">
							</div>
							<div class="a form-group">
								<label for="adresse">Fonction :</label>
								<input type="text" class="form-control">
							</div>
							<div class="a form-group">
								<label for="telephone">Email :</label>
								<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
							</div>
							<div class="a form-group">
								<label for="fax">Téléphone :</label>
								<input type="text" class="form-control">
							</div>
							<div class="a form-group">
								<label for="pays">Expérience :</label>
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
@endsection
