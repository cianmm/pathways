@extends('layouts.master')

@section('content')

    <h1>All goals</h1>
    
    <ol>
    
        @foreach ($goals as $goal)
            <li> 
                {{ link_to("goals/$goal->id", $goal->goal_title) }}
                
                @if ($goal->goal_value <= 0)
                    <span class="label label-danger">Not Started</span>
                    
                @elseif ($goal->goal_value < $goal->goal_complete)
                    <span class="label label-warning">In Progress</span>
                    
                @elseif ($goal->goal_value >= $goal->goal_complete)
                    <span class="label label-success">Complete</span>
                    
                @endif
            </li>
        @endforeach
    
    </ol>
    
@stop