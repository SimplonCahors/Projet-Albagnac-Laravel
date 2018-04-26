	<section id="sous_nav">
		<nav id="sous_nav_nav">
			<a href="{!! route('devis-a-edit', ['idDso' => $idDso]) !!}">Devis</a>
			<a href="{!! route('etiquette-index', ['idDso' => $idDso]) !!}">Étiquettes</a>
			<a href="{!! route('emballage-index', ['idDso' => $idDso]) !!}">Emballages</a>
			<a href="#">Combinaison</a>
			|
			<a href="{!! route('accueil', ['idDso' => $idDso]) !!}"><button class="btn btn-primary  btn-sm  btn-danger" type="submit">DSO Terminé</button></a>
			<a href="{!! route('accueil', ['idDso' => $idDso]) !!}"><button class="btn btn-primary  btn-sm  btn-success" type="submit">DSO Validé</button></a>
		</nav>
	</section>

