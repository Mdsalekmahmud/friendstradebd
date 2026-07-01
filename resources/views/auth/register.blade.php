<x-app>
<div class="container ac-layout before-login">
    <div class="panel m-auto">
        <div class="p-head">
            <h2 class="text-center">Register Account</h2>
        </div>

        <div class="p-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="multiple-form-group">
                    <div class="form-group required">
                        <label for="name">Name</label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="Full Name"
                            class="form-control @error('name') is-invalid @enderror"
                            required
                            autofocus
                        >

                        @error('name')
                            <span class="invalid-feedback d-block">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group required">
                    <label for="email">E-Mail</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="E-Mail"
                        class="form-control @error('email') is-invalid @enderror"
                        required
                    >

                    @error('email')
                        <span class="invalid-feedback d-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group required">
                    <label for="password">Password</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Password"
                        class="form-control @error('password') is-invalid @enderror"
                        required
                    >

                    @error('password')
                        <span class="invalid-feedback d-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group required">
                    <label for="password-confirm">Confirm Password</label>
                    <input
                        type="password"
                        id="password-confirm"
                        name="password_confirmation"
                        placeholder="Confirm Password"
                        class="form-control"
                        required
                    >
                </div>

                <div class="form-group my-3">
                    <input type="checkbox" name="agree" id="agree" required>
                    &nbsp;
                    <label for="agree">
                        I have read and agree to the Privacy Policy
                    </label>
                </div>

                <button type="submit" class="btn btn-primary w-100">
                    Register
                </button>

                <p class="no-account-text mt-4">
                    <span>Already have an account?</span>
                </p>

                <p class="text-center">
                    <a href="{{ route('login') }}">
                        Login Here
                    </a>
                </p>
            </form>
        </div>
    </div>
</div>


</x-app>