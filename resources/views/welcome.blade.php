<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Trains</title>
</head>
<body>
    <div class="ticket-box">
        <h1>TRAIN TICKET</h1>
        @foreach ($trains as $elem)
            <h2>Partenza: {{$elem->departure}}</h2>
            <h2>Destinazione: {{$elem->arrival}}</h2>
            <h2>Orario Partenza: {{$elem->departure_time}}</h2>
            <h2>Orario Arrivo: {{$elem->arrival_time}}</h2>
            <h2>Prezzo: {{$elem->ticket_price}}</h2>
        @endforeach
    </div> 
</body>
</html>