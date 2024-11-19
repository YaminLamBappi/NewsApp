@extends('layouts.AdminPanel')

@section('body')

<h1>Add News</h1>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2 mt-5">
            <div class="card">
                <div class="card-header bg-info">
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('AddNews') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" />
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label><strong>Description :</strong></label>
                            <textarea id="summernote" name="description"></textarea>
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <label for="image">Image</label>
                        <input type="file" name="image">
                        @error('image')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <label for="cars">Choose category:</label>

                        <select name="category_id" class="form-control">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success btn-sm">ADD</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@section('script')
<script>
    $(document).ready(function () {
        $('#summernote').summernote({
            height: 300, // Adjust height
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

@endsection