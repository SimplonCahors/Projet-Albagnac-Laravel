	<section id="sous_nav">
		<nav id="sous_nav_nav">
			<a href="{!! route('devis-a-edit', ['idDso' => $idDso]) !!}">Devis</a>
			<a href="{!! route('etiquette-index', ['idDso' => $idDso]) !!}">Étiquettes</a>
			<a href="{!! route('emballage-index', ['idDso' => $idDso]) !!}">Emballages</a>
			<a href="#">Combinaison</a>
		</nav>
		<form method="post" action="{!! route('termine',['idDso' => $idDso]) !!}">
			@csrf
			<button class="btn btn-primary  btn-sm  btn-danger" type="submit">DSO terminé</button>
		</form>
	</section>

