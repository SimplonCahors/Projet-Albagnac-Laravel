@extends('layouts.app')

@section('title', 'Materiels imposés, Impression')

@section('content')
<section id="nouveau_dso">
	<form method="POST" action="#">
		@csrf
		<table class="table table-bordered">
			<thead>
				<tr>
					<th scope="col"></th>
					<th scope="col">Type</th>
					<th scope="col">Marque</th>
					<th scope="col">Modele / Informations</th>
					<th scope="col">Mise en route</th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<th scope="row">Matériel imposé par le client</th>
					<td><input type="" name=""></td>
					<td><input type="" name=""></td>
					<td><input type="" name=""></td>
					<td><input type="" name=""></td>
				</tr>
				<tr>
					<th scope="row">Matériel imposé par le client</th>
					<td><input type="" name=""></td>
					<td><input type="" name=""></td>
					<td><input type="" name=""></td>
					<td><input type="" name=""></td>	
				</tr>
				<tr>
					<th scope="row">Matériel imposé par le client</th>
					<td><input type="" name=""></td>
					<td><input type="" name=""></td>
					<td><input type="" name=""></td>
					<td><input type="" name=""></td>
				</tr>
				<tr>
					<th scope="row">Matériel imposé par le client</th>
					<td><input type="" name=""></td>
					<td><input type="" name=""></td>
					<td><input type="" name=""></td>
					<td><input type="" name=""></td>
				</tr>
			</tbody>
		</table>

		<h2>IMPRESSION</h2>

		<table class="table table-bordered">
			<thead class="thead-dark">
				<tr>

					<th scope="col">référence étiquette</th>
					<th scope="col">Positionde l'étiquette<br /> à imprimer sur l'emballage</th>
					<th scope="col">Définition de<br /> la zone d'impression</th>
					<th scope="col">Remarques</th>
				</tr>
			</thead>
			<tbody>

				<tr>

					<td>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">ETI n°	</span>
							</div>
							<input type="text" class="form-control"  aria-describedby="basic-addon1">
						</div>
					</td>
					<td>
						<div class="input-group mb-3">
							<input type="text" class="form-control"  aria-describedby="basic-addon1">
						</div>
					</td>
					<td>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">Dimension(mm x mm)</span>
							</div>
							<input type="text" class="form-control" aria-describedby="basic-addon1">
						</div>
					</td>
					<td>
						<div class="input-group">
							<textarea class="form-control"></textarea>
						</div>
					</td>
				</tr>


				<tr>
					<td>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">ETI n°</span>
							</div>
							<input type="text" class="form-control" aria-describedby="basic-addon1">
						</div>
					</td>
					<td><div class="input-group mb-3">
						<input type="text" class="form-control"  aria-describedby="basic-addon1"></td>
						<td>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Dimension(mm x mm)</span>
								</div>
								<input type="text" class="form-control"  aria-describedby="basic-addon1">
							</div>
						</td>
						<td>
							<div class="input-group">
								<textarea class="form-control"></textarea>
							</div></td>	
						</tr>
						<tr>

							<td><div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">ETI n°</span>
								</div>
								<input type="text" class="form-control"  aria-describedby="basic-addon1">
							</div></td>
							<td><div class="input-group mb-3">
								<input type="text" class="form-control"  aria-describedby="basic-addon1"></td>
								<td>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">Dimension(mm x mm)</span>
										</div>
										<input type="text" class="form-control"  aria-describedby="basic-addon1">
									</div>
								</td>
								<td>
									<div class="input-group">
										<textarea class="form-control"></textarea>
									</div></td>
								</tr>


							</tbody>
						</table>

						<table class="table table-bordered">
			<thead class="thead-dark">
				<tr>

					<th scope="col">Référence emballage</th>
					<th scope="col">Position à imprimer sur l'emballage</th>
					<th scope="col">Définition de<br /> la zone d'impression</th>
					<th scope="col">Remarques</th>
				</tr>
			</thead>
			<tbody>

				<tr>

					<td>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">ETI n°	</span>
							</div>
							<input type="text" class="form-control"  aria-describedby="basic-addon1">
						</div>
					</td>
					<td>
						<div class="input-group mb-3">
							<input type="text" class="form-control"  aria-describedby="basic-addon1">
						</div>
					</td>
					<td>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">Dimension(mm x mm)</span>
							</div>
							<input type="text" class="form-control" aria-describedby="basic-addon1">
						</div>
					</td>
					<td>
						<div class="input-group">
							<textarea class="form-control"></textarea>
						</div>
					</td>
				</tr>


				<tr>
					<td>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">ETI n°</span>
							</div>
							<input type="text" class="form-control" aria-describedby="basic-addon1">
						</div>
					</td>
					<td><div class="input-group mb-3">
						<input type="text" class="form-control"  aria-describedby="basic-addon1"></td>
						<td>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Dimension(mm x mm)</span>
								</div>
								<input type="text" class="form-control"  aria-describedby="basic-addon1">
							</div>
						</td>
						<td>
							<div class="input-group">
								<textarea class="form-control"></textarea>
							</div></td>	
						</tr>
						<tr>

							<td><div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">ETI n°</span>
								</div>
								<input type="text" class="form-control"  aria-describedby="basic-addon1">
							</div></td>
							<td><div class="input-group mb-3">
								<input type="text" class="form-control"  aria-describedby="basic-addon1"></td>
								<td>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">Dimension(mm x mm)</span>
										</div>
										<input type="text" class="form-control"  aria-describedby="basic-addon1">
									</div>
								</td>
								<td>
									<div class="input-group">
										<textarea class="form-control"></textarea>
									</div></td>
								</tr>


							</tbody>
						</table>


					</form>
				</section>
				@endsection
