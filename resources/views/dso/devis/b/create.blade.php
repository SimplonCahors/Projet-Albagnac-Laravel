@extends('layouts.app')

@section('title', 'Information Commerciales')

@section('content')
<section id="nouveau_dso">
	<form method="POST" action="#">
		@csrf
		/* |------ | Section b-1 |------ */

		<div class="div_info">
			<div id="left">
				<div class="nouveau-dso form-group">
					<label>Besoin :</label>
					<input type="text" class="form-control">

					<div class="Class__Select__Div">
						<!--  <button id="___">TexteARemplir</button> -->
						<select class="Class__Select" id="__OO__" name="__OO__">
							<option selected>Choisir</option>
							<option value="1">Value1</option>
							<option value="1">Value2</option>
							<option value="2">Value3</option>
							<option value="3">Value4</option>
						</select>
					</div>

					<label for="exampleInputEmail1">Remarques :</label>
					<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
				</div>
				<div class="nouveau-dso form-group">
					<label for="exampleInputPassword1">Fournisseur(s) actuel()s:</label>
					<input type="text" class="form-control" id="exampleInputPassword1">
				</div>
				<div class="nouveau-dso form-group">
					<label for="exampleInputEmail1">Concurrent sur cette opportunité</label>
					<input type="text" placeholder="nom :" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					<input type="text" placeholder="type :" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					<input type="text" placeholder="remarques :" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				</div>

				/* |------ | Section b-2 |------ */

				

				<div id="right">
					<div class="nouveau-dso form-group">
						<label for="exampleInputEmail1">Nombre et type potentiel de machines :</label>
						<textarea type="text" class="form-control" id="exampleInputPassword1" required></textarea>
					</div>
					<div class="nouveau-dso form-group">
						<label for="exampleInputPassword1">Site de production :</label>
						<textarea type="text" class="form-control" id="exampleInputPassword1" required></textarea>
					</div>
					<div class="nouveau-dso form-group">
						<label for="exampleInputPassword1">Implantation des sites en cas de groupe industriel :</label>
						<textarea type="text" class="form-control" id="exampleInputPassword1" required></textarea>
					</div>
					<div class="nouveau-dso form-group">
						<label for="exampleInputPassword1">Environnement concurrentiel lié à la demande de devis</label>
						<textarea type="text" class="form-control" id="exampleInputPassword1" required></textarea>
					</div>

					
					<button type="button" class="btn btn-warning" type="submit">Suivant ></button>
				</div>
			</div>
		</form>
	</section>
	@endsection
