@extends('layouts.main-layout')
@section('content')

<div class="cont">
    <h3 class="ml-5 display-3">New item form</h3>
    <br>
    <form class="ml-5 w-25" action="{{ route('store-drink')}}" method="POST">
        @csrf
        @method('POST')
        <div class="w-60 form-group">
          <label for="name">Drink name</label>
          <input name="name" type="text" class="form-control" placeholder="Enter item name">
        </div>
        <div class="form-group">
          <label for="gradazione">Gradazione</label>
          <input name="gradazione" type="text" class="form-control" placeholder="Enter item gradazione">
        </div>
        <div class="form-group">
            <label for="prezzo">Prezzo</label>
            <input name="prezzo" type="text" class="form-control" placeholder="Enter item price">
        </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
   </form>
    
</div>

@endsection