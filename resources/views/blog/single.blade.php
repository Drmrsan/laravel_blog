@extends('layouts.app')


@section('title', '|' .  e($post->title))

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<img src="{{ asset('images/' . $post->image) }}" alt="" />
			<h1> {{ $post->title}} </h1>
			<p> {{ $post->body}} </p>
			<hr>
			<p>Article posted in category: {{ $post->category->name }}</p>
		</div>
	</div>
	<hr>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
					
				<h2>Comments:</h2>

				@foreach ($post->comments as $comment)
					<div class="well">
						<h4>Name: {{ $comment->name }}</h4>
						<h4>Email: {{ $comment->email }}</h4>
						<p>Comment: {{ $comment->comment }}</p>
					</div>
				@endforeach

		</div>
	</div>

	<div class="row">
		<div id="comment-form" class="col-md-8 col-md-offset-2">
			{!! Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST']) !!}
				<div class="row">
					<div class="col-md-6">
						{!! Form::label('name', 'Name:') !!}
						{!! Form::text('name', null, ['class' => 'form-control']) !!}
					</div>
					<div class="col-md-6">
						{!! Form::label('email', 'Email:') !!}
						{!! Form::text('email', null, ['class' => 'form-control']) !!}
					</div>
					<div class="col-md-12">
						{!! Form::label('comment', 'Comment:') !!}
						{!! Form::textarea('comment', null, ['class' => 'form-control', 'rows' => 5]) !!}

						{!! Form::submit('Add comment', ['class' => 'btn btn-success btn-block form-spacing-top']) !!}
					</div>
				</div>
			{!! Form::close() !!}
		</div>
	</div>

@stop