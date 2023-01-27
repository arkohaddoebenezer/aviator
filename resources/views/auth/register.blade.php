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
                            style="background-image: url({{ asset('img/aviatorweb1.webp') }});">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Create a free account</h3>
                                </div>
                            </div>
                            <form class="form" action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <label class="label" for="name">User Name</label>
                                    <input type="text" value="{{ old('name') }}" name="name"
                                        class="form-control" @error('name') is-invalid @enderror placeholder="username"
                                        required>
                                    @error('name')
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
                                    <label class="label" for="phone">Phone</label>
                                    <input type="text" value="{{ old('phone') }}" name="phone"
                                        class="form-control" @error('phone') is-invalid @enderror placeholder="Phone"
                                        required>
                                    @error('phone')
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
                                <div class="form-group mb-3">
                                    <label class="label" for="password_confirmation">Confirm Password</label>
                                    <input type="password" class="form-control" name="password_confirmation"
                                        @error('password_confirmation') is-invalid @enderror placeholder="Confirm Password" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Create account</button>
                                </div>
                            </form>
                            <p class="text-center">Have an account already? <a href="{{ route('login') }}">Login</a>
                            </p>
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
