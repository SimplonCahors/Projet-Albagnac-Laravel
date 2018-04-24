@extends('layouts.app')

@section('title', 'Accueil')

@section('sidebar')
@parent
@endsection

@section('content')
<section id="p-accueil">
	<div id="btn-accueil">
	<a href="/2/nouveau-dso" class="btn btn-outline-primary jaune" role="button">Nouveau DSO</a>
	<button type="submit" class="btn btn-outline-primary rouge">Archives DSO</button>
	</div>    
	<div id="liste-accueil">
		<h3>DSO en cours :</h3>

		<ul id="list-DSO">

			    @foreach ($dsoList as $dso)
					<li>
					<div class="card">
						<h5 class="card-header text-center">DSO n°{{$dso->id}}</h5>
						<div class="card-body">
							<h5 class="card-title">Infos sur le DSO</h5>
							<a href="#" class="btn btn-outline-primary vert">Acceder au DSO</a>
						</div>
					</div>
					</li>
				@endforeach
		</ul>
	</div>    
	
</section>
@endsection