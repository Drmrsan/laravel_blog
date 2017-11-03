@if (session()->has('success'))
	
	<div class="alert alert-success" role="alert" >
		{{ session()->get('success') }}
	</div>

@endif


@if (session()->has('logout-flash'))
	
	<div class="alert alert-warning" role="alert" >
		{{ session()->get('logout-flash') }}
	</div>

@endif



@if (count($errors) > 0)
	
	<div class="alert alert-danger" role="alert">
		<strong>Errors:</strong>
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>

@endif