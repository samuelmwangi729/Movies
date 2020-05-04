
    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-about">
                        <div class="fa-logo">
            <a href="/" style="color:white;font-family: 'Times New Roman', Times, serif;font-size:40px;text-shadow: 2px 2px blue,4px 4px black !important">{{ config('app.name') }}</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua lacus vel facilisis.</p>
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
                        <div class="ec-item">
                            <div class="ec-pic">
                                <img src="{{ asset('img/trending/editor-1.jpg') }}" alt="">
                            </div>
                            <div class="ec-text">
                                <h6><a href="#">The Brother</a>
                                </h6>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                    <li><i class="fa fa-comment-o"></i> 12</li>
                                </ul>
                            </div>
                        </div>
                        <div class="ec-item">
                            <div class="ec-pic">
                                <img src="{{ asset('img/trending/editor-2.jpg') }}" alt="">
                            </div>
                            <div class="ec-text">
                                <h6><a href="#">The Invasion</a>
                                </h6>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i> May 01, 2020</li>
                                    <li><i class="fa fa-comment-o"></i> 12</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="tags-cloud">
                        <div class="section-title">
                            <h5>Categories</h5>
                        </div>
                        <div class="tag-list">
                            <a href="#"><span>Gaming</span></a>
                            <a href="#"><span>People</span></a>
                            <a href="#"><span>Moviews</span></a>
                            <a href="#"><span>Education</span></a>
                            <a href="#"><span>Technology</span></a>
                            <a href="#"><span>Simulation</span></a>
                            <a href="#"><span>Lifestyle</span></a>
                            <a href="#"><span>Scientific</span></a>
                            <a href="#"><span>References</span></a>
                            <a href="#"><span>Role-playing</span></a>
                            <a href="#"><span>Blogs</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ca-text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;{{ date('Y') }}All rights reserved |SmartSoft Kenya
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ca-links">
                            <a href="#">About</a>
                            <a href="#">Subscribe</a>
                            <a href="#">Contact</a>
                            <a href="#">Support</a>
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
    <!-- Sign Up Section End -->

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
</body>

</html>
