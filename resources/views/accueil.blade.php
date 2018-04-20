@extends('layouts.app')

@section('title', 'Accueil')

@section('sidebar')
@parent
@endsection

@section('content')
<section id="p-accueil">
	<div id="btn-accueil">
		<button type="submit" class="btn btn-outline-primary jaune">Nouveau DSO</button>
		<button type="submit" class="btn btn-outline-primary rouge">Archivres DSO</button>
	</div>    
	<div id="liste-accueil">
		<h3>DSO en cours :</h3>

		<ul id="list-DSO">
			<li>
				<div class="card">
					<h5 class="card-header text-center">DSO n°XXX</h5>
					<div class="card-body">
						<h5 class="card-title">Infos sur le DSO</h5>
						<a href="#" class="btn btn-outline-primary vert">Acceder au DSO</a>
					</div>
				</div>
			</li>
			<li>
				<div class="card">
					<h5 class="card-header text-center">DSO n°XXX</h5>
					<div class="card-body">
						<h5 class="card-title">Infos sur le DSO</h5>
						<a href="#" class="btn btn-outline-primary vert">Acceder au DSO</a>
					</div>
				</div>
			</li>
			<li>
				<div class="card">
					<h5 class="card-header text-center">DSO n°XXX</h5>
					<div class="card-body">
						<h5 class="card-title">Infos sur le DSO</h5>
						<a href="#" class="btn btn-outline-primary vert">Acceder au DSO</a>
					</div>
				</div>
			</li>
		</ul>
	</div>    
	
</section>
@endsection