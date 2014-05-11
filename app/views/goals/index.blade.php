@extends('layouts.master')

@section('content')
<div class="row">
    <div class="goals-list col-md-8">
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
    </div> <!-- All goals -->
    <div class="add-goal-form col-md-4">
        <h1>Add goal</h1>        
        
        {{Form::open(array('route' => 'goals.store', 'method' => 'post'))}}
            <div class="form-group">
                {{Form::input('text', 'title', null, array('class'=>'form-control', 'placeholder' => 'Goal title'))}}
            </div>    
            <div class="form-group">
                {{Form::input('text', 'goal-description', null, array('class'=>'form-control', 'placeholder' => 'How would you describe the goal?'))}}
            </div>
            <div class="form-group">    
                {{Form::input('text', 'goal-complete', null, array('class'=>'form-control', 'placeholder' => 'What\'s the number to reach?'))}}
            </div>
            <div class="form-group">    
                {{Form::submit('Create goal', array('class'=>'btn btn-default'))}}
            </div>
        {{ Form::close()}}    
    </div> <!-- add goal form -->
</div> <!-- row 1 -->
@stop