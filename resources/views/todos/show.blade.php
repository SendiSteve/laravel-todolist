@extends('layouts.app')

@section('content')
    <a class="btn btn-danger btn-sm" href="/">Go Back</a> 

    <h4>{{$todo->text}}</h4>

    <span class="label label-warning">{{$todo->due}}</span>
    <hr>
    <p class="lead">{{$todo->body}}</p>
@endsection