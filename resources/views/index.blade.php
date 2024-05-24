<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    @foreach($movies as $movie)
    <div class="card">
        <img src="{{ $movie->image }}" alt="{{ $movie->title }}">
        <div class="card-body">
            <h3>{{ $movie->title }}</h3>
            <p>{{ $movie->description }}</p>
            <p>Anno: {{ $movie->year }}</p>
            <p>Genere: {{ $movie->genre }}</p>
        </div>
    </div>
    @endforeach




</body>

</html>