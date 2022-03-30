<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Page</title>
</head>
<body>
    @foreach($list_page_paginate as $page)
        <h1>
            {{ $page->title }}
        </h1>
        <p>
            {{ $page->text }}
        </p>
    @endforeach

    <h3>{{ $list_page_paginate->links('pagination::semantic-ui') }}</h3>
</body>
</html>
