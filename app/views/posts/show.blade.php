@extends('layouts.master')

@section('tab-title')
	<title>show.blade.php</title>

@section('content')
    <div class='container main-container'>
    	<h1>Specific Post</h1>
    	<h3>{{{ $post->title }}}</h3>
    	<p> {{{ $post->body }}} </p>
    	<a href="{{{ action('PostsController@index') }}}">Back to all Posts</a>
    </div>


@stop