@extends('layouts.main-layout')
@section('content')

<div class="cont">
    <h1>All Drinks</h1>
    <ul class="list-group">
        @foreach ($drinks as $drink)
        <li class="color-list list-group-item d-flex justify-content-between align-items-center">
            <a class="test" href="{{ route('show-drink', $drink -> id)}}">{{ $drink -> name }}</a>
            <div>  
              <a href="{{route('edit-drink', $drink -> id)}}" class="btn badge badge-primary">Edit</a>
              <a href="" class="btn badge badge-primary">Delete</a>
           </div>
        </li>
        @endforeach
    </ul>
    <br>
    <a class="btn btn-lg btn-success" href="{{ route('create-drink')}}">Add a new drink</a>

</div>

@endsection