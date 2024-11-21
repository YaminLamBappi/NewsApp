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
                @if($likeable > 0)
                    <form method="post" action="{{ route('store.unlike', ['newsId' => $post->id]) }}">

                        @csrf
                        <div class="text-center my-3">

                            <button type="submit" class="btn btn-outline-primary btn-sm">
                                <i class="fa fa-thumbs-up"></i> Unlike
                            </button>
                        </div>
                    </form>
                @else
                    <form method="post"
                        action="{{ route('store.like', ['userId' => Auth::user()->id, 'newsId' => $post->id]) }}">
                        @csrf
                        <div class="text-center my-3">

                            <button type="submit" class="btn btn-outline-primary btn-sm">
                                <i class="fa fa-thumbs-up"></i> Like
                            </button>
                        </div>
                    </form>

                @endif
                <h6><strong>Likes:</strong> {{ $total_like }}</h6>
                <h6><strong>Views:</strong> {{ $post->views }}</h6>
            </div>
        </div>
    </div>
</div>

@endsection