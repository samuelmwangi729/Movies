
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
                            <form id="myCCForm" action="/callback" method="post">
                                @csrf
                                <input id="token" name="token" type="hidden" value="">
                                <div>
                                    <label>
                                        <span>Card Number</span>
                                    </label>
                                    <input id="ccNo" class="form-control" type="text" size="20" value="" autocomplete="off" required maxlength="16"/>
                                </div>
                                <div>
                                    <label>
                                        <span>Expiration Date (MM/YYYY)</span>
                                    </label>
                                    <input type="text" size="2" id="expMonth" maxlength="2" required />
                                    <span> / </span>
                                    <input type="text" size="2" id="expYear" maxlength="4" required />
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
            publishableKey: "B1D49618-E8CA-4223-8F1D-BFDCD3AD59C6",
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
    <!-- Details Post Section End -->
@include('layouts.footer')
