<!DOCTYPE html>
<html>
<head>
    <title>Page d'accueil</title>
</head>
<body>
    <h1>Posts</h1>
    @foreach ($posts as $post)
        <div>
            <h2>{{ $post->author_id }}</h2>
            <p>{{ $post->post_content }}</p>
        </div>
    @endforeach
</body>
</html>