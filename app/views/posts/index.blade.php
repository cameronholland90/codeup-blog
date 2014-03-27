@extends('layouts.master')

@section('tab-title')
	<title>show.blade.php</title>

@section('content')
    <div class='container main-container'>
    	<h1>All Post</h1>
    	@foreach ($posts as $post)
    		<h3><a href="{{{ action('PostsController@show', $post->id) }}}">{{{ $post->title }}}</a></h3>
    		<p> {{{ $post->body }}} </p>
    	@endforeach
    	<a href="{{{ action('PostsController@create') }}}" class='btn btn-success'>Create New</a>
    </div>

@stop