@extends('layouts.AdminPanel')
@section('body')

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2 mt-5">
            <div class="card">
                <div class="card-header bg-info">
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('posts.update', ['id' => $post->id]) }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input value="{{$post->title}}" type="text" name="title" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label><strong>Description :</strong></label>
                            <textarea id="summernote" name="description"> {{ $post->description }}</textarea>
                        </div>

                        <label for="image">Image</label>
                        <img src="{{ asset($post->image) }}" alt="{{ $post->title }} photo" class="img-fluid">
                        <input value="{{$post->image}}" type="file" name="image">

                        <label for="cars">Choose category:</label>

                        <select name="category_id" class="form-control">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>



                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success btn-sm">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    function myFunction() {
        document.getElementById("summernote").value = 'hello';
    }

    $(document).ready(function () {
        $('#summernote').summernote({
            height: 300,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview']],
            ]
        });
    });
</script>


@endsection