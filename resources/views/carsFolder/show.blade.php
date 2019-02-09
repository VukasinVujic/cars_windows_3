@extends('layouts.master')

@section('title')

Selected car

@endsection 


@section('content')
        
    <h1>{{ $car->title }}</h1>
    <p>{{ $car->producer }}</p>

    @endsection


