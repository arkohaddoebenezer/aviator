<!doctype html>
<html lang="en">

<head>
    <title>{{ config('app.name') }} - Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('assets/media/images/favicon.png') }}" />
    <link href="{{ asset('assets/css/font-login.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <h2 class="heading-section">
                        <img alt="Logo" style="height: 80px;" src="{{ asset('assets/media/images/logo.png') }}"
                            class="h-65px logo" />
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img"
                            style="background-image: url({{ asset('assets/media/images/support.jpg') }});">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Support Sign In</h3>
                                </div>
                            </div>
                            <form class="form" action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Email</label>
                                    <input type="email" value="{{ old('email') }}" name="email"
                                        class="form-control" @error('email') is-invalid @enderror placeholder="Email"
                                        required>
                                    @error('email')
                                        <span class="form-label fw-bolder text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    @if ($message = Session::get('error'))
                                        <span class="form-label fw-bolder text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input type="password" class="form-control" name="password"
                                        @error('password') is-invalid @enderror placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign
                                        In</button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} checked />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="w-50 text-md-right">
                                        @if (Route::has('password.request'))
                                            <a href="#">Forgot Password?</a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>

</html>
