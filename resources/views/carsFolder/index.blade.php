@extends('layouts.master')

@section('title')

all posts 

@endsection 

@section('content')
        
    
    <ul>
        @foreach ($cars as $car)

        <li> <a href="{{ 'http://localhost/VIVIFY/napredni/Laravel/zadatak%20cars/cars_windows_3/public/cars/' . $car->id }}"> {{$car->title }} </a> </li>
       
        {{-- <li> <a href="{{ 'carsFolder/' .  $car->id }}"> {{$car->title }}</a></li> --}}
        @endforeach

    </ul>

    @endsection 

