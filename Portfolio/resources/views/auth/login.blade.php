@include('layouts.Lstyle')


<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h2>{{ __('Login') }}</h2>

                    <div class="inputbox"> <ion-icon name="mail-outline"></ion-icon>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <label>Email</label>
                    </div>

                    <div class="inputbox"> <ion-icon name="lock-closed-outline"></ion-icon>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <label>{{ __('Password') }}</label>
                    </div>

                    <div class="forget"> <label>
                            <input type="checkbox" name="remember" id="remember" value="{{ old('remember') ? 'checked' : '' }}">{{ __('Remember Me') }}</label>
                        <a href="/passwords/email">Forgot Password</a>
                    </div> <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}"></a>
                    @endif

                    <div class="register">
                        <!-- <p>Don't have an account? <a href="/register">Register</a></p> -->
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>