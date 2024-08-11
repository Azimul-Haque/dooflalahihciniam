@extends('layouts.ogani')

@section('title', $product->title)

@section('css')
  <script type="text/javascript" src="{{ asset('vendor/hcode/js/jquery.min.js') }}"></script>
  <style type="text/css">
    .padding-top-ten {
      padding-top: 10%;
    }
    .padding-top-five {
      padding-top: 5%;
      padding-bottom: 5%;
    }
    .image-thumb-product {
      max-height: 50px; 
      width: auto; 
      border: 1px solid gray;
    }
    iframe {
      width: 100% !important;
    }
  </style>
  <meta property="og:image" content="{{ asset('images/product-images/'.$product->productimages->first()->image) }}" />
  <meta property="og:title" content="{{ $product->title }}"/>
  <meta property="og:description" content="¥ {{ $product->price }} | {{ substr(strip_tags($product->description), 0, 200) }}" />
  <meta property="og:type" content="article"/>
  <meta property="og:url" content="{{ Request::url() }}" />
  <meta property="og:site_name" content="Mainichi Halal Food">
  <meta property="og:locale" content="en_US">
  <meta property="fb:admins" content="100001596964477">
  <meta property="fb:app_id" content="163879201229487">
  <meta property="og:type" content="article">
  <!-- Open Graph - Article -->
  <meta name="article:section" content="Mainichi Halal Food">
  <meta name="article:published_time" content="{{ $product->created_at }}">
  <meta name="article:author" content="Ecom">
  <meta name="article:tag" content="Product">
  <meta name="article:modified_time" content="{{ $product->updated_at }}">

  @php
      $ptext = $product->title;
      $pslug = \Illuminate\Support\Str::slug(preg_replace('/[^\w\d]+/', '-', $ptext));
  @endphp
  <link rel="canonical" href="{{ route('product.getsingleproduct', [$product->id, $pslug]) }}" />
@endsection

@section('content')

{{-- facebook comment plugin --}}
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v4.0&appId=517942969045216&autoLogAppEvents=1"></script>
{{-- facebook comment plugin --}}
  
  <!-- Breadcrumb Section Begin -->
  <section class="breadcrumb-section set-bg" data-setbg="{{ asset('vendor/ogani/img/breadcrumb.jpg') }}">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 text-center">
                  <div class="breadcrumb__text">
                      {{-- <h2>Organi Shop</h2> --}}
                      <div class="breadcrumb__option">
                        <a href="{{ route('product.index') }}">{{ $product->title }}</a>
                        <span>Product</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Breadcrumb Section End -->

  <!-- Product Details Section Begin -->
  <section class="product-details spad">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 col-md-6">
                  <div class="product__details__pic">
                      <div class="product__details__pic__item">
                          <img class="product__details__pic__item--large"
                              src="{{ asset('images/product-images/' . $product->productimages->first()->image) }}" alt="{{ $product->title }}">
                      </div>
                      <div class="product__details__pic__slider owl-carousel">
                        @foreach($product->productimages as $image)
                          <img data-imgbigurl="{{ asset('images/product-images/' . $image->image) }}"
                              src="{{ asset('images/product-images/' . $image->image) }}" alt="{{ $product->title }}">
                        @endforeach
                          <img data-imgbigurl="{{ asset('vendor/ogani/img/product/details/product-details-3.jpg') }}"
                              src="{{ asset('vendor/ogani/img/product/details/product-details-3.jpg') }}" alt="">
                          <img data-imgbigurl="{{ asset('vendor/ogani/img/product/details/product-details-4.jpg') }}"
                              src="{{ asset('vendor/ogani/img/product/details/product-details-4.jpg') }}" alt="">
                          {{-- <img data-imgbigurl="img/product/details/product-details-5.jpg"
                              src="img/product/details/thumb-3.jpg" alt="">
                          <img data-imgbigurl="img/product/details/product-details-4.jpg"
                              src="img/product/details/thumb-4.jpg" alt=""> --}}
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 col-md-6">
                  <div class="product__details__text">
                      <h3>{{ $product->title }}</h3>
                      <div class="product__details__rating">
                          {{-- <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-half-o"></i> --}}
                          @if($product->productreviews->count() > 0)
                            @php
                              $avgrating = $product->productreviews->sum('rating') / $product->productreviews->count();
                            @endphp
                            @if($avgrating >= 1)
                              <i class="fa fa-star black-text"></i>
                            @else
                              <i class="fa fa-star-o black-text"></i>
                            @endif
                            @if($avgrating >= 2)
                              <i class="fa fa-star black-text"></i>
                            @else
                              <i class="fa fa-star-o black-text"></i>
                            @endif
                            @if($avgrating >= 3)
                              <i class="fa fa-star black-text"></i>
                            @else
                              <i class="fa fa-star-o black-text"></i>
                            @endif
                            @if($avgrating >= 4)
                              <i class="fa fa-star black-text"></i>
                            @else
                              <i class="fa fa-star-o black-text"></i>
                            @endif
                            @if($avgrating >= 5)
                              <i class="fa fa-star black-text"></i>
                            @else
                              <i class="fa fa-star-o black-text"></i>
                            @endif
                          @endif
                          <span>({{ $product->productreviews->count() }} reviews)</span>
                      </div>
                      <div class="product__details__price">¥{{ $product->price }} <small style="margin-left: 10px;"><del>¥{{ $product->oldprice }}</del></small></div>
                      <p>{{ $product->shorttext }}</p>
                      <div class="product__details__quantity">
                          <div class="quantity">
                              <div class="pro-qty">
                                  <input type="text" id="productQty" value="1">
                              </div>
                          </div>
                      </div>
                      <a href="#!" class="primary-btn" id="addToCartSingle">ADD TO CARD</a>
                      @if(Auth::check())
                        <a href="{{ route('product.addtowishlist', [$product->id, Auth::user()->id]) }}" class="heart-icon">
                          @if(in_array($product->id, Auth::user()->wishlists->pluck('product_id')->toArray()))
                            <span class="icon_heart" style="color: #7FAD39;"></span>
                          @else
                            <span class="icon_heart_alt"></span>
                          @endif
                          
                        </a>
                      @else
                        <a title="You need to Login to Add this product in your WishList" href="{{ url('login') }}" class="heart-icon"><span class="icon_heart_alt"></span></a>
                      @endif
                      
                      <ul>
                          <li>
                            <b>Availability</b>
                            <span>
                              @if($product->isAvailable == 1)
                                In Stock / Shipping Available
                              @else
                                Out of Stock / Shipping Unavailable
                              @endif
                            </span>
                          </li>
                          <li><b>Shipping</b> <span>01 day shipping. <samp>Free pickup today</samp></span></li>
                          <li><b>Weight</b> <span>0.5 kg</span></li>
                          <li><b>Share on</b>
                              <div class="share">
                                  <a href="https://www.facebook.com/sharer/sharer.php?u={{ Request::url() }}" onclick="window.open(this.href,'newwindow', 'width=500,height=400'); return false;"><i class="fa fa-facebook"></i></a>
                                  <a href="https://twitter.com/intent/tweet?url={{ Request::url() }}" onclick="window.open(this.href,'newwindow', 'width=500,height=400'); return false;"><i class="fa fa-twitter"></i></a>
                                  <a href="#"><i class="fa fa-instagram"></i></a>
                                  <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ Request::url()}}&title=IIT%20Alumni%20Association&summary={{ $product->title }}&source=Killa%20Consultancy" onclick="window.open(this.href,'newwindow', 'width=500,height=400');  return false;"><i class="fa fa-linkedin"></i></a>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="col-lg-12">
                  <div class="product__details__tab">
                      <ul class="nav nav-tabs" role="tablist">
                          <li class="nav-item">
                              <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                  aria-selected="true">Information</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                  aria-selected="false">Reviews <span>({{ $product->productreviews->count() }})</span></a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                  aria-selected="false">Facebook Comments</a>
                          </li>
                      </ul>
                      <div class="tab-content">
                          <div class="tab-pane active" id="tabs-1" role="tabpanel">
                              <div class="product__details__tab__desc">
                                  <h6>Products Information/Description</h6>
                                  <p>
                                    {!! $product->description !!}
                                  </p>
                              </div>
                          </div>
                          <div class="tab-pane" id="tabs-2" role="tabpanel">
                              <div class="product__details__tab__desc">
                                  <h6>Reviews</h6>
                                  <div class="row">
                                      <div class="col-md-6 col-sm-12 review-main">
                                        @foreach($product->productreviews as $review)
                                          <div class="review">
                                              <p class="letter-spacing-2 text-uppercase review-name"><strong>{{ $review->user->name }}</strong> | <small>{{ date('F d, Y', strtotime($review->created_at)) }}</small></p>
                                              <p>
                                                @if($review->rating >= 1)
                                                  <i class="fa fa-star black-text"></i>
                                                @else
                                                  <i class="fa fa-star-o black-text"></i>
                                                @endif
                                                @if($review->rating >= 2)
                                                  <i class="fa fa-star black-text"></i>
                                                @else
                                                  <i class="fa fa-star-o black-text"></i>
                                                @endif
                                                @if($review->rating >= 3)
                                                  <i class="fa fa-star black-text"></i>
                                                @else
                                                  <i class="fa fa-star-o black-text"></i>
                                                @endif
                                                @if($review->rating >= 4)
                                                  <i class="fa fa-star black-text"></i>
                                                @else
                                                  <i class="fa fa-star-o black-text"></i>
                                                @endif
                                                @if($review->rating >= 5)
                                                  <i class="fa fa-star black-text"></i>
                                                @else
                                                  <i class="fa fa-star-o black-text"></i>
                                                @endif
                                              </p>
                                              <p>{{ $review->comment }}</p>
                                          </div>
                                        @endforeach
                                      </div>
                                      <div class="col-md-6 col-sm-12">
                                          <div class="blog-comment-form">
                                              @if(Auth::check())
                                              <!-- comment form -->
                                              {!! Form::open(['route' => 'product.storeproductreview', 'method' => 'POST']) !!}
                                                  <!-- input -->
                                                  <input type="text" name="name" value="{{ Auth::user()->name }}" placeholder="Name" readonly="" style="width: 100%; font-size: 16px; padding-left: 20px; color: #1c1c1c; height: 46px; border: 1px solid #ededed;"><br/>
                                                  <input type="hidden" name="product_id" value="{{ $product->id }}"><br/>
                                                  <!-- end input -->
                                                  <!-- input  -->
                                                  {{-- <label class="rating">Rating</label> --}}
                                                  <select name="rating" required="" style="width: 100%; font-size: 16px; padding-left: 20px; color: #1c1c1c; height: 46px; border: 1px solid #ededed;">
                                                    <option value="" selected="" disabled="">Select a Value</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                  </select><br/><br/>
                                                  <!-- end input -->
                                                  <!-- textarea  -->
                                                  <textarea name="comment" placeholder="Write your comment" required="" style="width: 100%; font-size: 14px; padding-left: 20px; color: #1c1c1c; min-height: 100px; border: 1px solid #ededed;"></textarea><br/>
                                                  <!-- end textarea  -->
                                                  <!-- button  -->
                                                  <input type="submit" name="send message" value="LEAVE RATING" class="primary-btn">
                                                  <!-- end button  -->
                                              {!! Form::close() !!}
                                              <!-- end comment form -->
                                              @else
                                              <a href="{{ url('login') }}" class="primary-btn" title="You need to login to Write a Review">Login to Write Review</a>
                                              @endif
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="tab-pane" id="tabs-3" role="tabpanel">
                              <div class="product__details__tab__desc">
                                  <h6>Facebook Comments</h6>
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="fb-comments" data-href="{{ Request::url() }}" data-width="100%" data-numposts="5"></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Product Details Section End -->

  <!-- Related Product Section Begin -->
  <section class="related-product">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="section-title related__product__title">
                      <h2>Related Product</h2>
                  </div>
              </div>
          </div>
          <div class="row">
            @foreach($relatedproducts as $relproduct)
              <!-- shop item -->
              @php
                  $reltext = $relproduct->title;
                  $relslug = \Illuminate\Support\Str::slug(preg_replace('/[^\w\d]+/', '-', $reltext));
              @endphp
              <div class="col-lg-3 col-md-4 col-sm-6">
                  <div class="product__item">
                      <div class="product__item__pic set-bg" data-setbg="{{ asset('images/product-images/'.$relproduct->productimages->first()->image) }}">
                          <ul class="product__item__pic__hover">
                              <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                          </ul>
                      </div>
                      <div class="product__item__text">
                          <h6><a href="{{ route('product.getsingleproduct', [$relproduct->id, $relslug]) }}">{{ $relproduct->title }}</a></h6>
                          <h5>
                            @if($relproduct->oldprice > 0)
                            <del>¥ {{ $relproduct->oldprice }}</del>
                            @endif
                            ¥ {{ $relproduct->price }}
                          </h5>
                      </div>
                  </div>
              </div>
              <!-- end shop item -->
            @endforeach
          </div>
      </div>
  </section>
  <!-- Related Product Section End -->

@endsection

@section('js')
<script type="text/javascript">
  $(document).ready(function(){
      $("#addToCartSingle").click(function(){
        console.log('Qty: '+$('#productQty').val());
        console.log('Item ID: {{ $product->id }}');
        $.ajax({
            url: "/addtocartsingle/{{ $product->id }}/" + $('#productQty').val(),
            type: "GET",
            data: {},
            success: function (data) {
              var response = data;
              console.log(response);
              if(response == 'success') {
                if($(window).width() > 768) {
                  toastr.success('{{ $product->title }} added to your bag!', 'SUCCESS').css('width','400px');
                } else {
                  toastr.success('{{ $product->title }} added to your bag!', 'SUCCESS').css('width', ($(window).width()-25)+'px');
                }
              }
              var totalInBag = parseInt($("#totalInBag").text());
              if(isNaN(totalInBag)) {
                totalInBag = 0;
              } else {
                totalInBag = totalInBag;
              }
              totalInBag = totalInBag + parseInt($('#productQty').val());
              $("#totalInBag").text(totalInBag);
              
              var totalInBagMobile = parseInt($("#totalInBagMobile").text());
              if(isNaN(totalInBagMobile)) {
                totalInBagMobile = 0;
              } else {
                totalInBagMobile = totalInBagMobile;
              }
              totalInBagMobile = totalInBagMobile + parseInt($('#productQty').val());
              $("#totalInBagMobile").text(totalInBagMobile);

              var totalInBagScroll = parseInt($("#totalInBagScroll").text());
              if(isNaN(totalInBagScroll)) {
                totalInBagScroll = 0;
              } else {
                totalInBagScroll = totalInBagScroll;
              }
              totalInBagScroll = totalInBagScroll + parseInt($('#productQty').val());
              $("#totalInBagScroll").text(totalInBagScroll);
            }
        });
      });
  });
</script>





<script>
    $("#owl-demo").owlCarousel ({

        slideSpeed : 800,
        autoPlay: 4000,
        items : 1,
        stopOnHover : false,
        itemsDesktop : [1199,1],
        itemsDesktopSmall : [979,1],
        itemsTablet :   [768,1],
      });
</script>
<script type="text/javascript">
  $('#search-content').on('keyup', function () {
      //history.pushState(null, null, '/search');
      $("#products_list").hide();
      $("#searched_list").show();
      if($('#search-content').val().length == 0) {
        $("#products_list").show();
        $("#searched_list").hide();
      }
      $value = $(this).val().trim();;
      $.ajax({
          url: "{{ URL::to('search') }}",
          type: "GET",
          data: {'search':$value},
          success: function (data) {
            $("#searched_list").html(data);
          }
      });
  });
  function s_addToCart(id) {
      console.log('Item ID:'+id);
      $title = $('#s_addToCart'+id).data('title');
      console.log('Item Title:'+$title);
      $.ajax({
          url: "/addtocart/"+id,
          type: "GET",
          data: {},
          success: function (data) {
            var response = data;
            console.log(response);
            if(response == 'success') {
              toastr.success($title+' added to your bag!', 'SUCCESS').css('width','400px');
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
  }
</script>
@endsection