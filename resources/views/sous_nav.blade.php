	<section id="sous_nav">
		<nav id="sous_nav_nav">
			<a href="{!! route('devis-a-edit', ['idDso' => $idDso]) !!}">Devis</a>
			<a href="{!! route('etiquette-index', ['idDso' => $idDso]) !!}">Étiquettes</a>
			<a href="{!! route('emballage-index', ['idDso' => $idDso]) !!}">Emballages</a>
			<a href="#">Combinaison</a>
			|
			<form method="POST" action="{{ action('DsorootController@dsoTermine') }}">
				<button class="btn btn-primary  btn-sm  btn-danger" type="submit">DSO marqué comme terminé</button>
			</form>
		</nav>
	</section>

