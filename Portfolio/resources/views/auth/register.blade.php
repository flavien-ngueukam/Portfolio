
<!-- @include('layouts.Rstyle')

<body>

    <div class="wrapper">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h1>{{ __('Register') }}</h1>

            <div class="input-box">

                <div class="input-field">


                    <input id="name" type="text" name="name" placeholder="username" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    <i class='bx bxs-user'></i>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <i class='bx bxs-user'></i>
                </div>

                <div class="input-field">
                
                    <input id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <i class='bx bx-envelope'></i>
                </div>
                </div>


                <div class="input-box">

                </div>

                <div class="input-box">
                    <div class="input-field">
                        <input id="password" type="password" placeholder="Password" name="password" required autocomplete="new-password">
                        <i class='bx bxs-lock-alt'></i>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="input-field">
                        <input id="password-confirm" type="password" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                        <i class='bx bxs-lock-alt'></i>
                    </div>
                </div>

                <label><input type="checkbox">I hereby declare that the above informations provided is <b>true and correct</b></label>
                <button type="submit" class="btn">
                    {{ __('Register') }}
                </button>

        </form>
    </div>

</body> -->