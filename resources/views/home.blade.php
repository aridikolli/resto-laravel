@extends('layout')

@section('content')
    <h1> Home Page is here </h1>
@stop
@if(Session::get('status'))

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{Session::get('status')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

@endif
