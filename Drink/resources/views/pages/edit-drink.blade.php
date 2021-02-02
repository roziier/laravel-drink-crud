@extends('layouts.main-layout')
@section('content')

<div class="cont">
    <h3 class="ml-5 display-3">Update item form</h3>
    <br>
    <form class="ml-5 w-25" action="{{ route('update-drink' , $drink -> id )}}" method="POST">
        @csrf
        @method('POST')
        <div class="w-60 form-group">
          <label for="name">Drink name</label>
          <input name="name" type="text" class="form-control" value="{{ $drink -> name }}">
        </div>
        <div class="form-group">
          <label for="gradazione">Gradazione</label>
          <input name="gradazione" type="text" class="form-control" value="{{ $drink -> gradazione }}">
        </div>
        <div class="form-group">
            <label for="prezzo">Prezzo</label>
            <input name="prezzo" type="text" class="form-control" value="{{ $drink -> prezzo }}">
        </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
   </form>
    
</div>

@endsection