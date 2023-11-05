@include('layouts.app')
<style>
    .back{
        background: url('/images/loginBackground.png') center center;
            background-size: 100%;
            height: 100vh;
            width: 100%;
            color: #fff;
            text-align: center;
            padding: 100px 0;
    }
    </style>
    <div class="back" style=" display: flex; justify-content: center; align-items: center;">
        <div class="card" style="background-color: #FAC000; color: black; width: 500px; height:280px">
            <div class="card-header" style="background-color: #FAC000; color: black;">{{ __('Login') }}</div>

            <div class="card-body">
            <x-auth-session-status class="mb-4" :status="session('status')" />
                <form method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right" style="color: black;">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="color: black;">

                            @error('email')
                            <span class="invalid-feedback" role="alert" style="color: black;">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right" style="color: black;">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" style="color: black;">

                            @error('password')
                            <span class="invalid-feedback" role="alert" style="color: black;">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} style="color: black;">

                                <label class="form-check-label" for="remember" style="color: black;">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary" style="border:1px solid black;background-color: #FAC000; color: black;">
                                {{ __('Login') }}
                            </button>
                            <button class="btn btn-primary" style="border:1px solid black; background-color: #FAC000; color: black;">
                                <a style="color:#000000; text-decoration:none" href="/signup">{{ __('Signup') }}</a>
                            </button>

                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}" style="color: black;">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </div>

