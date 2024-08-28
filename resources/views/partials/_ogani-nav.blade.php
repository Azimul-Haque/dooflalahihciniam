    <style type="text/css">
        .call-to-this-number a:hover {
            color: black;
        }
    </style>

    <!-- Page Preloder -->
        <!-- <div id="preloder">
            <div class="loader"></div>
        </div> -->

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="{{ route('product.index') }}"><img src="{{ asset('images/logo.png') }}" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                {{-- mobile view --}}
                {{-- mobile view --}}
                <li>
                    @if(Auth::user())
                        <a href="{{ route('user.profile', Auth::user()->unique_key) }}#my_wishlist"><i class="fa fa-heart"></i> 
                            <span>{{ Auth::user()->wishlists->count() }}</span>
                        </a>
                    @else 
                        <a href="#"><i class="fa fa-heart"></i> <span></span></a>
                    @endif
                </li>
                <li>
                    <a href="{{ route('product.shoppingcart') }}"><i class="fa fa-shopping-bag"></i>
                        <span id="totalInBagMobile">
                            @if(Session::has('cart'))
                                {{ Session::get('cart')->totalQty }}
                            @endif
                        </span>

                    </a>
                </li>
            </ul>
            <div class="header__cart__price">
                <a href="{{ route('product.shoppingcart') }}">
                    <span>Total: </span>
                    <span id="navTotalPriceMobile">
                        ¥ @if(Session::has('cart'))
                            {{ Session::get('cart')->totalPrice }}
                        @else
                        0
                        @endif
                    </span>
                </a>
            </div>
        </div>
        {{-- <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="{{ asset('vendor/ogani/img/language.png') }}" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div> --}}
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li @if(Request::is('/')) class="active" @endif><a href="{{ route('product.index') }}">Home</a></li>
                <li @if(Request::is('shop')) class="active" @endif><a href="{{ route('product.shop') }}">Shop</a></li>
                <li @if(Request::is('categories')) class="active" @endif><a href="#">Categories</a>
                    <ul class="header__menu__dropdown">
                        @foreach($categories as $category)
                            @php
                                $text = $category->name;
                                $slug = \Illuminate\Support\Str::slug(preg_replace('/[^\w\d]+/', '-', $text));
                            @endphp
                            <li><a href="{{ route('product.categorywise', [$category->id, $slug]) }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                {{-- <li><a href="./blog.html">Blog</a></li> --}}
                <li><a href="{{ route('index.contact') }}">Contact</a></li>
                @if(Auth::user())
                    <li><a href="#">User</a>
                        <ul class="header__menu__dropdown">
                            <li><a href="{{ route('user.profile', Auth::user()->unique_key) }}">Profile</a></li>
                            <li><a href="{{ route('user.logout') }}">Logout</a></li>
                        </ul>
                    </li>
                @else
                    <li><a href="{{ route('user.login') }}">Login</a></li>
                @endif
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        {{-- <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div> --}}
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header" style="background-color: #F6FB7A;">
       <!--  <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                                <li>Free Shipping for all Order of $99</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="{{ asset('vendor/ogani/img/language.png') }}" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Spanis</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="#"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="container" id="main-header">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-6">
                    <div class="header__logo">
                        <a href="{{ route('product.index') }}"><img src="{{ asset('images/logo.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 d-none d-lg-block">
                    <nav class="header__menu">
                        <ul>
                            <li @if(Request::is('/')) class="active" @endif><a href="{{ route('product.index') }}">Home</a></li>
                            <li @if(Request::is('shop')) class="active" @endif><a href="{{ route('product.shop') }}">Shop</a></li>
                            <li @if(Request::is('categories')) class="active" @endif><a href="#">Categories ▽</a>
                                <ul class="header__menu__dropdown">
                                    @foreach($categories as $category)
                                        @php
                                            $text = $category->name;
                                            $slug = \Illuminate\Support\Str::slug(preg_replace('/[^\w\d]+/', '-', $text));
                                        @endphp
                                        <li><a href="{{ route('product.categorywise', [$category->id, $slug]) }}">{{ $category->name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            {{-- <li><a href="./blog.html">Blog</a></li> --}}
                            <li><a href="{{ route('index.contact') }}">Contact</a></li>
                            @if(Auth::user())
                                <li><a href="#">User ▽</a>
                                    <ul class="header__menu__dropdown">
                                        <li><a href="{{ route('user.profile', Auth::user()->unique_key) }}">Profile</a></li>
                                        <li><a href="{{ route('user.logout') }}">Logout</a></li>
                                    </ul>
                                </li>
                            @else
                                <li><a href="{{ route('user.login') }}">Login</a></li>
                            @endif
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-5 col-xs-5 col-5">
                    <div class="header__cart">
                        {{-- normal pc view --}}
                        {{-- normal pc view --}}
                        <ul>
                            <li>
                                @if(Auth::user())
                                    <a href="{{ route('user.profile', Auth::user()->unique_key) }}#my_wishlist"><i class="fa fa-heart"></i> 
                                        <span>{{ Auth::user()->wishlists->count() }}</span>
                                    </a>
                                @else 
                                    <a href="#"><i class="fa fa-heart"></i> <span></span></a>
                                @endif
                            </li>
                            <li>
                                <a href="{{ route('product.shoppingcart') }}"><i class="fa fa-shopping-bag"></i>
                                    <span id="totalInBag">
                                        @if(Session::has('cart'))
                                            {{ Session::get('cart')->totalQty }}
                                        @endif
                                    </span>

                                </a>
                            </li>
                        </ul>
                        <div class="header__cart__price">
                            <a href="{{ route('product.shoppingcart') }}">
                                <span>Total: </span>
                                <span id="navTotalPrice">
                                    ¥ @if(Session::has('cart'))
                                        {{ Session::get('cart')->totalPrice }}
                                    @else
                                    0
                                    @endif
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
        <!-- Fixed Header Section Begin -->
        <header class="header fixed-header" id="fixed-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-6">
                        <div class="header__logo">
                            <a href="{{ route('product.index') }}"><img src="{{ asset('images/logo.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 d-none d-lg-block">
                        <nav class="header__menu">
                            <ul>
                                <li @if(Request::is('/')) class="active" @endif><a href="{{ route('product.index') }}">Home</a></li>
                                <li @if(Request::is('shop')) class="active" @endif><a href="{{ route('product.shop') }}">Shop</a></li>
                                <li @if(Request::is('categories')) class="active" @endif><a href="#">Categories ▽</a>
                                    <ul class="header__menu__dropdown">
                                        @foreach($categories as $category)
                                            @php
                                                $text = $category->name;
                                                $slug = \Illuminate\Support\Str::slug(preg_replace('/[^\w\d]+/', '-', $text));
                                            @endphp
                                            <li><a href="{{ route('product.categorywise', [$category->id, $slug]) }}">{{ $category->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                {{-- <li><a href="./blog.html">Blog</a></li> --}}
                                <li><a href="{{ route('index.contact') }}">Contact</a></li>
                                @if(Auth::user())
                                    <li><a href="#">User ▽</a>
                                        <ul class="header__menu__dropdown">
                                            <li><a href="{{ route('user.profile', Auth::user()->unique_key) }}">Profile</a></li>
                                            <li><a href="{{ route('user.logout') }}">Logout</a></li>
                                        </ul>
                                    </li>
                                @else
                                    <li><a href="{{ route('user.login') }}">Login</a></li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-5 col-xs-5 col-5">
                        <div class="header__cart">
                            <ul>
                                {{-- normal pc view SCROLL --}}
                                {{-- normal pc view SCROLL --}}
                                <li>
                                    @if(Auth::user())
                                        <a href="{{ route('user.profile', Auth::user()->unique_key) }}#my_wishlist"><i class="fa fa-heart"></i> 
                                            <span>{{ Auth::user()->wishlists->count() }}</span>
                                        </a>
                                    @else 
                                        <a href="#"><i class="fa fa-heart"></i> <span></span></a>
                                    @endif
                                </li>
                                <li>
                                    <a href="{{ route('product.shoppingcart') }}"><i class="fa fa-shopping-bag"></i>
                                        <span id="totalInBagScroll">
                                            @if(Session::has('cart'))
                                                {{ Session::get('cart')->totalQty }}
                                            @endif
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <div class="header__cart__price">
                                <a href="{{ route('product.shoppingcart') }}">
                                    <span>Total: </span>
                                    <span id="navTotalPriceScroll">
                                        ¥ @if(Session::has('cart'))
                                            {{ Session::get('cart')->totalPrice }}
                                        @else
                                        0
                                        @endif
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="humberger__open">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </header>

    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero @if(Request::is('/')) @else hero-normal @endif" style="margin-top: 15px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All Categories</span>
                        </div>
                        <ul>
                            @foreach($categories as $category)
                                @php
                                    $text = $category->name;
                                    $slug = \Illuminate\Support\Str::slug(preg_replace('/[^\w\d]+/', '-', $text));
                                @endphp
                                <li><a href="{{ route('product.categorywise', [$category->id, $slug]) }}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                {{-- <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div> --}}
                                {{-- <input type="text" placeholder="What do yo u need?"> --}}
                                <input type="text" class="form-control" name="searchParam" id="searchParam" placeholder="What do yo u need?" @if(!empty($searchparam)) value="{{ $searchparam }}" @endif>
                                <button class="site-btn" id="searchBtn"><i class="fa fa-search" style="margin-right: 10px;"></i>  SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone call-to-this-number">
                            <a class="hero__search__phone__icon" href="tel:+81 090-1703-9984" style="">
                                <i class="fa fa-phone"></i>
                            </a>
                            <div class="hero__search__phone__text">
                                <h5>+81 090-1703-9984</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>                        
                    </div>

                    @if(Request::is('/')) 
                        {{-- <div class="hero__item set-bg" data-setbg="{{ asset('vendor/ogani/img/hero/banner.jpg') }}">
                            <div class="hero__text">
                                <span>ALWAYS FRESH</span>
                                <h2>Vegetable <br />100% Organic</h2>
                                <p>Fresh & Halal Food | Your right Choice</p>
                                <a href="{{ route('product.shop') }}" class="primary-btn">SHOP NOW</a>
                            </div>
                        </div> --}}
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                          </ol>
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <div class="hero__item set-bg" data-setbg="{{ asset('vendor/ogani/img/hero/banner.jpg') }}">
                                  <div class="hero__text">
                                      <span>ALWAYS FRESH</span>
                                      <h2>Vegetable <br />100% Organic</h2>
                                      <p>Fresh & Halal Food | Your right Choice</p>
                                      <a href="{{ route('product.shop') }}" class="primary-btn">SHOP NOW</a>
                                  </div>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="hero__item set-bg" data-setbg="{{ asset('vendor/ogani/img/hero/banner1.jpg') }}">
                                  <div class="hero__text">
                                      <span>ALWAYS FRESH</span>
                                      <h2>Beef <br />100% Halal</h2>
                                      <p>Fresh & Halal Food | Your right Choice</p>
                                      <a href="{{ route('product.shop') }}" class="primary-btn">SHOP NOW</a>
                                  </div>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="hero__item set-bg" data-setbg="{{ asset('vendor/ogani/img/hero/banner2.jpg') }}">
                                  <div class="hero__text">
                                      <span>ALWAYS FRESH</span>
                                      <h2>Fruits <br />100% Natural &<br/>Unprocessed</h2>
                                      <p>Fresh & Halal Food | Your right Choice</p>
                                      <a href="{{ route('product.shop') }}" class="primary-btn">SHOP NOW</a>
                                  </div>
                              </div>
                            </div>
                          </div>
                          {{-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a> --}}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>