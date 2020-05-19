
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
                              <a href="https://www.instamojo.com/@Vildstream/l4a589934f4af4e06b1356c6fe91fae0c/" rel="im-checkout" data-text="Pay" data-css-style="color:#ffffff; background:#fccb00; width:180px; border-radius:30px" data-layout="vertical"></a>
                        <div class="col-sm-3 col-sm-offset-5">
                            {{ Session::flash('category',$vidCategory) }}
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
    </section>    <!-- Details Post Section End -->
@include('layouts.footer')
<script src="https://js.instamojo.com/v1/button.js"></script>
    <script>
      /* Start client-defined Callback Handler Functions */
      function onOpenHandler () {
        // alert('Payments Modal is Opened');
      }

      function onCloseHandler () {
        // alert('Payments Modal is Closed');
      }

      function onPaymentSuccessHandler (response) {
        window.open('/callback/{{ Session::get('category') }}','_parent')
      }

      function onPaymentFailureHandler (response) {
        alert('Payment Failure');
        console.log('Payment Failure Response', response);
      }
      /* End client-defined Callback Handler Functions */

      /* Configuring Handlers */
      Instamojo.configure({
        handlers: {
          onOpen: onOpenHandler,
          onClose: onCloseHandler,
          onSuccess: onPaymentSuccessHandler,
          onFailure: onPaymentFailureHandler
        }
      });

      function onButtonClick() {
        Instamojo.open('https://imjo.in/3zYSDT');
      }
    </script>
