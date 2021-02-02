@extends('layouts.main-layout')
@section('content')

<div class="cont">
    <h1>Drink: {{ $drink -> name}} </h1>
    <h3>Gradazione: {{$drink -> gradazione}}</h3>
    <h3>Prezzo: {{$drink -> prezzo}}</h3>

    <a class="btn btn-lg btn-success" href="{{ route('index-drink') }}">Go back to all drinks</a>

</div>

@endsection