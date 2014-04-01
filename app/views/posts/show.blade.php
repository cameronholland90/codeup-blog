@extends('layouts.master')

@section('tab-title')
	<title>show.blade.php</title>

@stop

@section('content')
    	<h1>Specific Post</h1>
    	@if (Session::has('successMessage'))
		    <div class="alert alert-success dif-col">{{{ Session::get('successMessage') }}}</div>
		@endif
		@if (Session::has('errorMessage'))
		    <div class="alert alert-danger dif-col">{{{ Session::get('errorMessage') }}}</div>
		@endif
    	<h3>{{{ $post->title }}}<br><small>Posted on {{ $post->created_at->format('l, F jS Y @ h:i A'); }}</small></h3>
    	<p> {{{ $post->body }}} </p>

    	<a href="#" id='btnDeletePost'>Delete</a> | <a href="{{{ action('PostsController@edit', $post->id) }}}">Edit</a><br>
    	<a href="{{{ action('PostsController@index') }}}">Back to all Posts</a>

    	{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'delete', 'id' => 'formDeletePost')) }}
    	{{ Form::close() }}

@stop

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