@include('layouts.app')

<style>
    .back {
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
        <div class="card" style="background-color: #FAC000; color: black; width: 500px; height: 400px">
            <div class="card-header" style="background-color: #FAC000; color: black;">{{ __('Signup') }}</div>

            <div class="card-body">
                <form method="POST">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right" style="color: black;">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus style="color: black;">

                            @error('name')
                            <span class="invalid-feedback" role="alert" style="color: black;">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right" style="color: black;">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" style="color: black;">

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
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" style="color: black;">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right" style="color: black;">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required style="color: black;">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary" style="border: 1px solid black; background-color: #FAC000; color: black;">
                                {{ __('Signup') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>