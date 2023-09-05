@extends('frontend/app')

@section('content')
<div class="blog-page area-padding">
    <div class="container" style="margin-top: 4em">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="page-head-blog">
                    <div class="single-blog-page">
                        <div class="left-blog">
                            <h4>recent post</h4>
                            <div class="recent-post">
                                @foreach($recent as $rec)
                                <div class="recent-single-post">
                                    <div class="pst-content">
                                        <p><a href="/artikel/{{$rec->slug}}">{{$rec->title}}</a></p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="row">
                    @foreach($artikel as $item)
                    <div class="col-md-12 col-sm-12 col-xs-12">
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
                                    <p>{{ Str::limit(strip_tags($item->text), 240);  }}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                    {{ $artikel->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Blog Area -->

<div class="clearfix"></div>
@endsection
