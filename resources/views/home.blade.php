<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <nav>
    @foreach($menu as $label => $url)
        <a href="{{ $url }}">{{ $label }}</a> |
    @endforeach
</nav>
    <h1>Home paged</h1>
    <h2>Movie Category</h2>

    @switch($MovieCategory)
        @case('action')
            <h4>Action Movies</h4>
            @break
        @case('comedy')
            <h4>Comedy Movies</h4>
            @break
        @case('romance')
            <h4>Romance Movies</h4>
            @break
        @default
            <h4>Other Movies</h4>
    @endswitch
</body>
</html>