@extends('layouts.app')

@section('title', '| Edit Blog Post')

@section('content')

	<div class="row">

		{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT', 'files'=> true]) !!}

			<div class="col-md-8">
				
				{{ Form::label('title', 'Title:')}}
				{{ Form::text('title', null, ['class' => 'form-control input-lg']) }}

				{!! Form::label('slug', 'Slug:', ['class' => 'form-spacing-top']) !!}
				{!! Form::text('slug', null, ['class' => 'form-control', 'required' => '', 'minLength' => '5', 'maxLength' => '255']) !!}

				{!! Form::label('category_id', 'Categories', ['class' => 'form-spacing-top']) !!}
				{!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}

				{!! Form::label('tags', 'Tags', ['class' => 'form-spacing-top']) !!}
				{!! Form::select('tags[]', $tags, null, ['class' => 'form-control select2-multiple', 'multiple' => 'multiple']) !!}

				{!! Form::label('featured_image', 'Update featured image', ['class' => 'form-spacing-top']) !!}
				{!! Form::file('featured_image' ) !!}

				{{ Form::label('body', 'Body:', ['class' => 'form-spacing-top'])}}
				{{ Form::textarea('body', null, ['class' => 'form-control']) }}
				
			</div>

			<div class="col-md-4">
				<div class="well">
					<dl class="dl-horizontal">
						<dt>Created At:</dt>
						<dd>{{ date('M j, Y, H:i', strtotime($post->created_at)) }}</dd>
					</dl>
					<dl class="dl-horizontal">
						<dt>Last Updated:</dt>
						<dd>{{ date('M j, Y, H:i', strtotime($post->updated_at)) }}</dd>
					</dl>
					<hr>
					<div class="row">
						<div class="col-sm-6">
							{!! Html::linkRoute('posts.show', 'Cancel', [$post->id], ['class="btn btn-danger btn-block"']) !!}
						</div>
						<div class="col-sm-6">

							{!! Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) !!}
							
						</div>
					</div>
				</div>
			</div>

		{!! Form::close() !!}
	</div>
	
@endsection