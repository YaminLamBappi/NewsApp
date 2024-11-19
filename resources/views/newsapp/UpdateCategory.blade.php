@extends('layouts.AdminPanel')

@section('body')


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h1>Update Category</h1>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('category.update', ['id' => $category->id]) }}">
                        @csrf
                        <input value="{{$category->name}}" name="name" type="text">


                        <button class="btn btn-success" type="submit">Add</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection