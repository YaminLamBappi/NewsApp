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
    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header text-center">
                <h1>{{ $post->title }}</h1>
            </div>
            <div class="card-body">
                <!-- Post Image -->
                <div class="text-center mb-4">
                    <img src="{{ asset($post->image) }}" alt="Image Not Found" class="img-fluid rounded"
                        style="max-height: 400px; object-fit: cover; width: 100%; height: auto;">
                </div>

                <!-- Post Description -->
                <p class="card-text" style="word-wrap: break-word;">
                    <strong>Description:</strong> {!! $post->description !!}
                </p>
            </div>
            <div class="card-footer d-flex justify-content-between">
                <div>
                    <h6><strong>Likes:</strong> {{ $post->likes }}</h6>
                    <h6><strong>Views:</strong> {{ $post->views }}</h6>
                </div>
            </div>
        </div>
    </div>

</body>

</html>