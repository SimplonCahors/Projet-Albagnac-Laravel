@extends('layouts.app')

@section('title', 'Devis')

@section('content')
@include('sous_nav')
@include('breadcrumb')
<section id="a">

	<form method="POST" action="XXXXXXX">
		@csrf
		<div id="accordion">
			<div class="card">
				<div class="card-header" id="headingOne">
					<h5 class="mb-0">
						<a role="button"  class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							REMARQUES / CONTRAINTES ÉVENTUELLES
						</a>
					</h5>
				</div>

				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
					<div class="card-body">

						<div class="a form-group">
							<label for="objet_rem">Objet :</label>
							<input type="text" class="form-control" id="objet_rem" name="objet_rem">
						</div>

                        <div class="nouveau-dso form-group">
                            <label for="descriptif_rem">Descriptif :</label>
                            <textarea type="text" class="form-control" id="descriptif_rem" name="descriptif_rem" required></textarea>
					    </div>
                        <div class="container" id="btn-bottom-page">
							<button type="submit" class="btn btn-outline-primary grisfonce">Ajouter une remarque</button>
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
