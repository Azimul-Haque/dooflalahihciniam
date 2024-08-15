@extends('layouts.ogani')

@section('title', 'Shop')

@section('css')

@endsection

@section('content')

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="{{ asset('vendor/ogani/img/breadcrumb.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>{{ $catorsub->name }}</h2>
                    <div class="breadcrumb__option">
                        <a href="{{ route('product.index') }}">Home</a>
                        <span>{{ $catorsub->name }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

 <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    @include('partials._ogani-shop-left-menu')
                </div>
                <div class="col-lg-9 col-md-7">
                    {{-- <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>Sale Off</h2>
                        </div>
                        <div class="row">
                            <div class="product__discount__slider owl-carousel">
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="{{ asset('vendor/ogani/img/product/discount/pd-1.jpg') }}">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Dried Fruit</span>
                                            <h5><a href="#">Raisin’n’nuts</a></h5>
                                            <div class="product__item__price">¥30.00 <span>¥36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="{{ asset('vendor/ogani/img/product/discount/pd-2.jpg') }}">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Vegetables</span>
                                            <h5><a href="#">Vegetables’package</a></h5>
                                            <div class="product__item__price">¥30.00 <span>¥36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="{{ asset('vendor/ogani/img/product/discount/pd-3.jpg') }}">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Dried Fruit</span>
                                            <h5><a href="#">Mixed Fruitss</a></h5>
                                            <div class="product__item__price">¥30.00 <span>¥36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="{{ asset('vendor/ogani/img/product/discount/pd-4.jpg') }}">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Dried Fruit</span>
                                            <h5><a href="#">Raisin’n’nuts</a></h5>
                                            <div class="product__item__price">¥30.00 <span>¥36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="{{ asset('vendor/ogani/img/product/discount/pd-5.jpg') }}">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Dried Fruit</span>
                                            <h5><a href="#">Raisin’n’nuts</a></h5>
                                            <div class="product__item__price">¥30.00 <span>¥36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="{{ asset('vendor/ogani/img/product/discount/pd-6.jpg') }}">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Dried Fruit</span>
                                            <h5><a href="#">Raisin’n’nuts</a></h5>
                                            <div class="product__item__price">¥30.00 <span>¥36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                {{-- <div class="filter__sort">
                                    <span>Sort By</span>
                                    <select>
                                        <option value="0">Default</option>
                                        <option value="0">Default</option>
                                    </select>
                                </div> --}}
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                    <h6><span>{{ $products->count() }}</span> Products found</h6>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3">
                               {{--  <div class="filter__option">
                                    <span class="icon_grid-2x2"></span>
                                    <span class="icon_ul"></span>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($products as $product)
                          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6">
                              <div class="product__item">
                                  <div class="product__item__pic set-bg" data-setbg="{{ asset('images/product-images/'.$product->productimages->first()->image) }}">
                                      <ul class="product__item__pic__hover">
                                          {{-- <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                          <li><a href="#"><i class="fa fa-retweet"></i></a></li> --}}
                                          <li><a id="addToCart{{ $product->id }}" href="#!"><i class="fa fa-shopping-cart"></i></a></li>
                                      </ul>
                                  </div>
                                  <div class="product__item__text">
                                      @php
                                          $ptext = $product->title;
                                          $pslug = \Illuminate\Support\Str::slug(preg_replace('/[^\w\d]+/', '-', $ptext));
                                      @endphp
                                      <h6><a href="{{ route('product.getsingleproduct', [$product->id, $pslug]) }}">{{ $product->title }}</a></h6>
                                      <h5>¥ {{ $product->price }} <small><del>¥ {{ $product->oldprice }}</del></small></h5> 

                                  </div>
                              </div>
                          </div>
                          <script src="http://localhost:8000/vendor/ogani/js/jquery-3.3.1.min.js"></script>
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
                    {{-- <div class="product__pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div> --}}
                    {{-- {{ $products->links('pagination.default') }} --}}
                    @include('pagination.default', ['paginator' => $products])
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->
  
@endsection

@section('js')

@endsection