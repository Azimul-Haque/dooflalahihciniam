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
                {{-- ekahne kaaj ache, etake dynamic korte hobe --}}
                {{-- ekahne kaaj ache, etake dynamic korte hobe --}}
                {{-- ekahne kaaj ache, etake dynamic korte hobe --}}
                  <div class="col-lg-3">
                      <div class="categories__item set-bg" data-setbg="{{ asset('vendor/ogani/img/categories/cat-667.jpg') }}">
                          <h5><a href="{{ Request::url() . '/category/10/canned-dried' }}">Dried & Canned</a></h5>
                      </div>
                  </div>
                  <div class="col-lg-3">
                      <div class="categories__item set-bg" data-setbg="{{ asset('vendor/ogani/img/categories/cat-5.jpg') }}">
                          <h5><a href="{{ Request::url() . '/category/1/beef' }}">Beef Items</a></h5>
                      </div>
                  </div>
                  <div class="col-lg-3">
                      <div class="categories__item set-bg" data-setbg="{{ asset('vendor/ogani/img/categories/cat-3.jpg') }}">
                          <h5><a href="{{ Request::url() . '/category/8/green-vegetables' }}">Green Vegetables</a></h5>
                      </div>
                  </div>
                  <div class="col-lg-3">
                      <div class="categories__item set-bg" data-setbg="{{ asset('vendor/ogani/img/categories/cat-558.jpg') }}">
                          <h5><a href="{{ Request::url() . '/category/5/dal-lentils-pulses' }}">Dal (Lentils/Pulses)</a></h5>
                      </div>
                  </div>
                  <div class="col-lg-3">
                      <div class="categories__item set-bg" data-setbg="{{ asset('vendor/ogani/img/categories/cat-445.jpg') }}">
                          <h5><a href="{{ Request::url() . '/category/2/chicken' }}">Chicken Items</a></h5>
                      </div>
                  </div>
                {{-- ekahne kaaj ache, etake dynamic korte hobe --}}
                {{-- ekahne kaaj ache, etake dynamic korte hobe --}}
                {{-- ekahne kaaj ache, etake dynamic korte hobe --}}
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
                          <li data-filter=".beef">Beef</li>
                          <li data-filter=".chicken">Chichen</li>
                          <li data-filter=".vegetables">Vegetables</li>
                          <li data-filter=".dal-lentils">Dal (Lentils/Pulses</li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="row featured__filter">
            @foreach($featureditems as $product)
              <div class="col-lg-3 col-md-4 col-sm-6 mix @if($product->category->id == 1) beef @elseif($product->category->id == 2) chicken @elseif($product->category->id == 8) vegetables @elseif($product->category->id == 5) dal-lentils @endif">
                  <div class="featured__item">
                      <div class="featured__item__pic set-bg" data-setbg="{{ asset('images/product-images/'.$product->productimages->first()->image) }}">
                          <ul class="featured__item__pic__hover">
                              <li><a id="addToCart{{ $product->id }}" href="javascript:void(0)"><i class="fa fa-shopping-cart"></i></a></li>
                          </ul>
                      </div>
                      <div class="featured__item__text">
                          <h6><a href="#">{{ $product->title }}</a></h6>
                          <h5>¥{{ $product->price }} <small><del>¥{{ $product->oldprice }}</del></small></h5>
                      </div>
                  </div>
              </div>

              <script src="{{ asset('vendor/ogani/js/jquery-3.3.1.min.js') }}"></script>
              <script type="text/javascript">
                $(document).ready(function(){
                    $("#addToCart{{ $product->id }}").click(function(){
                      console.log('Item ID: {{ $product->id }}');
                      $.ajax({
                          url: "/addtocart/{{ $product->id }}",
                          type: "GET",
                          data: {},
                          success: function (data) {
                            var response = data;
                            console.log(response);
                            if(response == 'success') {
                              if($(window).width() > 768) {
                                toastr.success('{{ $product->title }} added to your bag', 'SUCCESS').css('width','400px');
                              } else {
                                toastr.success('{{ $product->title }} added to your bag', 'SUCCESS').css('width', ($(window).width()-25)+'px');
                              }
                            }
                            var totalInBag = parseInt($("#totalInBag").text());
                            if(isNaN(totalInBag)) {
                              totalInBag = 0;
                            } else {
                              totalInBag = totalInBag;
                            }
                            totalInBag = totalInBag + 1;
                            $("#totalInBag").text(totalInBag);
                            
                            var totalInBagMobile = parseInt($("#totalInBagMobile").text());
                            if(isNaN(totalInBagMobile)) {
                              totalInBagMobile = 0;
                            } else {
                              totalInBagMobile = totalInBagMobile;
                            }
                            totalInBagMobile = totalInBagMobile + 1;
                            $("#totalInBagMobile").text(totalInBagMobile);

                            var totalInBagScroll = parseInt($("#totalInBagScroll").text());
                            if(isNaN(totalInBagScroll)) {
                              totalInBagScroll = 0;
                            } else {
                              totalInBagScroll = totalInBagScroll;
                            }
                            totalInBagScroll = totalInBagScroll + 1;
                            $("#totalInBagScroll").text(totalInBagScroll);
                          }
                      });
                    });
                });
              </script>
            @endforeach
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