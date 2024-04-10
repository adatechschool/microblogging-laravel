<!DOCTYPE html>
<html>
<head>
    <title>Page d'accueil</title>
</head>
<body>
    <h1>Posts</h1>
    @foreach ($posts as $post)
        <div>
            <h2>{{ $post->author->name }}</h2>
            
            <img src='{{ $post->url_img }}'/>
            <p>{{ $post->post_content }}</p>
        </div>
    @endforeach
</body>
</html>