@extends("layouts.master")

@section("title", $goal->goal_title)

@section("content")
    <!-- goal information -->
<div class="row">
    <div class="col-md-8">
        <h1>{{$goal->goal_title}}</h1>
    
        <p>{{$goal->goal_description}}</p>
    
        <div class="progress">
    
            <div class="progress-bar {{$goal->currentClass}}" role="progressbar" aria-valuenow="{{$goal->current}}" aria-valuemin="0" aria-valuemax="100" style="width: {{ min($goal->current, 100)}}%;">
                @if ($goal->current > 0 )        
                    {{ number_format($goal->current, 0) }}%
                @endif
                
            </div>
        
        </div>

    {{ Form::open(array("route" => array("goals.destroy", $goal->id), "method" => "delete"))}}
    {{ Form::submit("Delete", array("class"=>"btn btn-danger"))}}
    {{ Form::close()}}
    </div>
    
    <!-- edit goal -->
    <div class="col-md-4 edit-goal-form">
        <h1>Edit Goal</h1>
        {{ Form::model($goal, array("route" => array("goals.update", $goal->id), "method" => "put", "role" => "form")) }}
        <div class="form-group">
            {{ Form::label("goal_title", "Goal Title")}}
            {{ Form::text("goal_title", null, array("class"=>"form-control", "id"=>"goal_title"))}}
        </div>
        <div class="form-group">
            {{ Form::label("goal_description", "Goal Description")}}
            {{ Form::text("goal_description", null, array("class"=>"form-control", "id"=>"goal_description"))}}
        </div>
        <div class="form-group">
            {{ Form::label("goal_value", "How much of this goal have you completed?")}}
            {{ Form::text("goal_value", null, array("class"=>"form-control", "id"=>"goal_value"))}}
        </div>
        <div class="form-group">
            {{ Form::label("goal_complete", "Aim")}}
            {{ Form::text("goal_complete", null, array("class"=>"form-control", "id"=>"goal_complete"))}}
        </div>
        <div class="form-group">
            {{ Form::submit("Edit goal", array("class"=>"btn btn-default"))}}
        </div>
        {{ Form::close()}}
    </div>
</div>
@stop