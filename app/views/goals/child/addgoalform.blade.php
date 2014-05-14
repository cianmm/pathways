    {{Form::open(array('route' => 'goals.store', 'method' => 'post', 'autocomplete' => 'off', 'class' => 'hi', 'onsubmit' => 'validateAddGoalsForm()'))}}
        <div class="form-group">
            {{ Form::label('goal_title') }}
            {{ Form::input('text', 'goal_title', null, array('class'=>'form-control', 'placeholder' => 'At least 6 characters', 'id' => 'goal_title')) }}
        </div>    
        <div class="form-group">
            {{ Form::label('goal_description') }}
            {{ Form::input('text', 'goal_description', null, array('class'=>'form-control', 'placeholder' => 'How would you describe the goal?', 'id' => 'goal_description')) }}
        </div>
        <div class="form-group"> 
            {{ Form::label('goal_complete', 'Aim') }}           
            {{ Form::input('text', 'goal_complete', null, array('class'=>'form-control', 'placeholder' => 'What\'s the number to reach?', 'id' => 'goal_complete')) }}
        </div>
        <div class="form-group">    
            {{ Form::submit('Create goal', array('class'=>'btn btn-default', 'id'=>'create-goal', 'disabled' => 'disabled')) }}
        </div>
    {{ Form::close()}}    
