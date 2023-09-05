<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Paripurna Consulting</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900"
        rel="stylesheet">

    <link href="{{asset('asset/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/lib/nivo-slider/css/nivo-slider.css')}}" rel="stylesheet">
    <link href="{{asset('asset/lib/owlcarousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('asset/lib/owlcarousel/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{asset('asset/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/lib/venobox/venobox.css')}}" rel="stylesheet">

    <link href="{{asset('asset/css/nivo-slider-theme.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/responsive.css')}}" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#navbar-example">
    <!-- <div id="preloader"></div> -->
    <header>
        <div id="sticker" class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <nav class="navbar navbar-default">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand page-scroll sticky-logo" href="/">
                                    <img src="{{asset('asset/img/logo.png')}}" width="60" style="margin-top: -10px;">
                                </a>
                                <a class="navbar-brand page-scroll sticky-logo" href="/">
                                    <h1>Paripurna</h1>
                                </a>
                            </div>
                            <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1"
                                id="navbar-example">
                                <ul class="nav navbar-nav navbar-right">
                                    @if(Request::is('/'))
                                    <li class="active">
                                        <a class="page-scroll" href="#home">Home</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="#about">Tentang</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="#services">Produk Jasa</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="#blog">Artikel</a>
                                    </li>
                                    @else
                                    <li>
                                        <a class="page-scroll" href="/">Home</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="/#about">Tentang</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="/#services">Produk Jasa</a>
                                    </li>
                                    <li class="{{Request::is('artikel*') ? 'active':''}}">
                                        <a class="page-scroll" href="/artikel">Artikel</a>
                                    </li>
                                    @endif
                                    <li class="{{Request::is('order*') ? 'active':''}}">
                                        <a class="page-scroll" href="/order">Pesan Jasa</a>
                                    </li>
                                    @auth
                                    @if(auth()->user()->role == 'admin')
                                    <li>
                                        <a class="page-scroll" href="{{url('admin')}}">Dashboard</a>
                                    </li>
                                    @else
                                    <li>
                                        <a class="page-scroll" href="{{url('logout')}}">Logout</a>
                                    </li>
                                    @endif
                                    @endauth

                                    @guest
                                    <li>
                                        <a class="page-scroll" href="{{url('login')}}">Login</a>
                                    </li>
                                    @endguest
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <!-- Start Footer bottom Area -->
    <footer>
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="footer-content">
                            <div class="footer-head">
                                <div class="footer-logo">
                                    <img src="{{asset('asset/img/logo.png')}}" width="100" alt="" title="">
                                </div>

                                <p>Kebutuhan klien adalah tantangan utama kami untuk bisa memenuhinya secara paripurna.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12"></div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="footer-content">
                            <div class="footer-head">
                                <h4>information</h4>
                                <p>
                                    Untuk informasi lebih lanjut, termasuk jika memerlukan kunjungan awal, silahkan menghubungi kami di:
                                </p>
                                <div class="footer-contacts">
                                    <p><span>Tel:</span> +62 8770079165</p>
                                    <p><span>Email:</span> consultingparipurna@gmail.com</p>
                                    <p><span>Working Hours:</span> 9am-5pm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a> -->

    <!-- JavaScript Libraries -->
    <script src="{{asset('asset/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('asset/lib/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('asset/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('asset/lib/venobox/venobox.min.js')}}"></script>
    <script src="{{asset('asset/lib/knob/jquery.knob.js')}}"></script>
    <script src="{{asset('asset/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('asset/lib/parallax/parallax.js')}}"></script>
    <script src="{{asset('asset/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('asset/lib/nivo-slider/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
    <script src="{{asset('asset/lib/appear/jquery.appear.js')}}"></script>
    <script src="{{asset('asset/lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('asset/js/main.js')}}"></script>
    <script src="//code.tidio.co/ehuroqrw3x34qosuw3nkc1gz3rkmzdd5.js" async></script>
</body>

</html>
