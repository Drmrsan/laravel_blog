@extends('layouts.app')

@section('title', "| $tag->name" )

@section('content')
	<div class="row">
		<div class="col-md-8">
			<h1>{{ $tag->name }} Tag <small>({{ $tag->posts()->count() }} posts)</small></h1>
		</div>
		<div class="col-md-4">
			<a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-primary pull-right">Edit</a>
			{!! Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE']) !!}	
				{!! Form::submit('Delete', ['class' => 'btn btn-danger pull-right']) !!}
			{!! Form::close() !!}
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Title</th>
						<th>Tags</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
						@foreach ($tag->posts as $post)
							<tr>
								<th>{{ $post->id }}</th>
								<td>{{ $post->title }}</td>
								<td>
									@foreach ($post->tags as $tag)
										<span class="label label-success">{{ $tag->name }}</span>
									@endforeach
								</td>
								<td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-default btn-sm">View</a></td>
							</tr>
						@endforeach
				</tbody>
			</table>
		</div>
	</div>
@stop