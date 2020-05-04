
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
                        <div class="col-sm-8 col-sm-offset-6">
                            <form action='https://www.2checkout.com/checkout/purchase' method='post'>
                                <input type='hidden' name='sid' value='1303908' />
                                <input type='hidden' name='mode' value='2CO' />
                                <input type='hidden' name='li_0_type' value='product' />
                                <input type='hidden' name='li_0_name' value='Monthly Subscription' />
                                <input type='hidden' name='li_0_price' value='{{ $Price }}' />
                                <input type='hidden' name='li_0_recurrence' value='1 Month' />
                                <input name='submit' type='submit' value='Renew' class="btn btn-warning" />
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
