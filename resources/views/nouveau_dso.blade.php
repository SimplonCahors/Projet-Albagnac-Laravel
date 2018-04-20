@extends('layouts.app')

@section('title', 'Nouveau DSO')

@section('content')
<section id="nouveau_dso">
	<form method="POST">
		<div class="div_dso">
			<div id="left">
				<div class="nouveau-dso form-group">
					<label for="exampleInputEmail1">Date Première demande client :</label>
					<input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
				</div>
				<div class="nouveau-dso form-group">
					<label for="exampleInputPassword1">Date de la réponse souhaitée :</label>
					<input type="date" class="form-control" id="exampleInputPassword1">
				</div>
				<div class="nouveau-dso form-group">
					<label for="exampleInputEmail1">Date de l'envoi de l'offre :</label>
					<input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				</div>
				<div class="nouveau-dso form-group">
					<label for="exampleInputPassword1">Date de livraison souhaitée :</label>
					<input type="date" class="form-control" id="exampleInputPassword1">
				</div>
			</div>

			<div id="right">
				<div class="nouveau-dso form-group">
					<label for="exampleInputEmail1">Date création fiche :</label>
					<input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				</div>
				<div class="nouveau-dso form-group">
					<label for="exampleInputPassword1">Nom du commercial :</label>
					<input type="text" class="form-control" id="exampleInputPassword1" required>
				</div>
				<button type="button" class="btn btn-outline-primary" type="submit">Suivant ></button>
			</div>
		</div>
	</form>
</section>
@endsection
