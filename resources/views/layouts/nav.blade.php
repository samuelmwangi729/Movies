
    <!-- Humberger Menu Begin -->
    <div class="humberger-menu-overlay"></div>
    <div class="humberger-menu-wrapper">
        <div class="hw-logo">
            <a href="/" style="color:white;font-family: 'Times New Roman', Times, serif;font-size:25px;text-shadow: 2px 2px blue,4px 4px black">{{ config('app.name') }}</a>
        </div>
        <div class="hw-menu mobile-menu">
            <ul>
                <li><a href="/">Home</a></li>
                <li>
                    <a href="#"><span>Top Categories <i class="fa fa-angle-down"></i></span></a>
                    <ul class="dropdown">
                        <ul class="dropdown">
                            @foreach($categories as $category)
                            <li><a  id="category" href="{{ route('category.find',[$category->CategoryName]) }}" style="font-size:10px !important">{{ $category->CategoryName }}</a></li>
                            @endforeach
                        </ul>
                    </ul>
                </li>
                <li><a href="#">Videos <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown">
                        <li><a id="category"  style="font-size:10px !important" href="/">Top Rated</a></li>
                        <li><a id="category" style="font-size:10px !important" href="/">Trending</a></li>
                        <li><a id="category" style="font-size:10px !important" href="/">New</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="hw-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-youtube-play"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
    <!-- Humberger Menu End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="ht-options">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8">
                        <div class="ht-widget">
                            <ul>
                                @if(Auth::check())
                                <li style="color:white"><a href="/home" style="color:white">My Account</a></li>
                                @else
                                <li class="signup-switch signup-open"><i class="fa fa-user-plus"></i>Sign up</li>
                                <li class="signin-switch signin-open" id="signin"><i class="fa fa-sign-in"></i>Sign In</li>
                                <li class="forgot-switch forgot-open" id="forgot" data-toggle="modal" data-target="#modal-default"><i class="fa fa-check-circle"></i>Forgot Password</li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <div class="ht-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-envelope"></i>&nbsp;Nitinr54321@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-options">
            <div class="container">
                <div class="humberger-menu humberger-open hidden-md hidden-lg">
                    <i class="fa fa-bars"></i>
                </div>
                &nbsp;&nbsp;&nbsp;
               <a href="/" style="color:white;font-family: 'Times New Roman', Times, serif;font-size:25px;text-shadow: 2px 2px blue,4px 4px black">{{ config('app.name') }}</a>
                <div class="nav-search search-switch">
                    <i class="fa fa-search"></i>
                </div>
                <div class="nav-menu">

                    <ul style="margin-top:-35px !important">
                        <li class="mega-menu"><a href="#"><span>Featured Videos <i class="fa fa-angle-down"></i></span></a>
                            <div class="megamenu-wrapper" style="margin-top:-150px">
                                <div class="mw-post">
                                    @foreach($featured as $feature)
                                    <div class="mw-post-item">
                                        <div class="mw-pic">
                                            <img src="{{ asset($feature->VideoPoster) }}" alt="" height="132px" width="198px" onclick="window.open('{{ route('video.review',[$feature->VideoSlug]) }}','_parent')">
                                        </div>
                                        <div class="mw-text">
                                            <h6>
                                                <a style="color:white" href="{{ route('video.review',[$feature->VideoSlug]) }}">{{ $feature->VideoTitle }}</a>
                                            </h6>
                                            <ul>
                                                <li><i class="fa fa-clock-o"></i> {{ ($feature->created_at)->toFormattedDateString() }}</li>
                                                <li style="color:yellow"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#"><span>Top Categories <i class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown">
                                @foreach($categories as $category)
                                <li><a  id="category" href="{{ route('category.find',[$category->CategoryName]) }}" style="font-size:10px !important">{{ $category->CategoryName }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="#"><span>Videos <i class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown">
                                <li><a id="category"  style="font-size:10px !important" href="/">Top Rated</a></li>
                                <li><a id="category" style="font-size:10px !important" href="/">Trending</a></li>
                                <li><a id="category" style="font-size:10px !important" href="/">New</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->
    @if($errors->all())
    <div class="alert alert-danger" style="background-color:yellow !important">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        @foreach ($errors->all() as $error)
        <span>{{ $error }}</span><br>
        @endforeach
    </div>
    @endif
    @if(Session::has('error'))</br>
    <div class="alert alert-danger text-center" style="background-color:yellow !important">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <i class="fa fa-times-circle" style="color:red"></i>&nbsp;{{ Session::get('error') }}
    </div>
    @endif
    @if(Session::has('success'))</br>
    <div class="alert alert-success text-center" style="background-color:yellow !important">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <i class="fa fa-check-circle" style="color:red"></i>&nbsp;{{ Session::get('success') }}
    </div>
    @endif
