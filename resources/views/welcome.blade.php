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
                            <h5>Movie Reviews</h5>
                        </div>
                        <div class="trending-slider owl-carousel">
                            <div class="single-trending-item">
                                <div class="trending-item">
                                    <div class="ti-pic">
                                        <img src="img/trending/trending-5.jpg" alt="">
                                    </div>
                                    <div class="ti-text">
                                        <h6><a href="#">Thriling and exciting Movie.Dont watch it Alone</a>
                                        </h6>
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                            <li><i class="fa fa-comment-o"></i> 12</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="trending-item">
                                    <div class="ti-pic">
                                        <img src="img/trending/trending-6.jpg" alt="">
                                    </div>
                                    <div class="ti-text">
                                        <h6><a href="#">I really Never Liked Animations but this, I loved it.</a></h6>
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                            <li><i class="fa fa-comment-o"></i> 12</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="trending-item">
                                    <div class="ti-pic">
                                        <img src="img/trending/trending-7.jpg" alt="">
                                    </div>
                                    <div class="ti-text">
                                        <h6><a href="#">Best Sci-Fi Movie Available in the market</a>
                                        </h6>
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                            <li><i class="fa fa-comment-o"></i> 12</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="trending-item">
                                    <div class="ti-pic">
                                        <img src="img/trending/trending-8.jpg" alt="">
                                    </div>
                                    <div class="ti-text">
                                        <h6><a href="#">Jalopy developer is making a game where you 'build stuff...</a>
                                        </h6>
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
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Featured</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Hardware</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">Reviews</a>
                            </li> --}}
                        </ul><!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tabs-1" role="tabpanel">
                                <div class="row">
                                    <div class="un-slider owl-carousel">
                                        <div class="col-lg-12">
                                            <div class="un-big-item set-bg" data-setbg="img/news/news-1.jpg">
                                                <div class="ub-text">
                                                    <div class="label"><span>Reviews</span></div>
                                                    <h5><a href="#">
                                                        The Raid. Its now Here With Us. Check It Out
                                                        </a>
                                                    </h5>
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
                                                            <h6><a href="#">Downwell tactics are coming
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
                                                            <h6><a href="#"> space hulk: tactics are coming
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
                                                    <h5><a href="#">Mortal Combat introduces tanks into its Update. Find Out How</a></h5>
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
                                                            <h6><a href="#">
                                                                Play Mortal Combat Using Raven and Win!!!
                                                                </a></h6>
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
                                                            <h6><a href="#">
                                                                Peter Parker new Moview Trailer
                                                            </a></h6>
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
                                                            <h6><a href="#">The Visitor. Man From Nowhere</a></h6>
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
                                <h5>{{ config('app.name') }} Blog</h5>
                            </div>
                            <div class="trending-item">
                                <div class="ti-pic">
                                    <img src="img/trending/trending-5.jpg" alt="">
                                </div>
                                <div class="ti-text">
                                    <h6><a href="#">Money Heist S04 Was simply over rated</a>
                                    </h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="trending-item">
                                <div class="ti-pic">
                                    <img src="img/trending/trending-6.jpg" alt="">
                                </div>
                                <div class="ti-text">
                                    <h6><a href="#">Dhoom S05 to be released Soon.</a></h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="trending-item">
                                <div class="ti-pic">
                                    <img src="img/trending/trending-7.jpg" alt="">
                                </div>
                                <div class="ti-text">
                                    <h6><a href="#">What Motivated Salman Khan in "JAIHO" ?</a>
                                    </h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="trending-item">
                                <div class="ti-pic">
                                    <img src="img/trending/trending-8.jpg" alt="">
                                </div>
                                <div class="ti-text">
                                    <h6><a href="#">First Hindi Kungfu Movie Leaked!!!</a></h6>
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
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-3.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>Fast And Furious 12</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-4.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>Black Panther</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-5.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>Guardians of The Galaxy</h6>
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
                                                    <h5>THROUGH THE EDGE'.</h5>
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
                                                    <h5>A Million ways to die in the East</h5>
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
                                                    <h6>The BodyGuard</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-4.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>The Fist of the Legend</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-5.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>The Handsome Deamon</h6>
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

    <!-- Instagram Post Section Begin -->
    <section class="instagram-post-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h5>Gaming News</h5>
                    </div>
                    <div class="ip-item">
                        <div class="ip-pic">
                            <img src="img/instagram/insta-1.jpg" alt="">
                        </div>
                        <div class="ip-text">
                            <div class="label"><span>Reviews</span></div>
                            <h5><a href="#">Here's an hour of side-quests from The Outer Worlds...</a></h5>
                            <ul>
                                <li>by <span>Admin</span></li>
                                <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                <li><i class="fa fa-comment-o"></i> 20</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices...</p>
                        </div>
                    </div>
                    <div class="ip-item">
                        <div class="ip-pic">
                            <img src="img/instagram/insta-2.jpg" alt="">
                        </div>
                        <div class="ip-text">
                            <div class="label"><span>Windows</span></div>
                            <h5><a href="#">Infinity Ward's focus isn't on battle royale, Call of...</a></h5>
                            <ul>
                                <li>by <span>Admin</span></li>
                                <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                <li><i class="fa fa-comment-o"></i> 20</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices...</p>
                        </div>
                    </div>
                    <div class="ip-item">
                        <div class="ip-pic">
                            <img src="img/instagram/insta-3.jpg" alt="">
                        </div>
                        <div class="ip-text">
                            <div class="label"><span>Hardware</span></div>
                            <h5><a href="#">Capcom asks select fans to test new Resident Evil game</a></h5>
                            <ul>
                                <li>by <span>Admin</span></li>
                                <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                <li><i class="fa fa-comment-o"></i> 20</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices...</p>
                        </div>
                    </div>
                    <div class="ip-item">
                        <div class="ip-pic">
                            <img src="img/instagram/insta-4.jpg" alt="">
                        </div>
                        <div class="ip-text">
                            <div class="label"><span>Playstation</span></div>
                            <h5><a href="#">Teamfight Tactics is in chaos after today's patch...</a></h5>
                            <ul>
                                <li>by <span>Admin</span></li>
                                <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                <li><i class="fa fa-comment-o"></i> 20</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices...</p>
                        </div>
                    </div>
                    <div class="pagination-item">
                        <a href="#"><span>1</span></a>
                        <a href="#"><span>2</span></a>
                        <a href="#"><span>3</span></a>
                        <a href="#"><span>Next</span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7">
                    <div class="sidebar-option">
                        <div class="insta-media">
                            <div class="section-title">
                                <h5>Moview Posters</h5>
                            </div>
                            <div class="insta-pic">
                                <img src="img/instagram/ip-1.jpg" alt="">
                                <img src="img/instagram/ip-2.jpg" alt="">
                                <img src="img/instagram/ip-3.jpg" alt="">
                                <img src="img/instagram/ip-4.jpg" alt="">
                            </div>
                        </div>
                        <div class="best-of-post">
                            <div class="section-title">
                                <h5>Best of</h5>
                            </div>
                            <div class="bp-item">
                                <div class="bp-loader">
                                    <div class="loader-circle-wrap">
                                        <div class="loader-circle">
                                            <span class="circle-progress-1" data-cpid="id-1" data-cpvalue="95"
                                                data-cpcolor="#c20000"></span>
                                            <div class="review-point">9.5</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bp-text">
                                    <h6><a href="#">This gaming laptop with a GTX 1660...</a></h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bp-item">
                                <div class="bp-loader">
                                    <div class="loader-circle-wrap">
                                        <div class="loader-circle">
                                            <span class="circle-progress-1" data-cpid="id-2" data-cpvalue="85"
                                                data-cpcolor="#c20000"></span>
                                            <div class="review-point">8.5</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bp-text">
                                    <h6><a href="#">This gaming laptop with a GTX 1660...</a></h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bp-item">
                                <div class="bp-loader">
                                    <div class="loader-circle-wrap">
                                        <div class="loader-circle">
                                            <span class="circle-progress-1" data-cpid="id-3" data-cpvalue="80"
                                                data-cpcolor="#c20000"></span>
                                            <div class="review-point">8.0</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bp-text">
                                    <h6><a href="#">This gaming laptop with a GTX 1660...</a></h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bp-item">
                                <div class="bp-loader">
                                    <div class="loader-circle-wrap">
                                        <div class="loader-circle">
                                            <span class="circle-progress-1" data-cpid="id-4" data-cpvalue="75"
                                                data-cpcolor="#c20000"></span>
                                            <div class="review-point">7.5</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bp-text">
                                    <h6><a href="#">This gaming laptop with a GTX 1660...</a></h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="subscribe-option">
                            <div class="section-title">
                                <h5>Subscribe</h5>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor.</p>
                            <form action="#">
                                <input type="text" placeholder="Name">
                                <input type="text" placeholder="Email">
                                <button type="submit"><span>Subscribehh</span></button>
                            </form>
                        </div>
                    </div>
                </div>
                @include('layouts.sub')
            </div>
        </div>
    </section>
    <!-- Instagram Post Section End -->
    @include('layouts.footer')
