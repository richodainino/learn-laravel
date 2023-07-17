<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
</head>
<body>
    <h1>Article page</h1>
    <a href="/articles/create">Create new article</a>
    <ul>
        @if ($articles->isEmpty())
            <p>No articles yet!</p>
        @endif
        @foreach ($articles as $article)
            <div>
                <li class="article-item" id="{{ $article['id'] }}"> {{ $article['name'] }} </li>
            </div>
        @endforeach
    </ul>
</body>
</html>