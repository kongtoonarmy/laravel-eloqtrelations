<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Profile of user</title>
</head>
<body>
	<h1>{{ $user->name }}'s Profile</h1>

	<p>
		<strong>Address: </strong> {{ $user->address->country }} <br>
		<strong>Country: </strong> {{ $user->country->name }}
	</p>

	<p>
		<strong>Roles: </strong> 
		<ul>
		@foreach ($user->roles as $role)
			<li>{{ $role->name }}</li>
		@endforeach 
		</ul>
	</p>

	<hr>
	@foreach ($user->articles as $article)
		<h3>{{ $article->title }}</h3>
		<p>{{ $article->body }}</p>
	@endforeach 
</body>
</html> 