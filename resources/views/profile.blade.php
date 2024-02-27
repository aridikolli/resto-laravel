@extends('layout')

@section('content')
    <h1> Profile Page is here </h1>
@stop
<h1> Welcome back {{session()->get('user')}}</h1>
<a href="logout"> Log out </a>
