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
		<li>{{ $emballage->ref_int }}</li><a href="/dso/{{ $idDso }}/emballages/{{ $emballage->id }}/edit" id="{{ $emballage->id }}">edit du n°{{ $emballage->id }}</a>
		@endforeach
	</ul>


</section>
@endsection