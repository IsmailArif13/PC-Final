@extends('frontend/app')

@section('content')
<div id="home" class="header-bg page-area">
    <div class="home-overly"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="slider-content text-center">
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <div class="header-bottom">
                        <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                            <h1 class="title2">Paripurna Consulting</h1>
                        </div>
                        <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                            <h2 class="title3">Profesional Consulting Agency</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start About area -->
<div id="about" class="about-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h2>Tentang Kami</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="well-left">
                    <div class="single-well">
                        <a href="#">
                            <img src="{{asset('asset/img/blog/3.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <!-- single-well end-->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="well-middle">
                    <div class="single-well">
                        <a href="#">
                            <h4 class="sec-head">Tentang Paripurna</h4>
                        </a>
                        <p>
                            Kami menyadari bahwa setiap klien mempunyai kebutuhan yang unik atas jasa pelatihan dan
                            konsultansi, hal ini karena setiap organisasi dipengaruhi oleh jenis organisasinya,
                            kontek organisasinya dan tantangan dan sasaran yang dihadapi dan ingin dicapainya.
                        </p>
                        <p>
                            Oleh karenanya, untuk kegiatan pelatihan dan konsultansi yang kami tawarkan akan didahului
                            dengan identifikasi kebutuhan klien yang dapat dilakukan melalui diskusi maupun
                            kunjungan awal ke klien.
                        </p>
                    </div>
                </div>
            </div>
            <!-- End col-->
        </div>
    </div>
</div>
<!-- End About area -->

<!-- Start Service area -->
<div id="services" class="services-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline services-head text-center">
                    <h2>Produk Jasa Kami</h2>
                </div>
            </div>
        </div>
        <div class="row text-center">
            @foreach($produk as $item)
            <div class="col-md-4 col-sm-12" style="height: 14em;">
                <div class="about-move">
                    <div class="services-details">
                        <div class="single-services">
                            <img src="{{asset('asset/img/logo.png')}}" width="100" alt="" title="">
                            <!-- <i class="fa fa-certificate"></i> -->
                            <h5>{{$item->name}}</h5>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="reviews-area hidden-xs">
    <div class="work-us">
        <div class="work-left-text">
            <a href="#">
                <img src="{{asset('asset/img/about/2.jpg')}}" alt="">
            </a>
        </div>
        <div class="work-right-text text-center">
            <h2>working with us</h2>
            <h2 class="text-white">Paripurna Consulting</h2>
            <h5>Jasa Konsultasi dan Pelatihan</h5>
            <a href="#contact" class="ready-btn">Hubungi Kami</a>
        </div>
    </div>
</div>

<div id="blog" class="blog-area">
    <div class="blog-inner area-padding">
        <div class="blog-overly"></div>
        <div class="container ">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Artikel Terbaru</h2>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                @foreach($artikel as $item)
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single-blog">
                        <a href="/artikel/{{$item->slug}}">
                            <div class="blog-meta">
                                <span class="date-type">
                                    <i class="fa fa-calendar"></i>{{$item->created_at->format('Y-m-d')}}
                                </span>
                            </div>
                            <div class="blog-text">
                                <h4>
                                    {{$item->title}}
                                </h4>
                                <p class="text-justify">{{ Str::limit(strip_tags($item->text), 230);  }}</p>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-12 text-center  single-blog">
                    <a href="{{url('artikel')}}" class="ready-btn mt-4">Lihat Semua</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Blog -->

<!-- Start Suscrive Area -->
<div class="suscribe-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
                <div class="suscribe-text text-center">
                    <h3>Paripurna Consulting</h3>
                    <a class="sus-btn" href="#contact">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
