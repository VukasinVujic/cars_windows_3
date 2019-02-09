<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <ul>
        @foreach ($cars as $car)

        <li> <a href="{{ 'http://localhost/VIVIFY/napredni/Laravel/zadatak%20cars/cars_windows_3/public/cars/' . $car->id }}"> {{$car->title }} </a> </li>
       
        {{-- <li> <a href="{{ 'carsFolder/' .  $car->id }}"> {{$car->title }}</a></li> --}}
        @endforeach

    </ul>

    
</body>
</html>