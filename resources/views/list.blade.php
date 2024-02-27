@extends('layout')

@section('content')
    <h1> Restorant list page is here </h1>

    @if(Session::get('status'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{Session::get('status')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    @endif



    <h1 style="visibility: hidden">  {{$number=1}}</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th>Operation</th>
        </tr>
        </thead>
        <tbody>
        @foreach($restaurants as $item)

            <tr>
                <td>{{$item->id}}</td>
                <td>    {{$item->name}}</td>
                <td>   {{$item->email}}</td>
                <td>    {{$item->address}}</td>
                <td>
                    <a href="/edit/{{$item->id}}">  <i class="fa fa-trash" >Edit     </i> </a> <br>
                    <a href="/delete/{{$item->id}}" >  <i class="fa fa-trash" >  Delete </i> </a>

                </td>
            </tr>


        @endforeach

        </tbody>
    </table>
@stop
