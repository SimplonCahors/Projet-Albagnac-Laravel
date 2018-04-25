@extends('layouts.app')

@section('title', 'Emballages')

@section('sidebar')
@parent
@endsection

@section('content')
<section id="emballages">    
	<ul>
		<a href="/dso/{{ $idDso }}/emballages/create/">Ajouter un emballage</a>
		@foreach($emballages as $emballage)
		<li>{{ $emballage->ref_int }}</li>
		<a href="/dso/{{ $idDso }}/emballages/{{ $emballage->id }}/edit">edit du n°{{ $emballage->id }}</a>
		<a href="/dso/{{ $idDso }}/emballages/{{ $emballage->id }}/destroy">delete du n°{{ $emballage->id }}</a>
		@endforeach
	</ul>



</section>
@endsection