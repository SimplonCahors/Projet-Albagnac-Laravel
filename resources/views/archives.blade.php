@extends('layouts.app')

@section('title', 'Archives')

@section('sidebar')
@parent

@endsection

@section('content')
<section id="archives">
	<div class="archives container">
		<form class="form-inline">
			<input class="archives form-control mr-sm-2" type="search" placeholder="Rechercher un DSO..." aria-label="Search">
		</form>

		<div class="archives filtresetliste">
			<div class="archives btn-group-vertical">
				<button id="trierpar">TRIER PAR</button>
				<select class="custom-select" id="inputGroupSelect01">
					<option selected>Commercial</option>
					<option value="1">Dante</option>
					<option value="1">Virgil</option>
					<option value="2">Pluton</option>
					<option value="3">MacGyver</option>
				</select>
				<select class="custom-select" id="inputGroupSelect02">
					<option selected>Date</option>
					<option value="1">Hier</option>
					<option value="2">Aujourd'hui</option>
					<option value="3">Demain</option>
				</select>
				<select class="custom-select" id="inputGroupSelect03">
					<option selected>Référence</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
				</select>
				<select class="custom-select" id="inputGroupSelect04">
					<option selected>Client</option>
					<option value="1">Georges</option>
					<option value="2">Jackson</option>
					<option value="3">Henri</option>
				</select>
			</div>

			<div class="archives list-group">
				<a href="#" class="archives list-group-item list-group-item-action disabled">
					LISTE DES DSO
				</a>
				<a href="#" class="archives list-group-item list-group-item-action">Un autre nom de DSO</a>
				<a href="#" class="archives list-group-item list-group-item-action">Encore un nom de DSO</a>
				<a href="#" class="archives list-group-item list-group-item-action">Encore un autre nom de DSO</a>
			</div>
		</div>
	</div>
</section>
@endsection