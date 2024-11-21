<section class="container py-4">
    <header class="mb-4">
        <h2 class="h4 text-dark">
            Profile Information
        </h2>
        <p class="text-muted">
            Update your account's profile information and email address.
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="needs-validation" novalidate>
        @csrf
        @method('patch')

        <div class="mb-1">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" name="name" class="form-control-md" value="{{ old('name', $user->name) }}"
                autocomplete="name">
            @if ($errors->has('name'))
                <div class="text-danger mt-1">{{ $errors->first('name') }}</div>
            @endif
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" class="form-control-md" value="{{ old('email', $user->email) }}"
                autocomplete="username">
            @if ($errors->has('email'))
                <div class="text-danger mt-1">{{ $errors->first('email') }}</div>
            @endif

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div class="alert alert-warning mt-3">
                    <p class="mb-2">
                        Your email address is unverified.
                        <button form="send-verification" class="btn btn-link p-0">
                            Click here to re-send the verification email.
                        </button>
                    </p>
                    @if (session('status') === 'verification-link-sent')
                        <p class="text-success">
                            A new verification link has been sent to your email address.
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="d-flex align-items-center gap-3">
            <button type="submit" class="btn btn-primary">Save</button>

            @if (session('status') === 'profile-updated')
                <p class="text-success mb-0" id="profile-updated-msg">
                    Saved.
                </p>
            @endif
        </div>
    </form>
</section>