
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
                                <input type='hidden' name='sid' value='901423455' >
                                <input type='hidden' name='mode' value='2CO' >
                                <input type='hidden' name='li_0_type' value='CategorySubscription' >
                                <input type='hidden' name='li_0_name' value='{{ $vidCategory }}' >
                                <input type='hidden' name='li_0_product_id' value='{{ Str::random(12) }}' >
                                <input type='hidden' name='li_0__description' value='For the Subscription of the product' >
                                <input type='hidden' name='li_0_price' value='10.00' >
                                <input type='hidden' name='li_0_quantity' value='2' >
                                <input type='hidden' name='li_0_tangible' value='Y' >
                                <input type='hidden' name='li_1_type' value='shipping' >
                                <input type='hidden' name='li_1_name' value='Example Shipping Method' >
                                <input type='hidden' name='li_1_price' value='1.50' >
                                <input type='hidden' name='li_2_type' value='coupon' >
                                <input type='hidden' name='li_2_name' value='Example Coupon' >
                                <input type='hidden' name='li_2_price' value='1.00' >
                                <input type='hidden' name='li_3_type' value='tax' >
                                <input type='hidden' name='li_3_name' value='Example Tax' >
                                <input type='hidden' name='li_3_price' value='0.50' >
                                <input type='hidden' name='card_holder_name' value='Checkout Shopper' >
                                <input type='hidden' name='street_address' value='123 Test St >
                                <input type='hidden' name='street_address2' value='Suite 200' >
                                <input type='hidden' name='city' value='Columbus' >
                                <input type='hidden' name='state' value='OH' >
                                <input type='hidden' name='zip' value='43228' >
                                <input type='hidden' name='country' value='USA' >
                                <input type='hidden' name='email' value='example@2co.com' >
                                <input type='hidden' name='phone' value='614-921-2450' >
                                <input type='hidden' name='phone_extension' value='197' >
                                <input type='hidden' name='ship_name' value='Gift Receiver' >
                                <input type='hidden' name='ship_street_address' value='1234 Address Road' >
                                <input type='hidden' name='ship_street_address2' value='Apartment 123' >
                                <input type='hidden' name='ship_city' value='Columbus' >
                                <input type='hidden' name='ship_state' value='OH' >
                                <input type='hidden' name='ship_zip' value='43235' >
                                <input type='hidden' name='ship_country' value='USA' >
                                <input name='submit' type='submit' value='Checkout' >
                                </form>
                            {{-- <form>
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
                                    <button class="btn btn-warning btn-sm btn-block">Pay</button>
                                </fieldset>
                            </form> --}}
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
