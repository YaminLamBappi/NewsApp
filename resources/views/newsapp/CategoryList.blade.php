@extends('layouts.AdminPanel')

@section('body')

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-2 mt-5">
            <div class="card">
                <h1 class="text-center">All Categories</h1>

                <div class="card-header bg-info">
                </div>
                <div class="card-body col-md-12">
                    <table class="table" border="1" cellspacing="0" cellpadding="5">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Action</th>
                                <th>No Of Post</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <a href="{{ route('category.edit', $category->id) }}"
                                            class="btn btn-sm btn-primary">Update</a>
                                        <a href="{{ route('category.destroy', $category->id) }}"
                                            class="btn btn-sm btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                                    </td>
                                    <td>10</td>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection