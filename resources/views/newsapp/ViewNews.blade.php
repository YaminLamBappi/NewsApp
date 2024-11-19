@extends('layouts.AdminPanel')

@section('body')

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

@endsection