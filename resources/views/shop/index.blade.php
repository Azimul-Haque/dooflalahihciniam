@extends('layouts.ogani')

@section('title', 'Halal Food Store in Japan')

@section('css')

@endsection

@section('content')
  <!-- Categories Section Begin -->
  <section class="categories" style="margin-top: 30px;">
      <div class="container">
          <div class="row">
              <div class="categories__slider owl-carousel">
                  <div class="col-lg-3">
                      <div class="categories__item set-bg" data-setbg="{{ asset('vendor/ogani/img/categories/cat-1.jpg') }}">
                          <h5><a href="#">Fresh Fruit</a></h5>
                      </div>
                  </div>
                  <div class="col-lg-3">
                      <div class="categories__item set-bg" data-setbg="{{ asset('vendor/ogani/img/categories/cat-2.jpg') }}">
                          <h5><a href="#">Dried Fruit</a></h5>
                      </div>
                  </div>
                  <div class="col-lg-3">
                      <div class="categories__item set-bg" data-setbg="{{ asset('vendor/ogani/img/categories/cat-3.jpg') }}">
                          <h5><a href="#">Vegetables</a></h5>
                      </div>
                  </div>
                  <div class="col-lg-3">
                      <div class="categories__item set-bg" data-setbg="{{ asset('vendor/ogani/img/categories/cat-4.jpg') }}">
                          <h5><a href="#">drink fruits</a></h5>
                      </div>
                  </div>
                  <div class="col-lg-3">
                      <div class="categories__item set-bg" data-setbg="{{ asset('vendor/ogani/img/categories/cat-5.jpg') }}">
                          <h5><a href="#">drink fruits</a></h5>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Categories Section End -->

  <!-- Featured Section Begin -->
  <section class="featured spad">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="section-title">
                      <h2>Featured Product</h2>
                  </div>
                  <div class="featured__controls">
                      <ul>
                          <li class="active" data-filter="*">All</li>
                          <li data-filter=".oranges">Oranges</li>
                          <li data-filter=".fresh-meat">Fresh Meat</li>
                          <li data-filter=".vegetables">Vegetables</li>
                          <li data-filter=".fastfood">Fastfood</li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="row featured__filter">
              <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                  <div class="featured__item">
                      <div class="featured__item__pic set-bg" data-setbg="{{ asset('vendor/ogani/img/featured/feature-1.jpg') }}">
                          <ul class="featured__item__pic__hover">
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                              <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                              <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                          </ul>
                      </div>
                      <div class="featured__item__text">
                          <h6><a href="#">Crab Pool Security</a></h6>
                          <h5>¥30.00</h5>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
                  <div class="featured__item">
                      <div class="featured__item__pic set-bg" data-setbg="{{ asset('vendor/ogani/img/featured/feature-2.jpg') }}">
                          <ul class="featured__item__pic__hover">
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                              <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                              <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                          </ul>
                      </div>
                      <div class="featured__item__text">
                          <h6><a href="#">Crab Pool Security</a></h6>
                          <h5>¥30.00</h5>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fresh-meat">
                  <div class="featured__item">
                      <div class="featured__item__pic set-bg" data-setbg="{{ asset('vendor/ogani/img/featured/feature-3.jpg') }}">
                          <ul class="featured__item__pic__hover">
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                              <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                              <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                          </ul>
                      </div>
                      <div class="featured__item__text">
                          <h6><a href="#">Crab Pool Security</a></h6>
                          <h5>¥30.00</h5>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood oranges">
                  <div class="featured__item">
                      <div class="featured__item__pic set-bg" data-setbg="{{ asset('vendor/ogani/img/featured/feature-4.jpg') }}">
                          <ul class="featured__item__pic__hover">
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                              <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                              <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                          </ul>
                      </div>
                      <div class="featured__item__text">
                          <h6><a href="#">Crab Pool Security</a></h6>
                          <h5>¥30.00</h5>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                  <div class="featured__item">
                      <div class="featured__item__pic set-bg" data-setbg="{{ asset('vendor/ogani/img/featured/feature-5.jpg') }}">
                          <ul class="featured__item__pic__hover">
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                              <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                              <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                          </ul>
                      </div>
                      <div class="featured__item__text">
                          <h6><a href="#">Crab Pool Security</a></h6>
                          <h5>¥30.00</h5>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fastfood">
                  <div class="featured__item">
                      <div class="featured__item__pic set-bg" data-setbg="{{ asset('vendor/ogani/img/featured/feature-6.jpg') }}">
                          <ul class="featured__item__pic__hover">
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                              <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                              <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                          </ul>
                      </div>
                      <div class="featured__item__text">
                          <h6><a href="#">Crab Pool Security</a></h6>
                          <h5>¥30.00</h5>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                  <div class="featured__item">
                      <div class="featured__item__pic set-bg" data-setbg="{{ asset('vendor/ogani/img/featured/feature-7.jpg') }}">
                          <ul class="featured__item__pic__hover">
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                              <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                              <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                          </ul>
                      </div>
                      <div class="featured__item__text">
                          <h6><a href="#">Crab Pool Security</a></h6>
                          <h5>¥30.00</h5>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood vegetables">
                  <div class="featured__item">
                      <div class="featured__item__pic set-bg" data-setbg="{{ asset('vendor/ogani/img/featured/feature-8.jpg') }}">
                          <ul class="featured__item__pic__hover">
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                              <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                              <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                          </ul>
                      </div>
                      <div class="featured__item__text">
                          <h6><a href="#">Crab Pool Security</a></h6>
                          <h5>¥30.00</h5>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Featured Section End -->

  <!-- Banner Begin -->
  <div class="banner">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="banner__pic">
                      <img src="{{ asset('vendor/ogani/img/banner/banner-1.jpg') }}" alt="">
                  </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="banner__pic">
                      <img src="{{ asset('vendor/ogani/img/banner/banner-2.jpg') }}" alt="">
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Banner End -->

  <!-- Latest Product Section Begin -->
  <section class="latest-product spad">
      <div class="container">
          <div class="row">
              <div class="col-lg-4 col-md-6">
                  <div class="latest-product__text">
                      <h4>Latest Products</h4>
                      <div class="latest-product__slider owl-carousel">
                          <div class="latest-prdouct__slider__item">
                              <a href="#" class="latest-product__item">
                                  <div class="latest-product__item__pic">
                                      <img src="{{ asset('vendor/ogani/img/latest-product/lp-1.jpg') }}" alt="">
                                  </div>
                                  <div class="latest-product__item__text">
                                      <h6>Crab Pool Security</h6>
                                      <span>¥30.00</span>
                                  </div>
                              </a>
                              <a href="#" class="latest-product__item">
                                  <div class="latest-product__item__pic">
                                      <img src="{{ asset('vendor/ogani/img/latest-product/lp-2.jpg') }}" alt="">
                                  </div>
                                  <div class="latest-product__item__text">
                                      <h6>Crab Pool Security</h6>
                                      <span>¥30.00</span>
                                  </div>
                              </a>
                              <a href="#" class="latest-product__item">
                                  <div class="latest-product__item__pic">
                                      <img src="{{ asset('vendor/ogani/img/latest-product/lp-3.jpg') }}" alt="">
                                  </div>
                                  <div class="latest-product__item__text">
                                      <h6>Crab Pool Security</h6>
                                      <span>¥30.00</span>
                                  </div>
                              </a>
                          </div>
                          <div class="latest-prdouct__slider__item">
                              <a href="#" class="latest-product__item">
                                  <div class="latest-product__item__pic">
                                      <img src="{{ asset('vendor/ogani/img/latest-product/lp-1.jpg') }}" alt="">
                                  </div>
                                  <div class="latest-product__item__text">
                                      <h6>Crab Pool Security</h6>
                                      <span>¥30.00</span>
                                  </div>
                              </a>
                              <a href="#" class="latest-product__item">
                                  <div class="latest-product__item__pic">
                                      <img src="{{ asset('vendor/ogani/img/latest-product/lp-2.jpg') }}" alt="">
                                  </div>
                                  <div class="latest-product__item__text">
                                      <h6>Crab Pool Security</h6>
                                      <span>¥30.00</span>
                                  </div>
                              </a>
                              <a href="#" class="latest-product__item">
                                  <div class="latest-product__item__pic">
                                      <img src="{{ asset('vendor/ogani/img/latest-product/lp-3.jpg') }}" alt="">
                                  </div>
                                  <div class="latest-product__item__text">
                                      <h6>Crab Pool Security</h6>
                                      <span>¥30.00</span>
                                  </div>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6">
                  <div class="latest-product__text">
                      <h4>Top Rated Products</h4>
                      <div class="latest-product__slider owl-carousel">
                          <div class="latest-prdouct__slider__item">
                              <a href="#" class="latest-product__item">
                                  <div class="latest-product__item__pic">
                                      <img src="{{ asset('vendor/ogani/img/latest-product/lp-1.jpg') }}" alt="">
                                  </div>
                                  <div class="latest-product__item__text">
                                      <h6>Crab Pool Security</h6>
                                      <span>¥30.00</span>
                                  </div>
                              </a>
                              <a href="#" class="latest-product__item">
                                  <div class="latest-product__item__pic">
                                      <img src="{{ asset('vendor/ogani/img/latest-product/lp-2.jpg') }}" alt="">
                                  </div>
                                  <div class="latest-product__item__text">
                                      <h6>Crab Pool Security</h6>
                                      <span>¥30.00</span>
                                  </div>
                              </a>
                              <a href="#" class="latest-product__item">
                                  <div class="latest-product__item__pic">
                                      <img src="{{ asset('vendor/ogani/img/latest-product/lp-3.jpg') }}" alt="">
                                  </div>
                                  <div class="latest-product__item__text">
                                      <h6>Crab Pool Security</h6>
                                      <span>¥30.00</span>
                                  </div>
                              </a>
                          </div>
                          <div class="latest-prdouct__slider__item">
                              <a href="#" class="latest-product__item">
                                  <div class="latest-product__item__pic">
                                      <img src="{{ asset('vendor/ogani/img/latest-product/lp-1.jpg') }}" alt="">
                                  </div>
                                  <div class="latest-product__item__text">
                                      <h6>Crab Pool Security</h6>
                                      <span>¥30.00</span>
                                  </div>
                              </a>
                              <a href="#" class="latest-product__item">
                                  <div class="latest-product__item__pic">
                                      <img src="{{ asset('vendor/ogani/img/latest-product/lp-2.jpg') }}" alt="">
                                  </div>
                                  <div class="latest-product__item__text">
                                      <h6>Crab Pool Security</h6>
                                      <span>¥30.00</span>
                                  </div>
                              </a>
                              <a href="#" class="latest-product__item">
                                  <div class="latest-product__item__pic">
                                      <img src="{{ asset('vendor/ogani/img/latest-product/lp-3.jpg') }}" alt="">
                                  </div>
                                  <div class="latest-product__item__text">
                                      <h6>Crab Pool Security</h6>
                                      <span>¥30.00</span>
                                  </div>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6">
                  <div class="latest-product__text">
                      <h4>Review Products</h4>
                      <div class="latest-product__slider owl-carousel">
                          <div class="latest-prdouct__slider__item">
                              <a href="#" class="latest-product__item">
                                  <div class="latest-product__item__pic">
                                      <img src="{{ asset('vendor/ogani/img/latest-product/lp-1.jpg') }}" alt="">
                                  </div>
                                  <div class="latest-product__item__text">
                                      <h6>Crab Pool Security</h6>
                                      <span>¥30.00</span>
                                  </div>
                              </a>
                              <a href="#" class="latest-product__item">
                                  <div class="latest-product__item__pic">
                                      <img src="{{ asset('vendor/ogani/img/latest-product/lp-2.jpg') }}" alt="">
                                  </div>
                                  <div class="latest-product__item__text">
                                      <h6>Crab Pool Security</h6>
                                      <span>¥30.00</span>
                                  </div>
                              </a>
                              <a href="#" class="latest-product__item">
                                  <div class="latest-product__item__pic">
                                      <img src="{{ asset('vendor/ogani/img/latest-product/lp-3.jpg') }}" alt="">
                                  </div>
                                  <div class="latest-product__item__text">
                                      <h6>Crab Pool Security</h6>
                                      <span>¥30.00</span>
                                  </div>
                              </a>
                          </div>
                          <div class="latest-prdouct__slider__item">
                              <a href="#" class="latest-product__item">
                                  <div class="latest-product__item__pic">
                                      <img src="{{ asset('vendor/ogani/img/latest-product/lp-1.jpg') }}" alt="">
                                  </div>
                                  <div class="latest-product__item__text">
                                      <h6>Crab Pool Security</h6>
                                      <span>¥30.00</span>
                                  </div>
                              </a>
                              <a href="#" class="latest-product__item">
                                  <div class="latest-product__item__pic">
                                      <img src="{{ asset('vendor/ogani/img/latest-product/lp-2.jpg') }}" alt="">
                                  </div>
                                  <div class="latest-product__item__text">
                                      <h6>Crab Pool Security</h6>
                                      <span>¥30.00</span>
                                  </div>
                              </a>
                              <a href="#" class="latest-product__item">
                                  <div class="latest-product__item__pic">
                                      <img src="{{ asset('vendor/ogani/img/latest-product/lp-3.jpg') }}" alt="">
                                  </div>
                                  <div class="latest-product__item__text">
                                      <h6>Crab Pool Security</h6>
                                      <span>¥30.00</span>
                                  </div>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Latest Product Section End -->
@endsection

@section('js')

@endsection