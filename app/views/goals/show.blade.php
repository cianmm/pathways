@extends('layouts.master')

@section('content')

    <h1>{{$goal->goal_title}}</h1>
    <p>{{$goal->goal_description}}</p>
@stop