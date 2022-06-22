<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Laravel Intro</title>
</head>
<body>



    <h1>Ciao {{ $user }}</h1>

    <ul>
        @foreach ($colors as $color )

            @if($loop->first)
                <li class="yellow">Il primo colore: {{ $color }}</li>
            @elseif ($loop->last)
                <li class="green">L'ultimo colore: {{ $color }}</li>
            @elseif ($color == 'blu')
                <li class="blue">{{ $color }}</li>
            @else
                <li >{{ $color }}</li>
            @endif

        @endforeach
    </ul>

</body>
</html>
