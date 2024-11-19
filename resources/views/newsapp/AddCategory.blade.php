@extends('layouts.AdminPanel')

@section('body')


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h1>Add Category</h1>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('AddCategory') }}">
                        @csrf
                        <input name="name" type="text">

                        <button class="btn btn-success" type="submit">Add</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection