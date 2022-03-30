<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List News</title>
</head>
<body>
    @foreach($list_news_paginate as $news)
        <h1>
            {{ $news->title }}
        </h1>
        <p>
            {{ $news->text }}
        </p>
        <h5>
            {{ $news->published_at }}
        </h5>
    @endforeach

    <h3>{{ $list_news_paginate->links('pagination::semantic-ui') }}</h3>
</body>
</html>
