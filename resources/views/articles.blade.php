<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Articles</title> 
</head>
<body>
	@foreach ($articles as $article)
		<h1>{{ $article->title }} <small style="color:#1D8CAB;">Posted by {{ $article->user->name }}</small></h1> 

		<p>{{ $article->body }}</p>

		
		<h3 style="color:#82B64C;">Comment</h3>
		@foreach ($article->comments as $comment)
			<p>{{ $comment->body }}</p>
		@endforeach 

		<hr>
	@endforeach

</body>
</html>