@extends('layouts.master')

@section('tab-title')
	<title>Test Form</title>

@section('content')
	<div class='container main-container'>
		@if ($edit)
    		{{ Form::open(array('action' => array('PostsController@update', $post->id), 'class' => 'form-horizontal', 'method' => 'put')) }}
    	@else
    		{{ Form::open(array('action' => 'PostsController@store', 'class' => 'form-horizontal')) }}
    	@endif

    	@if (Session::has('successMessage'))
		    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
		@endif
		@if (Session::has('errorMessage'))
		    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
		@endif

    	<div class='form-group'>
    		{{ $errors->has('title') ? $errors->first('title', '<p><span class="help-block">:message</span></p>') : '' }}
	    	{{ Form::label('title', 'Title', array('class' => 'col-sm-2 control-label')) }}
	    	<div class='col-sm-10'>
	    		@if ($edit)
					{{ Form::text('title', $post->title, array('class' => 'form-control', 'placeholder' => 'Title')) }}
				@else
					{{ Form::text('title', null, array('class' => 'form-control', 'placeholder' => 'Title')) }}
				@endif
			</div>
		</div>
		<div class='form-group'>
			{{ $errors->has('body') ? $errors->first('body', '<p><span class="help-block">:message</span></p>') : '' }}
			{{ Form::label('body', 'Body', array('class' => 'col-sm-2 control-label')) }}
			<div class='col-sm-10'>
				@if ($edit)
					{{ Form::textarea('body', $post->body, array('class' => 'form-control', 'placeholder' => 'Body')) }}
				@else
					{{ Form::textarea('body', null, array('class' => 'form-control', 'placeholder' => 'Body')) }}
				@endif
			</div>
		</div>
		<div class='col-sm-10'>
			{{ Form::submit('Save Post', array('class' => 'btn btn-default')); }}
		</div>
		{{ Form::close() }}
    </div>
    {{ Session::forget('successMessage'); }}
    {{ Session::forget('errorMessage'); }}

@stop