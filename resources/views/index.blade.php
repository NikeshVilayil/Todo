@extends('layout.default')



@section('content')
	
	

	<div id="loginModal" class="modal show">
  <div class="modal-dialog">
	  <div class="modal-content">
	      <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	          <h1 class="text-center">Login</h1>
	      </div>
	      <div class="modal-body">
	      	{!! Form::open(array('class' => 'form col-md-12 center-block')) !!}
	            <div class="form-group">
	              {!! Form::text('username','E mail', array('class' => 'form-control input-lg')) !!}
	            </div>
	            <div class="form-group">
	              	{!! Form::password('password', array('class' => 'form-control input-lg')) !!}
	            </div>
	            <div class="form-group">
	              
	              {!! Form::submit('sign In', array('class' => 'btn btn-primary btn-lg btn-block')); !!}

	              <span class="pull-right"><a href="/signup">Sign up</a></span>
	            </div>
	          {!! Form::close() !!}
	      </div>
	      <div class="modal-footer">
	          	
	      </div>
	  </div>
  </div>
</div>
@stop
