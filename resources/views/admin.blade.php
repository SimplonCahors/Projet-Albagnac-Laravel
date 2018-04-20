<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ADMIN</title>
</head>
<body>
	@foreach ($users as $user)
	<p>{{ $user->name }}</p>
	<a href="{{ $user->id }}/delete"><button>DELETE</button></a>
	@endforeach
</body>
</html>