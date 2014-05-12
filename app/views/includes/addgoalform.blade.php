    {{Form::open(array('route' => 'goals.store', 'method' => 'post', 'autocomplete' => 'off', 'class' => 'hi', 'onsubmit' => 'validateAddGoalsForm()'))}}
        <div class="form-group">
            {{Form::input('text', 'title', null, array('class'=>'form-control', 'placeholder' => 'Goal title', 'id' => 'goal_title'))}}
        </div>    
        <div class="form-group">
            {{Form::input('text', 'goal-description', null, array('class'=>'form-control', 'placeholder' => 'How would you describe the goal?', 'id' => 'goal_description'))}}
        </div>
        <div class="form-group">    
            {{Form::input('text', 'goal-complete', null, array('class'=>'form-control', 'placeholder' => 'What\'s the number to reach?', 'id' => 'goal_complete'))}}
        </div>
        <div class="form-group">    
            {{Form::submit('Create goal', array('class'=>'btn btn-default'))}}
        </div>
    {{ Form::close()}}    
