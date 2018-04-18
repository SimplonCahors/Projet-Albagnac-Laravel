<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>admin</title>
</head>
<body>
	@foreach ($users as $user)
	<p>{{ $user->name }}</p>
	@endforeach
</body>
</html>