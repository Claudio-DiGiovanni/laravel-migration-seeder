<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>homepage</h1>
    <ul>
        @foreach ($trains as $train)
            <li>{{$train->azienda}}
            <ul>
                <li>{{$train->stazione_partenza}}</li>
                <li>{{$train->stazione_arrivo}}</li>
                <li>{{$train->partenza}}</li>
                <li>{{$train->arrivo}}</li>
                <li>{{$train->codice_treno}}</li>
                <li>{{$train->n_carrozze}}</li>
            </ul></li>
        @endforeach
    </ul>
</body>
</html>
