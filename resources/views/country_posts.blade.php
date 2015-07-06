<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Country Posts</title> 
</head>
<body> 
	<h1>Posts made in the {{ $country->name }}</h1> 

	@foreach ($country->articles as $article)
		<h3>{{ $article->title }} <small>Posted by {{ $article->user->name }}</small></h3> 

		<p>{{ $article->body }}</p>
	@endforeach
</body>
</html> 