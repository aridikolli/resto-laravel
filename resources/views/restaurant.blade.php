@extends('layout')

@section('content')
    <form action="/add" method="POST">
        @csrf
        <h2> Enter a new Restaurant</h2>

        <div class="form-group">
            <label for="exampleInputName">Restaurant Name</label>
            <input  class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter Restaurant Name">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
            <label for="exampleInputName">Restaurant Address </label>
            <input  class="form-control" name="address" aria-describedby="emailHelp" placeholder="Enter Restaurant Address">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


@stop
