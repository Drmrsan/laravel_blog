@extends('../app')

@section('title', '| Homepage')

@section('content')
    
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
              <h1>Welcome to my blog</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque dicta accusantium ipsum, enim qui maxime vero iste fugiat adipisci facilis quos dolores molestiae animi voluptatibus earum doloribus? Quo deleniti, quam.</p>
              <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">

            @foreach ($posts as $post)
                
                <div class="post">
                    <h3> {{$post->title}} </h3>
                    <p> {{ substr($post->body, 0, 100)}} {{strlen($post->body) > 50 ? "..." : ""}} </p>
                    <a href="#" class='btn btn-primary'>Read more</a>
                </div>

                <hr>

            @endforeach

        </div>

        <div class="col-md-3 col-md-offset-1">
            <h2>Sidebar</h2>
        </div>
    </div>

@endsection