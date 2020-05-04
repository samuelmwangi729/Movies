
<!DOCTYPE html>
<html lang="zxx">
@include('layouts.header')
<body>
    @include('layouts.nav')
    <!-- Details Post Section Begin -->
    <section class="details-post-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 p-0">
                    <div class="details-text typography-page">
                        <div class="dt-breadcrumb">
                            <div class="dt-bread-option">
                                <a href="#">Home</a>
                                <span>Review</span>
                            </div>
                            <h3>{{ $video->VideoTitle }}</h3>
                        </div>
                        <div class="dt-desc">
                            <p><button class="btn btn-sm btn-flat" style="background-color:red;color:white"><i class="fa fa-thumbs-up"></i>Like</button>&nbsp;
                                <button class="btn btn-sm btn-flat" style="background-color:#4943cf;color:white"><i class="fa fa-share-alt"></i>&nbsp;Share</button>
                                <button class="btn btn-sm btn-flat" style="background-color:green;color:white"><i class="fa fa-whatsapp"></i>Whatsapp</button>&nbsp;
                                <button class="btn btn-sm btn-flat" style="background-color:#4943cf;color:white"><i class="fa fa-facebook"></i>&nbsp;Share</button>
                                <span style="background-color:#4943cf;color:white"><i class="fa fa-clipboard">Copy Link</i>&nbsp;{{ url($video->VideoSlug) }}</span>

                            </p>
                        </div>
                        <div class="dt-pic-item">
                            <div class="col-md-6">
                                <div class="vg-item large-vg set-bg" data-setbg="{{ asset($video->VideoPoster) }}">
                                    <a href="{{ asset($video->VideoFile) }}"
                                        class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                    <div class="vg-text">
                                        <h5>{{ $video->VideoTitle }}</h5>
                                        <ul style="color:red">
                                            <li><i class="fa fa-clock-o"></i> {{ ($video->created_at)->toFormattedDateString() }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="dp-text">
                                <p>{{ $video->VideoDescription }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7">
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
    <!-- Details Post Section End -->
@include('layouts.footer')
