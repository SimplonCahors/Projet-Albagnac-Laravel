@extends('layouts.app')

@section('title', 'Nouveau DSO')

@section('sidebar')
@parent
<nav>
	<a href="#">Devis</a>
	<a href="#">Etiquettes</a>
	<a href="#">Emballages</a>
	<a href="#">Combinaison</a>
</nav>

@endsection

@section('content')
<form method="POST">
<div class="container">

	<div class="row">

		<div class="col">

			<label>Date Première demande client :</label>
				<input type="date" name="client">
			<label>Date de la réponse souhaitée :</label>
				<input type="date" name="souhaitee">
			<label>Date de l'envoie de l'offre :</label>
				<input type="date" name="envoie">
			<label>date de livraison souhaitée :</label>
				<input type="date" name="livraison">
		</div>

		<div class="col">
			<label>Date création fiche :</label>
				<input type="date" name="fiche_creation">
			<p>Nom du commercial :</p>
				<input type="text" name="nom" required>
			<button type="submit">Suivant ></button>
		</div>
	</div>
</div>
</form>

	@endsection