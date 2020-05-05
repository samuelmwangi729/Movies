<!DOCTYPE html>
<html lang="zxx">
@include('layouts.header')

<body>
 @include('layouts.nav')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg spad" data-setbg="{{ asset('img/megamenu/breadcrumb-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h3>Category: <span>{{ $videos[0]->VideoCategory }}</span></h3>
                        <div class="bt-option">
                            <a href="#">Home</a>
                            <a href="#">Categories</a>
                            <span>{{ $videos[0]->VideoCategory }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Categories Grid Section Begin -->
    <section class="categories-grid-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 p-0">
                    <div class="row">
                        @foreach ($videos as $video)
                            <div class="col-lg-6">
                                <div class="cg-item">
                                    <div class="cg-pic set-bg" data-setbg="{{ asset($video->VideoPoster) }}">
                                        <div class="label"><span>{{ $video->VideoCategory}}</span></div>
                                    </div>
                                    <div class="cg-text">
                                        <h5><a href="{{ route('video.review',[$video->VideoSlug]) }}">{{ $video->VideoTitle }}</a></h5>
                                        <ul>
                                            <li>by <span>Admin</span></li>
                                            <li><i class="fa fa-clock-o"></i> {{ ($video->created_at)->toFormattedDateString() }}</li>
                                        </ul>
                                        <p>{{ $video->VideoDescription }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="pagination-item">
                        <a href="#"><span>1</span></a>
                        <a href="#"><span>2</span></a>
                        <a href="#"><span>3</span></a>
                        <a href="#"><span>Next</span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 p-0">
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
                        @include('layouts.sub')
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Grid Section End -->

 @include('layouts.footer')
