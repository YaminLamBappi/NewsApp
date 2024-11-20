@extends('layouts.AdminPanel')

@section('body')

<div class="container mt-2">
    <div class="row">
        @foreach ($posts as $post)
            <div class="col-md-3 mt-1 mb-1">
                <div class="card shadow-sm border-light rounded">
                    <img class="card-img-top" src="{{ asset($post->image) }}" alt="Post Image"
                        style="height: 150px; object-fit: cover;">

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

                    <div class="card-footer text-center">
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">Update</a>
                        <a href="{{ route('posts.destroy', $post->id) }}" class="btn btn-sm btn-danger"
                            onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-info">View</a>
                    </div>

                    @if($button === 'yes')
                        <div class="text-center my-3">
                            <a id="likeButton" href="{{ route('posts.like', $post->id) }}"
                                class="btn btn-outline-primary btn-sm">
                                <i class="fa fa-thumbs-up"></i> Like
                            </a>
                        </div>
                    @elseif($button === 'no')
                        <p>ALready liked</p>
                    @endif

                    <div class="text-center mb-3">
                        @if ($post->status === 'Active')
                            <a href="{{ route('posts.inactive', $post->id) }}" class="btn btn-warning btn-sm">Deactivate</a>
                        @else
                            <a href="{{ route('posts.active', $post->id) }}" class="btn btn-success btn-sm">Activate</a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{ $posts->links() }}

</div>

@endsection