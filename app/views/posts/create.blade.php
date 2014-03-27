@extends('layouts.master')

@section('tab-title')
	<title>Test Form</title>

@section('content')
    <div class='container main-container'>
    	<form method='POST' action='{{{ action('PostsController@store') }}}' class='form-horizontal'>
    		<div class='form-group'>
    			{{ $errors->has('title') ? $errors->first('title', '<p><span class="help-block">:message</span></p>') : '' }}
		        <label class="col-sm-2 control-label" for="title">* Title: </label>
		        <div class="col-sm-10">
		        	<input class="form-control" id="title" name="title" type="text" autofocus = "autofocus" placeholder="Title" value="{{{ Input::old('title') }}}">
		    	</div>
		    </div>

		    <div class='form-group'>
		    	{{ $errors->has('body') ? $errors->first('body', '<p><span class="help-block">:message</span></p>') : '' }}
		        <label class="col-sm-2 control-label" for="body">* Body: </label>
		        <div class="col-sm-10">
		        	<textarea class="form-control" id="body" name="body" type="text" placeholder="Body">{{{ Input::old('body') }}}</textarea>
		    	</div>
		    </div>

		    <div class="col-sm-10">
	        	<button class="btn btn-default" type="submit">Add</button>
	    	</div>
    	</form>
    </div>

@stop