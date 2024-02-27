@extends('layout')

@section('content')
    <h1> User Log In</h1>


    @if(Session()->get('status'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{Session::get('status')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>


    @endif

    <form action="/login" method="POST">
        @csrf


        <div class="form-group">
            <label for="exampleInputEmail1">User Email </label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter user email">
        </div>

        <div class="form-group">
            <label for="exampleInputName">Password </label>
            <input  class="form-control" type="password" name="password" >
        </div>



        <button type="submit" class="btn btn-primary">Login</button>
    </form>


@stop
