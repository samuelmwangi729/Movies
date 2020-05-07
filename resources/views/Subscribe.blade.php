
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
                                <span>Subscribe</span>
                            </div>
                            <h3>You are not Yet Subscribed for the Category <span style="color:red">{{ $vidCategory }}</span></h3>
                        </div>
                        <div class="dt-desc">
                            <p>Please Subscribe for ${{ $Price }} per month to enjoy this Category</p>
                        </div>
                        <div class="col-sm-8 col-sm-offset-6">
                            <form action='https://www.2checkout.com/checkout/purchase' method='post'>
                                <input type='hidden' name='sid' value='901423410' />
                                <input type='hidden' name='mode' value='2CO' />
                                <input type='hidden' name='li_0_type' value='product' />
                                <input type='hidden' name='li_0_name' value='invoice123' />
                                <input type='hidden' name='li_0_price' value='25.99' />
                                <input type='hidden' name='card_holder_name' value='Checkout Shopper' />
                                <input type='hidden' name='street_address' value='123 Test Address' />
                                <input type='hidden' name='street_address2' value='Suite 200' />
                                <input type='hidden' name='city' value='Columbus' />
                                <input type='hidden' name='state' value='OH' />
                                <input type='hidden' name='zip' value='43228' />
                                <input type='hidden' name='country' value='USA' />
                                <input type='hidden' name='email' value='example@2co.com' />
                                <input type='hidden' name='phone' value='614-921-2450' />
                                <input name='submit' type='submit' value='Checkout' />
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
    <script src="https://www.2checkout.com/static/checkout/javascript/direct.min.js"></script>
    <!-- Details Post Section End -->
@include('layouts.footer')
