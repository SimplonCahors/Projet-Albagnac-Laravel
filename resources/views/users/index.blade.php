@extends('layouts.app')

@section('title', 'Gestion des utilisateurs')

@section('content')
@auth
@if (!Auth::guest() && Auth::user()->adv)
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Liste des utilisateurs</div>
				<div class="card-body">
					<table class="table">
						<thead class="thead-light">
							<tr>
								<th scope="col">Nom</th>
								<th scope="col">Email</th>
								<th scope="col">Role</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							@foreach ($users as $user)
							<tr>
								<td>{{ $user->name }}</td>
								<td>{{ $user->email }}</td>
								<td>
									@if(isset( $user->adv ))
									ADV
									@else
									COM
									@endif
								</td>
								<td><a href="{{ $user->id }}/delete" class="btn btn-danger">Supprimer</a></td>
							</tr>
							@endforeach
						</tbody>
					</table>

					<div class="form-group row mb-0">
						<div class="col-md-6 offset-md-4">
							<a href="{{ route('users-create-form') }}" class="btn btn-primary">
								Ajouter un compte COM
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@else
Vous n'êtes pas ADV , page indisponible.
@endif
@else
ERROR
@endauth
@endsection
