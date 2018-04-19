@extends('layouts.app')

@section('title', 'Archives')

@section('sidebar')
@parent

@endsection

@section('content')
<form class="form-inline">
	<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
</form>

<div class="list-group">
	<a href="#" class="list-group-item list-group-item-action active">
		Cras justo odio
	</a>
	<a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
	<a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
	<a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
	<a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
</div>
@endsection