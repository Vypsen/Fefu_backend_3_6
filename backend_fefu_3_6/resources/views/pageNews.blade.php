<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $page_news->title }}</title>
</head>
<body>
    <h1>
        {{ $page_news->title }}
    </h1>
    <p>
        {{ $page_news->text }}
    </p>
    <h5>
        {{ $page_news->published_at }}
    </h5>
</body>
</html>
