@extends('layout')

@section('content')
    <h1> Register a new user</h1>

    @if(Session::get('status'))

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{Session::get('status')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    @endif





    <form action="/register" method="POST">
        @csrf

        <div class="form-group">
            <label for="exampleInputName">User Name</label>
            <input  class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter User Name">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">User Email </label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter user email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
            <label for="exampleInputName">Password </label>
            <input  class="form-control" type="password" name="password" >
        </div>

        <div class="form-group">
            <label for="exampleInputName">Enter Contact Number </label>
            <input  class="form-control" name="number"  type="number" aria-describedby="emailHelp" >
        </div>


        <button type="submit" class="btn btn-primary">Register</button>
    </form>


@stop
