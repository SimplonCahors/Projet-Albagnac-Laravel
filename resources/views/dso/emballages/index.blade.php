@extends('layouts.app')

@section('title', 'Étiquettes')

@section('sidebar')
@parent    
@endsection

@section('content')
<section id="liste_emballages">
	<div class="liste_emball">
		<ul>
			<li>
				<div class="card">
					<h5 class="card-header text-center">Emballage n°XXX</h5>
					<div class="card-body">
						<h5 class="card-title">Infos sur l'emballage</h5>
						<div class="icons">
							<a><i class="medium material-icons">create</i></a>
							<a><i class="medium material-icons">delete</i></a>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="card">
					<h5 class="card-header text-center">Emballage n°XXX</h5>
					<div class="card-body">
						<h5 class="card-title">Infos sur l'emballage</h5>
						<div class="icons">
							<a><i class="medium material-icons">create</i></a>
							<a><i class="medium material-icons">delete</i></a>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="card">
					<h5 class="card-header text-center">Emballage n°XXX</h5>
					<div class="card-body">
						<h5 class="card-title">Infos sur l'emballage</h5>
						<div class="icons">
							<a><i class="medium material-icons">create</i></a>
							<a><i class="medium material-icons">delete</i></a>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="emball_buttons">
			<a role="button" class="btn btn-primary">Ajouter un emballage</a>
			<a role="button" class="btn btn-primary">Suivant ></a>
		</div>
	</div>
</section>
@endsection