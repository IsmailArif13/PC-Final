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
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <article class="blog-post-wrapper">
                            <div class="post-information">
                                <h2>{{$artikel->title}}</h2>
                                <div class="entry-meta">
                                    <span class="author-meta"><i class="fa fa-user"></i> <a href="#">admin</a></span>
                                    <span><i class="fa fa-clock-o"></i> {{$artikel->created_at->format('Y-m-d')}}</span>
                                </div>
                                <div class="entry-content">
                                    {!! $artikel->text !!}
                                </div>
                            </div>
                        </article>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
@endsection
