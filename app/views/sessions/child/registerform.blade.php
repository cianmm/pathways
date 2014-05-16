{{ Form::open(array("route" => "users.store", "role"=>"form"))}}

    <div class="form-group">
        
        {{ Form::label('first_name', 'First Name:') }}
        
        {{ Form::text('first_name', null, array('class'=>'form-control', 'placeholder'=>'Milo')) }}
        
        {{ $errors->first('first_name')}}
        
    </div>
    
    <div class="form-group">
        
        {{ Form::label('last_name', 'Last Name:') }}
        
        {{ Form::text('last_name', null, array('class'=>'form-control', 'placeholder'=>'Banana')) }}
                   
        {{ $errors->first('last_name') }}
        
    </div>

    <div class="form-group">
    
        {{ Form::label('email', 'Email: ') }}
        
        {{ Form::email('email', null, array('class'=>'email-input form-control', 'placeholder'=>'milo@cs50.tv'))}}
        
        {{ $errors->first('email') }}            
        
    </div>
    
    <div class="form-group">
        {{ Form::label('register-password', 'Password: ') }}
        
        {{ Form::password('register-password', array('class'=>'form-control', 'placeholder'=>'Super Secret Password')) }}
        
        {{ $errors->first('password') }}

    </div>
    
	<div>{{ Form::submit('Register',array('class'=>'btn btn-success')) }}</div>

{{ Form::close()}}
