@extends('layouts.master')

@section('tab-title')
	<title>show.blade.php</title>

@section('content')
    <div class='container main-container'>
    	<h1>All Post</h1>
    	@foreach ($posts as $post)
    		<h3>{{{ $post->title }}}</h3>
    		<p> {{{ $post->body }}} </p>
    	@endforeach
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
		        	<textarea class="form-control" id="body" name="body" type="text" autofocus = "autofocus" placeholder="Body">{{{ Input::old('body') }}}</textarea>
		    	</div>
		    </div>

		    <div class="col-sm-10">
	        	<button class="btn btn-default" type="submit">Add</button>
	    	</div>
    	</form>
    </div>

@stop