@extends('layouts.app')

@section('title', 'Nouveau DSO')

@section('content')
<section id="nouveau_dso">
	<form method="POST" action="{{ action('DsorootController@store') }}">
		@csrf
		<div class="div_dso">
			<div id="left">
				<div class="nouveau-dso form-group">
					<label for="date_demande">Date 1ère demande client</label>
					<input type="date" class="form-control" id="date_demande" name="date_demande" placeholder="" value="" required>

				</div>
				<div class="nouveau-dso form-group">
					<label for="date_rep">Date réponse souhaitée</label>
					<input type="date" class="form-control" id="date_rep" name="date_rep" placeholder="" value="" required>
				</div>
				<div class="nouveau-dso form-group">
					<label for="date_envoi">Date d'envoi de l'offre</label>
					<input type="date" class="form-control" id="date_envoi" name="date_envoi" placeholder="" value="" required>
				</div>
				<div class="nouveau-dso form-group">
					<label for="date_livraison">Date livraison souhaitée</label>
					<input type="date" class="form-control" id="date_livraison" name="date_livraison" placeholder="" value="" required>
				</div>
			</div>

			<div id="right">
				<div class="nouveau-dso form-group">
					<label for="exampleInputEmail1">Date création fiche :</label>
					<input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $today }}" disabled>
				</div>
				<div class="nouveau-dso form-group">
					<label for="exampleInputPassword1">Nom du commercial :</label>
					<input type="text" class="form-control" id="exampleInputPassword1" value="{{ Auth::user()->name }}" disabled>
				</div>
				<button class="btn btn-warning" type="submit">Continuer</button>
			</div>
		</div>
	</form>
</section>
@endsection
