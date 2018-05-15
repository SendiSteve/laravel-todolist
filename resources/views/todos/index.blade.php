

@extends('layouts.app')

@section('content')
    <h1>My Todos</h1>
    
    {{-- check if there are any todos --}}
    @if(count($todos) > 0)

        @foreach($todos as $todo)
            <div class="well">
            <h4>{{$todo->text}} <span class="label label-primary">{{$todo->due}}</span></h4>
            </div>
        @endforeach
    @endif
        

@endsection