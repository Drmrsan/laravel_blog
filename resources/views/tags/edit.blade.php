@extends('layouts.app')

@section('title', '| Edit Tags')

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="well">
				{!! Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => 'PUT']) !!}
					<h2>Edit Tags</h2>
					{!! Form::label('name', 'Name:') !!}
					{!! Form::text('name', null, ['class' => 'form-control']) !!}

					{!! Form::submit('Edit tag', ['class' => 'btn btn-primary btn-block btn-h1-spacing']) !!}

				{!! Form::close() !!}
			</div>
		</div>
	</div>

@stop
