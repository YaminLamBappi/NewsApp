@extends('layouts/AdminPanel')
@section('body')

<div class="d-flex justify-content-center py-12">
    <div class="px-5 space-y-5">
        <!-- Update Profile Information Form -->
        <div class="p-3 bg-white shadow rounded">
            @include('profile.partials.update-profile-information-form')
        </div>
    </div>
</div>



@endsection