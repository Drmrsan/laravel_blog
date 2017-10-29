@include('partials._head')

	@include('includes/navbar')
	
	<div class="container">
		
		@include('partials._messages')
		
		@yield('content')

	</div>

@include('partials._foot')
