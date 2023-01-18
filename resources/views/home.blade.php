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
                <li>Stazione di partenza: {{$train->stazione_partenza}}</li>
                <li>Stazione di arrivo: {{$train->stazione_arrivo}}</li>
                <li>Orario partenza: {{$train->partenza}}</li>
                <li>Orario arrivo: {{$train->arrivo}}</li>
                <li>Codice del treno: {{$train->codice_treno}}</li>
                <li>Numero carrozze: {{$train->n_carrozze}}</li>
                @if ($train->puntuale === 0)
                    <li style="color: red"><strong>RITARDO</strong></li>
                @endif
                @if ($train->cancellato === 0)
                <li style="color: red"><strong>CANCELLATO</strong></li>
                @endif
            </ul></li>
        @endforeach
    </ul>
</body>
</html>
