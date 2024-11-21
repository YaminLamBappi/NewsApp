@extends('layouts/AdminPanel')
@section('body')

<div class="d-flex justify-content-center py-12">
    <div class="px-5 space-y-5">
        <!-- Update Profile Information Form -->
        <div class="p-3 bg-white shadow rounded">
            <section class="container py-4">
                <header class="mb-4">
                    <h2 class="h4 text-dark">
                        Update Password
                    </h2>
                    <p class="text-muted">
                        Ensure your account is using a long, random password to stay secure.
                    </p>
                </header>

                <form method="post" action="{{ route('password.update') }}" class="needs-validation" novalidate>
                    @csrf
                    @method('put')

                    <div class="mb-3">
                        <label for="update_password_current_password" class="form-label">Current Password</label>
                        <input type="password" id="update_password_current_password" name="current_password"
                            class="form-control-md" autocomplete="current-password" required>
                        @if ($errors->updatePassword->has('current_password'))
                            <div class="text-danger mt-1">{{ $errors->updatePassword->first('current_password') }}</div>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="update_password_password" class="form-label">New Password</label>
                        <input type="password" id="update_password_password" name="password" class="form-control-md"
                            autocomplete="new-password" required>
                        @if ($errors->updatePassword->has('password'))
                            <div class="text-danger mt-1">{{ $errors->updatePassword->first('password') }}</div>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="update_password_password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" id="update_password_password_confirmation" name="password_confirmation"
                            class="form-control-md" autocomplete="new-password" required>
                        @if ($errors->updatePassword->has('password_confirmation'))
                            <div class="text-danger mt-1">{{ $errors->updatePassword->first('password_confirmation') }}
                            </div>
                        @endif
                    </div>

                    <div class="d-flex align-items-center gap-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                        @if (session('status') === 'password-updated')
                            <p class="text-success mb-0" id="password-updated-msg">
                                Saved.
                            </p>
                        @endif
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>



@endsection