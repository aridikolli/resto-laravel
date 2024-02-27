@extends('layout')

@section('content')
    <form action="/edit/{id}" method="POST">
        @csrf
        <h2> Update this Restaurant</h2>

        <div class="form-group">
            <label for="exampleInputName">Restaurant Name</label>
            <input type="text"  style="visibility: hidden" value="{{$restaurant->id}}" name="id">
            <input  class="form-control" name="name" aria-describedby="emailHelp" value="{{$restaurant->name}}">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" value="{{$restaurant->email}}">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
            <label for="exampleInputName">Restaurant Address </label>
            <input  class="form-control" name="address" aria-describedby="emailHelp" value="{{$restaurant->address}}">
        </div>


        <button type="submit" class="btn btn-primary">Save changes</button>
    </form>


@stop
