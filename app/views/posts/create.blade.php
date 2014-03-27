@extends('layouts.master')

@section('tab-title')
	<title>Test Form</title>

@section('content')
    <div class='container main-container'>
    	<form method='POST' action='{{{ action('PostsController@store') }}}' class='form-horizontal'>
    		<div class='form-group'>
		        <label class="col-sm-2 control-label" for="title">* Title: </label>
		        <div class="col-sm-10">
		        	<input class="form-control" id="title" name="title" type="text" autofocus = "autofocus" placeholder="Title" value="{{{ Input::old('title') }}}">
		    	</div>
		    </div>

		    <div class='form-group'>
		        <label class="col-sm-2 control-label" for="body">* Body: </label>
		        <div class="col-sm-10">
		        	<textarea class="form-control" id="body" name="body" type="text" autofocus = "autofocus" placeholder="Body" value="{{{ Input::old('body') }}}"></textarea>
		    	</div>
		    </div>
    	</form>
    </div>

@stop