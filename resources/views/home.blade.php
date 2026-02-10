<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <nav>
        @foreach ($menu as $label => $url)
            <a href="{{ $url }}">{{ $label }}</a> |
        @endforeach
    </nav>
    <h1>Home paged</h1>
    <ul>
        {{-- @for ($index = 0; $index < count($movies); $index++)
<li>{{ $movies[$index]['title'] }} - {{ $movies[$index]['year'] }}</li>
@endfor --}}

        {{-- @foreach ($movies as $movie)
            @if ($movie['year'] < 2000)
                @continue
            @endif

            @if ($movie['year'] > 2010)
                @break
            @endif
            <li>{{ $movie['title'] }} - {{ $movie['year'] }}</li>
        @endforeach --}}

        {{-- @forelse($movies as $movie)
<li>{{ $movie['title'] }} - {{ $movie['year'] }}</li>
@empty
    <li>No Movies found.</li>
@endforelse  --}}

        {{-- @php
            $index = 0;
        @endphp

    @while ($index < count($movies))
<li>{{ $movies[$index]['title'] }} - {{ $movies[$index]['year'] }}</li>
    @php
        $index++;
    @endphp
@endwhile  --}}
    </ul>
    @foreach ($movies as $movie)
        {{-- <p>{{ $loop->iteration }}. {{ $movie['title'] }} - {{ $movie['year'] }}</p> --}}
        {{-- @if ($loop->first)
            <p>First Movie: {{ $movie['title'] }} - {{ $movie['year'] }}</p>
        @elseif($loop->last)
            <p>Last Movie: {{ $movie['title'] }} - {{ $movie['year'] }}</p>
        @else
            <p>{{ $movie['title'] }} - {{ $movie['year'] }}</p>
        @endif --}}
        <p>Movie {{ $loop->remaining +1 }} of {{ $loop->count }} : {{ $movie['title'] }} - {{ $movie['year'] }}</p>
    @endforeach
</body>

</html>
