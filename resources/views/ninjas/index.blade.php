<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Network | Home</title>
</head>

<body>
    <h2>Currently availale ninjas</h2>
    {{-- IF condition
    @if(1)
    <p>Hi from inside the if</p>
    @endif --}}
    <ul>
        @foreach ($ninjas as $ninja)
            <li>
                <p>
                    {{ $ninja['name'] }}
                </p>
                <a href="/ninjas/{{ $ninja["id"] }}">View Details</a>
            </li>
        @endforeach
    </ul>
</body>

</html>