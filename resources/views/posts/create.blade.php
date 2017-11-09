@extends('layouts.app')

@section('title', '| Create Post')

@section('stylesheets')
	{!! Html::style('css/parsley.css') !!}
@endsection


@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create New Post</h1>
			<hr>

			{!! Form::open(['route'=>'posts.store', 'data-parsley-validate' => "", 'files' => true]) !!}
				{!! Form::label('title', 'Title:') !!}
				{!! Form::text('title', null, ['class' => 'form-control', 'required' => '', 'minLength' => '3', 'maxLength' => '255']) !!}

				{!! Form::label('slug', 'Slug:') !!}
				{!! Form::text('slug', null, ['class' => 'form-control', 'required' => '', 'minLength' => '5', 'maxLength' => '255']) !!}

				{!! Form::label('category_id', 'Category:') !!}
				{!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}

				{!! Form::label('tags', 'Tags:') !!}
				{!! Form::select('tags[]', $tags, null, ['class' => 'form-control select2-multiple', 'multiple' => 'multiple']) !!}

				{!! Form::label('featured_image', 'Featured image') !!}
				{!! Form::file('featured_image') !!}

				{!! Form::label('body', 'Post content:') !!}
				{!! Form::textarea('body', null, ['class' => 'form-control', 'required' => '']) !!}

				{!! Form::submit('Create Post', ['class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top:20px']) !!}
			{!! Form::close() !!}


		</div>
	</div>

@endsection


@section('scripts')
	{!! Html::script('js/parsley.min.js') !!}
@endsection
