

@extends('layouts.app')

@section('content')
    <h1>My Todos</h1>
    
    {{-- check if there are any todos --}}
    @if(count($todos) > 0)

        @foreach($todos as $todo)
            <div class="well">
            <h4><a href="todo/{{$todo->id}}">{{$todo->text}}</a></h4>
            <span class="label label-info">{{$todo->due}}</span>
            </div>
        @endforeach
    @endif
        

@endsection