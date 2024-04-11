<!DOCTYPE html>
<html>
<head>
    <title>Page d'accueil</title>
    <link rel="stylesheet" href=>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>

    <h1>Posts</h1>
    <div class ='flex flex-col items-center justify-center border'>
        @foreach ($posts as $post)
            <div class='flex'>
                <h1 class="text-3xl font-bold underline">
                    Hello world!
                  </h1>
                <h1>{{ $post->author->name }}</h1>
                
                <img src='{{ $post->url_img }}'/>
                <p>{{ $post->post_content }}</p>
            </div>
        @endforeach
    </div>
</body>
</html>