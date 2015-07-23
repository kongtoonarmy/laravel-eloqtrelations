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
	<h2>Article</h2>
	@foreach ($user->articles as $article)
		<h3>{{ $article->title }}</h3>
		<p>{{ $article->body }}</p>
	@endforeach 

	<hr>
	<h3>Comment</h3>
	@foreach ($user->comments as $comment)
		<p>{{ $comment->body }}</p>
	@endforeach 
</body>
</html> 