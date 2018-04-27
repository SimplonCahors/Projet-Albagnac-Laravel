@extends('layouts.app')

@section('title', 'Archives')

@section('sidebar')
@parent

@endsection

@section('content')
<section id="archives">
	<div class="archives container">
		<form method="POST" action="#" class="form-inline">
			<input class="archives form-control mr-sm-2" type="search" placeholder="Rechercher un DSO..." aria-label="Search">
		</form>

		<div class="archives filtresetliste">

			{{-- filtre --}}			
			<div class="archives btn-group-vertical">
				<button id="trierpar">TRIER PAR</button>
				<select class="custom-select" id="inputGroupSelect01">
					<option selected>Commercial</option>
					<option value="1">OBRY W.</option>
					<option value="2">BLANC P.</option>
					<option value="3">GUERRA C.</option>
					<option value="4">DECHAPPE P.</option>
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
				<ul id="list-DSO">
					@if (!Auth::guest() && Auth::user()->adv)
						@foreach ($dsovalide as $dso)
							<li>
								<div class="card">
									<h5 class="card-header text-center">DSO n°{{$dso->id}}</h5>
									<div class="card-body">
										<h5 class="card-title">
											@foreach ($users as $user)
												@if( $dso->id_user === $user->id)
													<p>Nom du COM : {{ $user->name }}</p>
													<p>Autres infos à venir </p>
												@endif
											@endforeach
										</h5>
										<a href="{{ route('dso-edit', ['idDso' => $dso->id]) }}" class="btn btn-outline-primary vert">Acceder au DSO</a>
									</div>
								</div>
							</li>
						@endforeach
					@endif
				</ul>
			</div>
		</div>
	</div>
</section>
@endsection