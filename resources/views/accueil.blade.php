@extends('layouts.app')

@section('title', 'Accueil')

@section('sidebar')
@parent
@endsection

@section('content')
<section id="p-accueil">
	<div id="btn-accueil">
		<a href="{{ route('dso-create') }}" class="btn btn-outline-primary jaune" role="button">Nouveau DSO</a>
		<button type="submit" class="btn btn-outline-primary rouge">Archives DSO</button>
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
						<a href="/{{$dso->id_user}}/edit/{{$dso->id}}" class="btn btn-outline-primary vert">Acceder au DSO</a>
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
						<a href="/{{$dso->id_user}}/edit/{{$dso->id}}" class="btn btn-outline-primary vert">Acceder au DSO</a>
					</div>
				</div>
			</li>
			@endforeach
			@endif
		</ul>
	</div>    

</section>
@endsection