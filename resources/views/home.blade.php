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
    Profile :
    <ul>
        <li>Name: {{ $user['name'] }}</li>
        <li>Email: {{ $user['email'] }}</li>
        @if ($user['role'] == 'admin')
        <li>Role: Administrator</li>
        @elseif ($user['role'] == 'user')
        <li>Role: User</li>
        @else
        <li>Role: Unknown</li>
        @endif
    </ul>
</body>
</html>