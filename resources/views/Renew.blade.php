
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
                                <span>Renew</span>
                            </div>
                            <h3>Your Subscription for  Category <span style="color:red">{{ $vidCategory }}</span> Has Expired</h3>
                        </div>
                        <div class="dt-desc">
                            <p>Please Renew for ${{ $Price }} to Continue  enjoying Videos in this Category</p>
                        </div>
                        <div class="col-sm-3 col-sm-offset-5">
                            <form id="myCCForm" action="/callback" method="post">
                                @csrf
                               <input type="hidden" name="category" value="{{ $vidCategory }}">
                                <script src="https://checkout.stripe.com/checkout.js"
                                class="stripe-button"
                                data-key="pk_test_Qqv81EyzUr0eu9WgXOx19r5500kmImXrAx"
                                data-amount={{ $Price*100 }}
                                data-name={{ config('app.name') }}
                                data-description="Subscribe for the Category"
                                data-image="https://images.pexels.com/photos/545065/pexels-photo-545065.jpeg?cs=srgb&dl=blur-cash-close-up-dollars-545065.jpg&fm=jpg"
                                data-locale="auto"
                                data-currency="usd"
                                ></script>
                            </form>
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
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
