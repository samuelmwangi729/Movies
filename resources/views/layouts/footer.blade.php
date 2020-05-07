
    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-about">
                        <div class="fa-logo">
            <a href="/" style="color:white;font-family: 'Times New Roman', Times, serif;font-size:40px;text-shadow: 2px 2px blue,4px 4px black !important">{{ config('app.name') }}</a>
                        </div>
                        <p>{{config('app.name ')}} is a category based paid streaming service</p>
                        <div class="fa-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="editor-choice">
                        <div class="section-title">
                            <h5>Editor's Choice</h5>
                        </div>
                        @foreach (App\Trailer::orderBy('id','asc')->get()->take(2) as $editor)
                        <div class="ec-item">
                            <div class="ec-pic">
                                <img src="{{ asset($editor->TrailerPoster) }}" alt="" width="120px" height="80px">
                            </div>
                            <div class="ec-text">
                                <h6><a href="#">{{ $editor->TrailerTitle }}</a>
                                </h6>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i> {{ ($editor->created_at)->toFormattedDateString() }}</li>
                                </ul>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="tags-cloud">
                        <div class="section-title">
                            <h5>Categories</h5>
                        </div>
                        <div class="tag-list">
                            @foreach($categories as $category)
                            <a  id="category" href="{{ route('category.find',[$category->CategoryName]) }}" style="font-size:10px !important">{{ $category->CategoryName }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Sign Up Section Begin -->
    <div class="signup-section">
        <div class="signup-close"><i class="fa fa-close"></i></div>
        <div class="signup-text">
            <div class="container">
                <div class="signup-title">
                    <h2>Sign up</h2>
                    <p>Fill out the form below to recieve a free and confidential</p>
                </div>
                <form method="POST" action="{{ route('register') }}" class="signup-form" id="sform">
                    @csrf
                    <input type="hidden" name="recaptcha" id="recaptcha">
                    <div class="sf-input-list">
                        <span id="errName"></span>
                        <input type="text" class="input-value" name="name" id="name" placeholder="UserName*">
                        <span id="errEmail"></span>
                        <input type="text" class="input-value" name="email" id="email" placeholder="Email Address">
                        <span id="errPassword"></span>
                        <input type="password" class="input-value" name="password" id="password" placeholder="Password">
                        <span id="errCPassword"></span>
                        <input type="password" class="input-value" name="password_confirmation" id="cpassword" placeholder="Confirm Password">
                    </div>
                    <div class="radio-check">
                        <label for="rc-agree">I agree with the term & conditions
                            <input type="checkbox" id="rc-agree" checked>
                            <span class="checkbox"></span>
                        </label>
                    </div>
                    <button type="submit" id="signUp"><span>REGISTER NOW</span></button>
                </form>
            </div>
        </div>
    </div>
    <div class="signin-section">
        <div class="signin-close"><i class="fa fa-close"></i></div>
        <div class="signin-text">
            <div class="container">
                <div class="signin-title text-center">
                    <h2><i class="fa fa-sign-in"></i>Sign In</h2>
                    <p>Sign In to  your {{ config('app.name') }} Account</p>
                </div>
                <form action="{{route('login')}}"  method="post" class="signin-form" style="margin-top:100px">
                    @csrf
                    <div class="sf-input-list align-items-center" >
                        <input type="email" class="input-value" name="email" placeholder="Email Address">
                        <input type="password" class="input-value" name="password" placeholder="Password">
                    </div>
                    <button type="submit"><span>Login</span></button>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#9d0303;">
              <h4 class="modal-title text-center" style="color:white;font-weight:bold">Reset Your Password</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="form">
                    <form action="{{route('reset')}}"  method="post" class="signin-form">
                        @csrf
                        <div class="container" >
                            <input type="email" class="form-control" name="Email" placeholder="Email Address">
                            <br><button type="submit" class="btn btn-success"><span>Reset</span></button>
                        </div><br>

                    </form>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
    <!--forgot section-->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/circle-progress.min.js') }}"></script>
    <script src="{{ asset('js/jquery.barfiller.js') }}"></script>
    <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5eaf8aaf95612e10"></script>
    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.sitekey') }}"></script>
    <script>
            grecaptcha.ready(function() {
                grecaptcha.execute('{{ config('services.recaptcha.sitekey') }}', {action: 'contact'}).then(function(token) {
                    if (token) {
                    document.getElementById('recaptcha').value = token;
                    }
                });
            });
    </script>
</body>

</html>
