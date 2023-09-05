<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Register - Paripurna Consulting</title>
    <link rel="stylesheet" href="{{asset('assets/modules/bootstrap-5.1.3/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/modules/bootstrap-icons/bootstrap-icons.css')}}">
</head>

<body>
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-6 col-12 mx-auto text-center">
                <div id="auth-right">
                    <a href="/"><img src="{{asset('asset/img/logo.png')}}" width="120" alt="Logo"></a>
                    <h1 class="auth-title">Register</h1>
                    @error('name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                    @error('email')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                    @error('password')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name"
                                placeholder="User Name">
                            <div class="form-control-icon">
                                <i class="bi bi-person text-primary"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="email"
                                class="form-control form-control-xl @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                            <div class="form-control-icon">
                                <i class="bi bi-envelope text-primary"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" name="password"
                                placeholder="Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock text-primary"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" name="password_confirmation"
                                placeholder="Password Confirmation">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock text-primary"></i>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" type="submit">Register</button>
                    </form>
                    <div class="text-center mt-4 text-lg fs-4">
                        <p class="text-gray-600">Have an account? <a href="{{ route('login') }}"
                                class="font-bold">Login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('assets/js/atrana.js')}}"></script>
    <script src="{{asset('assets/modules/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/modules/bootstrap-5.1.3/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/modules/popper/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
</body>

</html>
