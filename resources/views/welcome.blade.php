<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>News List</title>
</head>

<body>

    <div>
        <h1 class="text-center mb-4">All News</h1>

    </div>
    <div class="container mt-5">
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-3 mb-4">
                    <div class="card shadow-sm border-light rounded">
                        <!-- Card Image -->
                        <img class="card-img-top" src="{{ asset($post->image) }}" alt="Post Image"
                            style="height: 150px; object-fit: cover;">

                        <!-- Card Body -->
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">
                                <strong>Category:</strong> {{ $post->category->name }}<br>
                                <strong>Likes:</strong> {{ $post->likes }} | <strong>Views:</strong> {{ $post->views }}<br>
                                <strong>Status:</strong>
                                <span class="badge {{ $post->status === 'Active' ? 'badge-success' : 'badge-secondary' }}">
                                    {{ $post->status }}
                                </span>
                            </p>
                        </div>

                        <!-- Card Footer -->
                        <div class="card-footer text-center">

                            <a href="{{ route('posts.view.public', $post->id) }}" class="btn btn-sm btn-info">View</a>
                        </div>

                        <!-- Actions -->
                        <div class="text-center my-3">
                            <a href="{{ route('posts.like', $post->id) }}" class="btn btn-outline-primary btn-sm">
                                <i class="fa fa-thumbs-up"></i> Like
                            </a>
                        </div>


                    </div>
                </div>
            @endforeach
        </div>
    </div>

</body>

</html>