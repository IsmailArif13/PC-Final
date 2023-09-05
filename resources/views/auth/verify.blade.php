<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Verify - Paripurna Consulting</title>
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
                    <h1 class="auth-title">Verify Your Email Address</h1>
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    <div class="alert alert-info" role="alert">
                        <p class="text-white">Before proceeding, please check your email for a verification link.</p>
                        <p class="text-white">If you did not receive the email, <a onclick="return document.getElementById('resend').submit();">click here to request another</a> </p>
                    </div>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}" id="resend">
                        @csrf
                    </form>
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
