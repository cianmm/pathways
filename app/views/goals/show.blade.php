@extends('layouts.master')

@section('content')

    <h1>{{$goal->goal_title}}</h1>
    
    <p>{{$goal->goal_description}}</p>
    
    <div class="progress">
    
        <div class="progress-bar {{$goal->currentClass}}" role="progressbar" aria-valuenow="{{$goal->current}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$goal->current}}%;">
            @if ($goal->current > 0 )        
                {{ number_format($goal->current, 0) }}%
            @endif
            
        </div>
        
        </div>

    <p>

@stop