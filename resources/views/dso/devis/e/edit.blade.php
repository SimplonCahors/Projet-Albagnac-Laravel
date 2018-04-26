@extends('layouts.app')

@section('title', 'Materiels imposés, Impression')

@section('content')
<section id="a">
	<form method="POST" action="#">
		@csrf
			<h2>Matériel Imposé</h2>
				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
					<div class="card-body">
						<div class="a form-group">
							<label for="nomclient">Matériel imposé:</label>
							<input type="text" class="form-control">
						</div>
						<div class="a form-group">
							<label for="adresse">Type :</label>
							<input type="text" class="form-control">
						</div>
						<div class="a form-group">
							<label for="telephone">Marque / Information :</label>
							<input type="text" class="form-control">
						</div>
						<div class="a form-group">
							<label for="fax">Modèle :</label>
							<input type="text" class="form-control">
						</div>
						<div class="a form-group">
							<label for="pays">Remarques :</label>
							<input type="text" class="form-control">
						</div>
					</div>
				</div>
			<h2>Impression</h2>
								<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
					<div class="card-body">
						<div class="a form-group">
							<label for="nomclient">Référence emballage:</label>
							<input type="text" class="form-control">
						</div>
						<div class="a form-group">
							<label for="adresse">Type :</label>
							<input type="text" class="form-control">
						</div>
						<div class="a form-group">
							<label for="telephone">Marque / Information :</label>
							<input type="text" class="form-control">
						</div>
						<div class="a form-group">
							<label for="fax">Modèle :</label>
							<input type="text" class="form-control">
						</div>
						<div class="a form-group">
							<label for="pays">Remarques :</label>
							<input type="text" class="form-control">
						</div>
					</div>
				</div>

								<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
					<div class="card-body">
						<div class="a form-group">
							<label for="nomclient">Matériel imposé:</label>
							<input type="text" class="form-control">
						</div>
						<div class="a form-group">
							<label for="adresse">Type :</label>
							<input type="text" class="form-control">
						</div>
						<div class="a form-group">
							<label for="telephone">Marque / Information :</label>
							<input type="text" class="form-control">
						</div>
						<div class="a form-group">
							<label for="fax">Modèle :</label>
							<input type="text" class="form-control">
						</div>
						<div class="a form-group">
							<label for="pays">Remarques :</label>
							<input type="text" class="form-control">
						</div>
					</div>
				</div>






					</form>
				</section>
				@endsection