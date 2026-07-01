<x-app>
    <div class="container ac-layout before-login">
        <div class="panel m-auto">
            <div class="p-head">
                <h2 class="text-center">Account Login</h2>
            </div>

            <div class="p-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group mb-3">
                        <label class="control-label" for="email">
                            Phone / E-Mail
                        </label>

                        <input id="email" type="email" name="email" value="{{ old('email') }}"
                            placeholder="Phone / E-Mail" class="form-control @error('email') is-invalid @enderror"
                            required autofocus>

                        @error('email')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label class="control-label" for="password">
                            Password
                        </label>

                        @if (Route::has('password.request'))
                            <a class="forgot-password float-end" href="{{ route('password.request') }}">
                                Forgotten Password?
                            </a>
                        @endif

                        <input id="password" type="password" name="password" placeholder="Password"
                            class="form-control @error('password') is-invalid @enderror" required>

                        @error('password')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                Remember Me
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">
                        Login
                    </button>
                </form>

                <p class="no-account-text mt-4">
                    <span>Don't have an account?</span>
                </p>

                @if (Route::has('register'))
                    <a class="btn st-outline w-100" href="{{ route('register') }}">
                        Create Your Account
                    </a>
                @endif
            </div>
        </div>
    </div>
</x-app>
