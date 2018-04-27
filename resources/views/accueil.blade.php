@extends('layouts.app')

@section('title', 'Accueil')

@section('sidebar')
	@parent
@endsection

@section('content')
	<section id="p-accueil">

		<div id="btn-accueil">
			<a href="{{ route('dso-create') }}" role="button" class="btn btn-outline-primary jaune">Nouveau DSO</a>
			<a href="{{ route('archives') }}" role="button" class="btn btn-outline-primary rouge">Archives DSO</a>
		</div>

		<div id="liste-accueil">

			@if (!Auth::guest() && Auth::user()->adv)

				<h3>DSO à valider :</h3>
				<ul id="list-DSO">

					@foreach ($dsotermine as $dso)
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

									<form method="post" action="{!! route('valide',['idDso' => $dso->id]) !!}">
									@csrf
										<button class="btn btn-primary  btn-sm  btn-danger" type="submit">valider le DSO</button>
									</form>

								</div>
							</div>
						</li>
					@endforeach

				</ul>

			@endif

		</div>


		<div id="liste-accueil">

			<h3>DSO en cours :</h3>
			<ul id="list-DSO">

				@if (!Auth::guest() && Auth::user()->adv)
					
					@foreach ($dsoList as $dso)
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

				@else

					@foreach ($dsocom as $dso)
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
									<a href="{{ route('dso-edit', ['idDso' => $dso->id]) }}" class="btn btn-outline-primary btn-succes">Acceder au DSO</a>
								</div>
							</div>
						</li>
					@endforeach

				@endif

			</ul>
		</div>

	</section>
@endsection