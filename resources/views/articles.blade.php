<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Articles</title> 
</head>
<body>
	@foreach ($articles as $article)
		<h1>{{ $article->title }} <small>Posted by {{ $article->user->name }}</small></h1> 

		<p>{{ $article->body }}</p>
	@endforeach
</body>
</html>