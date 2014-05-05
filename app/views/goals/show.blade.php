@extends('layouts.master')

@section('content')

    <h1>{{$goal->goal_title}}</h1>
    <p>{{$goal->goal_description}}</p>
    <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="{{$goalCurrent}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$goalCurrent}}%;">
            {{ number_format($goalCurrent, 0) }}%
        </div>
        </div>
    <p>
@stop