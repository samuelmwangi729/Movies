
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
                            <form id="myCCForm" action="payment.php" method="post">
                                <input id="token" name="token" type="hidden" value="">
                                <div>
                                    <label>
                                        <span>Card Number</span>
                                    </label>
                                    <input id="ccNo" type="text" size="20" value="" autocomplete="off" required />
                                </div>
                                <div>
                                    <label>
                                        <span>Expiration Date (MM/YYYY)</span>
                                    </label>
                                    <input type="text" size="2" id="expMonth" required />
                                    <span> / </span>
                                    <input type="text" size="2" id="expYear" required />
                                </div>
                                <div>
                                    <label>
                                        <span>CVC</span>
                                    </label>
                                    <input id="cvv" size="4" type="text" value="" autocomplete="off" required />
                                </div>
                                <input type="submit" value="Submit Payment">
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
