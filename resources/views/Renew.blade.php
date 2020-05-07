
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
                            <form id="myCCForm" action="/callback" method="post" class="form-horizontal">
                                @csrf
                                <input id="token" name="token" type="hidden" value="">
                                <div class="form-group">
                                    <label class="label-control" style="color:red;font-weight:bold"><i class="fa fa-credit-card"></i>
                                        <span>Card Number</span>
                                    </label>
                                    <input id="ccNo" class="form-control" type="text" size="20" value="" autocomplete="off" required maxlength="16" placeholder="Card Number"/>
                                </div>
                                <div class="form-group">
                                    <label class="label-control" style="color:red;font-weight:bold"> <i class="fa fa-calendar"></i>
                                        Expiration Date (MM/YYYY)
                                    </label>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="number" size="2" class="form-control input-sm" id="expMonth" maxlength="2" required placeholder="Expiry Month" />
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="number" size="2" class="form-control input-sm" id="expYear" maxlength="4" required placeholder="Expiry Year" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="label-control" style="color:red;font-weight:bold"><i class="fa fa-tags"></i>
                                        <span>CVC</span>
                                    </label>
                                    <input id="cvv" size="4" type="text" value="" class="form-control" autocomplete="off" required placeholder="the 3 numbers at the back of your card" />
                                </div>
                                <input type="submit" value="Submit Payment" class="btn btn-success btn-block">
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
<script src="https://www.2checkout.com/checkout/api/2co.min.js"></script>

<script>
    // Called when token created successfully.
    var successCallback = function(data) {
        var myForm = document.getElementById('myCCForm');

        // Set the token as the value for the token input
        myForm.token.value = data.response.token.token;

        // IMPORTANT: Here we call `submit()` on the form element directly instead of using jQuery to prevent and infinite token request loop.
        myForm.submit();
    };

    // Called when token creation fails.
    var errorCallback = function(data) {
        if (data.errorCode === 200) {
            tokenRequest();
        } else {
            alert(data.errorMsg);
        }
    };

    var tokenRequest = function() {
        // Setup token request arguments
        var args = {
            sellerId: "901423410",
            publishableKey: "5C4786F6-E5F9-43C6-ADBD-2A4A1A6FD487",
            ccNo: $("#ccNo").val(),
            cvv: $("#cvv").val(),
            expMonth: $("#expMonth").val(),
            expYear: $("#expYear").val()
        };

        // Make the token request
        TCO.requestToken(successCallback, errorCallback, args);
    };

    $(function() {
        // Pull in the public encryption key for our environment
        TCO.loadPubKey('sandbox');

        $("#myCCForm").submit(function(e) {
            // Call our token request function
            tokenRequest();

            // Prevent form from submitting
            return false;
        });
    });
</script>
