@extends('../app')

@section('title', '| Contact')

@section('content')

    <div class="container">
    	<div class="row">
    		<div class="col-md-12">
    			<h1>Contact me</h1>
    			
    			<hr>

				<form action="">
					<div class="form-group">
						<label for="">Email:</label>
						<input type="email" id="email" name="email" class="form-control">
					</div>

					<div class="form-group">
						<label for="">Subject:</label>
						<input type="text" id="subject" name="subject" class="form-control">
					</div>

					<div class="form-group">
						<label for="">Message:</label>
						<textarea type="text" id="message" class="form-control"></textarea>
					</div>

					<input type="submit" class="btn btn-success">
				</form>
    		</div>
    	</div>
    </div>

@endsection