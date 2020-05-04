
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
                            <form>
                                <fieldset>
                                    <legend style="color:white;border:2px solid red" class="text-center">
                                      <i class="fa fa-credit-card" style="color:blue"></i>&nbsp;Pay With Card
                                    </legend>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label style="color:white" for="CardNumber" class="label-control"><i class="fa fa-tags"></i>&nbsp;Card Number</label>
                                                <input type="number" class="form-control input-sm" name="CardNumber" placeholder="eg. 1111222233334444">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                           <label style="color:white" for="cvv" class="label-control"><i class="fa fa-id-card"></i>&nbsp;CVV Number</label>
                                           <input type="number" class="form-control input-sm" name="Cvv" placeholder="eg.765">
                                        </div>
                                        <div class="col-sm-6">
                                           <label style="color:white" for="expiry" class="label-control"><i class="fa fa-calendar">&nbsp;</i>Expiry Date</label>
                                           <input type="date" name="ExpiryDate" class="form-control">
                                        </div>
                                    </div><br>
                                    <button class="btn btn-warning btn-sm btn-block" style="font-size:15px;font-weight:bold;">Renew Subscription</button>
                                </fieldset>
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
