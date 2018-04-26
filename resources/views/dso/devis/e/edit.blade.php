@extends('layouts.app')

@section('title', 'Emballages')

@section('sidebar')
@parent
@endsection

@section('content')
<section id="emballages">

	<form action="{{ action('DevisEController@update' , ['idDso'=>$idDso]) }}" method="post">
		<input type="text" name="type_materiel">
		<input type="text" name="marque_materiel">
		<input type="text" name="modele_materiel">
		<input type="text" name="mise_route_materiel">

		<button type="submit"></button>
	</form>
</section>
@endsection