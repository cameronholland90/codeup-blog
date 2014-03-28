@extends('layouts.master')

@section('tab-title')
	<title>show.blade.php</title>

@section('content')
    <div class='container main-container'>
    	<h1>Specific Post</h1>
    	@if (Session::has('successMessage'))
		    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
		@endif
		@if (Session::has('errorMessage'))
		    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
		@endif
    	<h3>{{{ $post->title }}}<br><small>Posted on {{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A'); }}</small></h3>
    	<p> {{{ $post->body }}} </p>

    	<a href="#" id='btnDeletePost'>Delete</a> | <a href="{{{ action('PostsController@edit', $post->id) }}}">Edit</a><br>
    	<a href="{{{ action('PostsController@index') }}}">Back to all Posts</a>

    	{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'delete', 'id' => 'formDeletePost')) }}
    	{{ Form::close() }}
    	{{ Session::forget('successMessage'); }}
    	{{ Session::forget('errorMessage'); }}
    </div>

@section('bottom-script')
	<script>
		$('#btnDeletePost').on('click', function(e) {
			e.preventDefault();
			if (confirm('Are you sure you want to delete this post?')) {
				$('#formDeletePost').submit();
			};
		});
	</script>

@stop