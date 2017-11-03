@extends('layouts.app')

@section('title', "| $post->title")

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1> {{ $post->title}} </h1>
			<p> {{ $post->body}} </p>
			<hr>
			<p>Article posted in category: {{ $post->category->name }}</p>
		</div>
	</div>

@stop