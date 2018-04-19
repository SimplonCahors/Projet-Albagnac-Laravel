@extends('layouts.app')

@section('title', 'Etiquettes')

@section('sidebar')
@parent    
@endsection

@section('content')
<section id="etiquettes">
	<form>
		<div class="form-group row">
			<div class="col-6">
				<input type="text" class="form-control" id="ref-etiquette" name="ref-etiquette">
			</div>
			<label for="ref-etiquette" class="col-6 col-form-label">Réf. Étiquette</label>
		</div>
		<div class="card-header text-center">
			DIMENSIONS
		</div>
		<div class="form-group row">
			<div class="col-6">
				<input type="number" class="form-control" id="ref-etiquette" name="ref-etiquette">
			</div>
			<label for="ref-etiquette" class="col-6 col-form-label">Hauteur en mm</label>
		</div>
		<div class="form-group row">
			<div class="col-6">
				<input type="number" class="form-control" id="ref-etiquette" name="ref-etiquette">
			</div>
			<label for="ref-etiquette" class="col-6 col-form-label">Largeur en mm </label>
		</div>
		<div class="form-group row">
			<div class="col-6">
				<input type="number" class="form-control" id="ref-etiquette" name="ref-etiquette">
			</div>
			<label for="ref-etiquette" class="col-6 col-form-label">Diamètre en mm</label>
		</div>
		<div class="form-group">
			<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Observations"></textarea>
		</div>
	</form>
	
</section>
@endsection