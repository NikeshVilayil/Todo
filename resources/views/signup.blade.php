@extends('layout.default')
@section('script')
	{!! HTML::script('Assets/js/custom.js') !!}
	<script type="text/javascript">
		var regUrl = "{{ action(('Auth\AuthController@signup_newuser')) }}";
		var token = "{{ csrf_token() }}";
	</script>
	 
@stop

@section('content')
	<div class="form-group">
	{!! Form::open(array('id' =>'check')) !!}
		{!! Form::label('email', 'First Name', array('class' => 'col-md-4 control-label')) !!}
		<div class="col-md-4">
			{!! Form::text('fname','', array('class' => 'form-control input-md','id' => 'fname')) !!}
	  	</div><br><br>
	  	{!! Form::label('Last Name', '', array('class' => 'col-md-4 control-label')) !!}
		<div class="col-md-4">
			{!! Form::text('lname','', array('class' => 'form-control input-md', 'id' => 'lname')) !!}
	  	</div><br><br>
	  	{!! Form::label('Address', '', array('class' => 'col-md-4 control-label')) !!}
		<div class="col-md-4">
			{!! Form::textarea('address', '', array('class' => 'form-control', 'id' => 'address')) !!}
			
	  	</div><br><br><br><br><br><br><br><br><br><br><br><br>
	  	{!! Form::label('E mail', '', array('class' => 'col-md-4 control-label')) !!}
		<div class="col-md-4">
			{!! Form::text('email','', array('class' => 'form-control input-md',  'id' => 'email')) !!}
	  	</div><br><br>
	  	{!! Form::label('Password', '', array('class' => 'col-md-4 control-label')) !!}
		<div class="col-md-4">
			{!! Form::password('password', array('class' => 'form-control input-md',  'id' => 'password')) !!}
	  	</div><br><br>
	  	{!! Form::label('confirm Password', '', array('class' => 'col-md-4 control-label')) !!}
		<div class="col-md-4">
			{!! Form::password('password_confirmation', array('class' => 'form-control input-md',  'id' => 'password_confirmation')) !!}
	  	</div><br><br>
	  	<div class="col-md-4">
	  		{!! Form::submit('Submit', array('class' => 'btn btn-primary','id'=>'submit')); !!}
	  	</div>
	  
	</div>



	{!! Form::close() !!}

@stop

