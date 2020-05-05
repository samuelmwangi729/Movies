<!DOCTYPE html>
<html lang="en">
@include('layouts.header')
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    @include('layouts.nav')
    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="hs-text">
                        <div class="label"><span>Top Rated</span></div>
                        <h3>The Gaurdians And The Evil Dragon</h3>
                        <div class="ht-meta">
                            <img src="img/hero/meta-pic.jpg" alt="">
                            <ul>
                                <li style="color:yellow"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>
                                <li>Uploaded On May 01, 2020</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-6 offset-lg-1 offset-xl-2">
                    <div class="trending-post">
                        <div class="section-title">
                            <h5>Latest Videos</h5>
                        </div>
                        <div class="trending-slider owl-carousel">
                            <div class="single-trending-item text-center">
                                @foreach($videosOld as $videoOld)
                                <div class="trending-item">
                                    <div class="ti-pic">
                                        <img src="{{ asset($videoOld->VideoPoster) }}" alt="">
                                    </div>
                                   <span> <a style="color:white" href="{{ route('video.review',[$videoOld->VideoSlug]) }}">{{ $videoOld->VideoTitle }}</a></span><br>
                                    <span style="color:white"><strong style="color:red">Category</strong>&nbsp;{{ $videoOld->VideoCategory }}</span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/hero/hero-1.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-2.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-3.jpg"></div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Latest Preview Section Begin -->
    <section class="latest-preview-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h5>Categories</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="lp-slider owl-carousel">
                    @foreach($categories as $category)
                    <div class="col-lg-3">
                        <div class="lp-item">
                            <div class="lp-pic set-bg" data-setbg="{{$category->CategoryImage}}">
                            </div>
                            <div class="lp-text">
                                <h6><a href="{{ route('category.find',[$category->CategoryName]) }}">{{ $category->CategoryName }}</a></h6>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i> {{ ($category->created_at)->toFormattedDateString() }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Preview Section End -->

    <!-- Update News Section Begin -->
    <section class="update-news-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h5><span>News & update</span></h5>
                    </div>
                    <div class="tab-elem">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">All</a>
                            </li>
                        </ul><!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tabs-1" role="tabpanel">
                                <div class="row">
                                    <div class="un-slider owl-carousel">
                                        <div class="col-lg-12">
                                            @if($poster->count()>0)
                                            <div class="un-big-item set-bg" data-setbg="{{asset($poster[0]->VideoPoster)}}">
                                                <div class="ub-text">
                                                    <div class="label"><span>Latest</span></div>
                                                    <h5>
                                                        <a style="color:white" href="{{ route('video.review',[$poster[0]->VideoSlug]) }}">{{ $poster[0]->VideoTitle }}</a>
                                                    </h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> {{ ($poster[0]->created_at)->toFormattedDateString() }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            @else
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs-2" role="tabpanel">
                                <div class="row">
                                    <div class="un-slider owl-carousel">
                                        <div class="col-lg-12">
                                            <div class="un-big-item set-bg" data-setbg="img/news/news-1.jpg">
                                                <div class="ub-text">
                                                    <div class="label"><span>Reviews</span></div>
                                                    <h5><a href="#">Get one of our favorite nvme ssds, the 2tb samsung
                                                            970 evo, for $120 less than nomal</a></h5>
                                                    <ul>
                                                        <li>by <span>Admin</span></li>
                                                        <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-3.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-4.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-2.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="un-big-item set-bg" data-setbg="img/news/news-1.jpg">
                                                <div class="ub-text">
                                                    <div class="label"><span>Reviews</span></div>
                                                    <h5><a href="#">Get one of our favorite nvme ssds, the 2tb samsung
                                                            970 evo, for $120 less than nomal</a></h5>
                                                    <ul>
                                                        <li>by <span>Admin</span></li>
                                                        <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-3.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-4.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-2.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs-3" role="tabpanel">
                                <div class="row">
                                    <div class="un-slider owl-carousel">
                                        <div class="col-lg-12">
                                            <div class="un-big-item set-bg" data-setbg="img/news/news-1.jpg">
                                                <div class="ub-text">
                                                    <div class="label"><span>Reviews</span></div>
                                                    <h5><a href="#">Get one of our favorite nvme ssds, the 2tb samsung
                                                            970 evo, for $120 less than nomal</a></h5>
                                                    <ul>
                                                        <li>by <span>Admin</span></li>
                                                        <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-3.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-4.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-2.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="un-big-item set-bg" data-setbg="img/news/news-1.jpg">
                                                <div class="ub-text">
                                                    <div class="label"><span>Reviews</span></div>
                                                    <h5><a href="#">Get one of our favorite nvme ssds, the 2tb samsung
                                                            970 evo, for $120 less than nomal</a></h5>
                                                    <ul>
                                                        <li>by <span>Admin</span></li>
                                                        <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-3.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-4.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-2.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs-4" role="tabpanel">
                                <div class="row">
                                    <div class="un-slider owl-carousel">
                                        <div class="col-lg-12">
                                            <div class="un-big-item set-bg" data-setbg="img/news/news-1.jpg">
                                                <div class="ub-text">
                                                    <div class="label"><span>Reviews</span></div>
                                                    <h5><a href="#">Get one of our favorite nvme ssds, the 2tb samsung
                                                            970 evo, for $120 less than nomal</a></h5>
                                                    <ul>
                                                        <li>by <span>Admin</span></li>
                                                        <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-3.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-4.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-2.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="un-big-item set-bg" data-setbg="img/news/news-1.jpg">
                                                <div class="ub-text">
                                                    <div class="label"><span>Reviews</span></div>
                                                    <h5><a href="#">Get one of our favorite nvme ssds, the 2tb samsung
                                                            970 evo, for $120 less than nomal</a></h5>
                                                    <ul>
                                                        <li>by <span>Admin</span></li>
                                                        <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-3.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-4.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-2.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-option">
                        <div class="social-media">
                            <div class="section-title">
                                <h5>Social media</h5>
                            </div>
                            <ul>
                                <li>
                                    <div class="sm-icon"><i class="fa fa-facebook"></i></div>
                                    <span>Facebook</span>
                                    <div class="follow">1,2k Follow</div>
                                </li>
                                <li>
                                    <div class="sm-icon"><i class="fa fa-twitter"></i></div>
                                    <span>Twitter</span>
                                    <div class="follow">1,2k Follow</div>
                                </li>
                                <li>
                                    <div class="sm-icon"><i class="fa fa-youtube-play"></i></div>
                                    <span>Youtube</span>
                                    <div class="follow">2,3k Subs</div>
                                </li>
                                <li>
                                    <div class="sm-icon"><i class="fa fa-instagram"></i></div>
                                    <span>Instagram</span>
                                    <div class="follow">2,6k Follow</div>
                                </li>
                            </ul>
                        </div>
                        <div class="hardware-guides">
                            <div class="section-title">
                                <h5>{{ config('app.name') }} Dubbed</h5>
                            </div>
                            @foreach($poster as $p)
                            <div class="trending-item">
                                <div class="ti-pic">
                                    <img src="{{ $p->VideoPoster }}" alt="" height="60px" width="80px">
                                </div>
                                <div class="ti-text">
                                    <h6>
                                        <h5><a style="color:white" href="{{ route('video.review',[$p->VideoSlug]) }}">{{ $p->VideoTitle }}</a></h5>
                                    </h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i>
                                            {{ ($p->created_at)->toFormattedDateString() }}
                                        </li>
                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                    </ul>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Update News Section End -->

    <!-- Videos Guide Section Begin -->
    <section class="video-guide-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h5>Video Trailers</h5>
                    </div>
                </div>
            </div>
            <div class="tab-elem">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tabs-5" role="tabpanel">
                        <div class="row">
                            <div class="vg-slider owl-carousel">
                                {{-- Place the loop here  --}}
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-1.jpg">
                                                <a href="{{ url('videos/heri.mp4') }}"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>La Casa De Papel S05</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-2.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>FIRST EXPANSION</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-6" role="tabpanel">
                        <div class="row">
                            <div class="vg-slider owl-carousel">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-1.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                        PLATFORMS...</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-2.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                        PLATFORMS...</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-3.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-4.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-5.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-1.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                        PLATFORMS...</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-2.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                        PLATFORMS...</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-3.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-4.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-5.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-7" role="tabpanel">
                        <div class="row">
                            <div class="vg-slider owl-carousel">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-1.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                        PLATFORMS...</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-2.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                        PLATFORMS...</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-3.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-4.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-5.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-1.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                        PLATFORMS...</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-2.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                        PLATFORMS...</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-3.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-4.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-5.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-8" role="tabpanel">
                        <div class="row">
                            <div class="vg-slider owl-carousel">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-1.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                        PLATFORMS...</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-2.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                        PLATFORMS...</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-3.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-4.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-5.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-1.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                        PLATFORMS...</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-2.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                        PLATFORMS...</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-3.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-4.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-5.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Videos Guide Section End -->
    @include('layouts.footer')
