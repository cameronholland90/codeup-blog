@extends('layouts.master')

@section('tab-title')
	<title>show.blade.php</title>

@section('content')
    <div class='container main-container'>
    	<h1>All Post</h1>
    	@if (Session::has('successMessage'))
		    <div class="alert alert-success dif-col">{{{ Session::get('successMessage') }}}</div>
		@endif
		@if (Session::has('errorMessage'))
		    <div class="alert alert-danger dif-col">{{{ Session::get('errorMessage') }}}</div>
		@endif
    	@foreach ($posts as $post)
    		<h3><a href="{{{ action('PostsController@show', $post->id) }}}">{{{ $post->title }}}</a><br><small>Posted on {{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A'); }}</small></h3>
    		<p> {{{ Str::words($post->body, 10) }}} </p>
    	@endforeach
    	{{ $posts->links() }} <br>
    	<a href="{{{ action('PostsController@create') }}}" class='btn btn-success'>Create New</a>
    	{{ Session::forget('successMessage'); }}
    	{{ Session::forget('errorMessage'); }}
    </div>

@stop