@extends('layouts.master')

@section('content')

    <h1>All goals</h1>
    
    <ol>
    
        @foreach ($goals as $goal)
            <li> {{ link_to("goals/$goal->id", $goal->goal_title) }} </li>
        @endforeach
    
    </ol>
    
@stop