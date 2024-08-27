@extends('layouts.ogani')

@section('title', 'Shopping Cart')

@section('css')
  <script type="text/javascript" src="{{ asset('vendor/hcode/js/jquery.min.js') }}"></script>
  <style type="text/css">
    .btn {
        margin-right: 00px;
    }
    .product-in-cart a {
      color: black;
      font-size: 18px;
    }
    .product-in-cart a:hover {
      color: black;
    }
  </style>
@endsection

@section('content')
  <!-- Breadcrumb Section Begin -->
  <section class="breadcrumb-section set-bg" data-setbg="{{ asset('vendor/ogani/img/breadcrumb.jpg') }}">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 text-center">
                  <div class="breadcrumb__text">
                      {{-- <h2>Shopping Cart</h2> --}}
                      <div class="breadcrumb__option">
                          <a href="{{ route('product.index') }}">Home</a>
                          <span>Shopping Cart</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Breadcrumb Section End -->

  <!-- Shoping Cart Section Begin -->
  <section class="shoping-cart spad">
      <div class="container">
        @if(Session::has('cart'))
          <div class="row">
              <div class="col-lg-12">
                  <div class="shoping__cart__table">
                    @foreach($products as $product)
                      <li class="list-group-item" id="productItemListItem{{ $product['item']['id'] }}" style="padding: 20px;">
                        <div class="row">
                          <div class="col-md-6 col-sm-6 col-xs-6">
                            <img src="{{ asset('images/product-images/'.$product['item']['productimages']->first()->image) }}" style="max-height: 50px; border:1px solid #777; margin-right: 10px;">
                            <span class="product-in-cart"><a href="{{ route('product.getsingleproduct', [$product['item']['id'], generate_token(100)]) }}">{{ $product['item']['title'] }}</a></span> / 
                            <span class="label label-success">¥ {{ $product['item']['price'] }}</span>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="row">
                              <div class="col-lg-6 col-md-5 col-sm-5 col-xs-12">
                                <center>
                                  <div class="btn-group" style="min-width: 100px;">
                                    <button id="reducebyone{{ $product['item']['id'] }}" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="bottom" title="Reduce Item"><i class="fa fa-minus white-text" aria-hidden="true"></i></button>
                                    <a id="itemQtyInBag{{ $product['item']['id'] }}" class="btn btn-success btn-sm disabled"><span>{{ $product['qty'] }}</span></a>
                                    <button id="addbyone{{ $product['item']['id'] }}" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="bottom" title="Increase Item"><i class="fa fa-plus white-text" aria-hidden="true"></i></button>
                                  </div>
                                </center>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item-center">
                                <span id="itemTotalPrice{{ $product['item']['id'] }}" class="">Total: ¥ {{ $product['price'] }}</span>
                              </div>
                              <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 item-center">
                                <a class="btn btn-link btn-sm" class="right" href="{{ route('product.removeitem', ['id' => $product['item']['id']]) }}" data-toggle="tooltip" data-placement="bottom" title="Click here to remove this item from the list"><i class="fa fa-times black-text" aria-hidden="true"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <script type="text/javascript">
                        $(document).ready(function(){
                            $("#reducebyone{{ $product['item']['id'] }}").click(function(){
                              console.log('Item ID: ' + {{ $product['item']['id'] }});
                              $.ajax({
                                  url: "/reduce/{{ $product['item']['id'] }}",
                                  type: "GET",
                                  data: {},
                                  success: function (data) {
                                    var response = data;
                                    console.log(response);
                                    if(response == 'success') {
                                      if($(window).width() > 768) {
                                        toastr.success('{{ $product['item']['title'] }} One unit amount of this has been removed from your bag.', 'SUCCESS').css('width','400px');
                                      } else {
                                        toastr.success('{{ $product['item']['title'] }} One unit amount of this has been removed from your bag.', 'SUCCESS').css('width', ($(window).width()-25)+'px');
                                      }
                                    }
                                    var totalInBag = parseInt($("#totalInBag").text()) - 1;
                                    var totalInBagMobile = parseInt($("#totalInBagMobile").text()) - 1;
                                    $("#totalInBag").text(totalInBag);
                                    $("#totalInBagMobile").text(totalInBag);
                                    $("#totalInBagScroll").text(totalInBag);
                                    var itemQtyInBag = parseInt($("#itemQtyInBag{{ $product['item']['id'] }}").text()) - 1;
                                    $("#itemQtyInBag{{ $product['item']['id'] }}").text(itemQtyInBag);
                                    if(itemQtyInBag == 0) {
                                      $("#productItemListItem{{ $product['item']['id'] }}").fadeOut("slow");
                                    }
                                    var itemTotalPrice = $("#itemTotalPrice{{ $product['item']['id'] }}").text();
                                    itemTotalPrice = parseInt(itemTotalPrice.replace("Total: ¥ ", "")) - {{ $product['item']['price'] }};
                                    itemTotalPrice = "Total: ¥ " + itemTotalPrice;
                                    $("#itemTotalPrice{{ $product['item']['id'] }}").text(itemTotalPrice);

                                    var totalPriceGross = $("#totalPriceGross").text();
                                    totalPriceGross = parseInt(totalPriceGross.replace("Total Price: ¥ ", "")) - {{ $product['item']['price'] }};
                                    totalPriceGross = "Total Price: ¥ " + totalPriceGross;
                                    $("#totalPriceGross").text(totalPriceGross);
                                  }
                              });

                              $.ajax({
                                  url: "/getcartdata",
                                  type: "GET",
                                  data: {},
                                  success: function (data) {
                                    var response = data;
                                    console.log(response);
                                    $("#navTotalPrice").text('¥' +response);
                                    $("#navTotalPriceMobile").text('¥' +response);
                                    $("#navTotalPriceScroll").text('¥' +response);
                                  }
                              });
                            });
                            
                            $("#addbyone{{ $product['item']['id'] }}").click(function(){
                              console.log('Item ID: ' + {{ $product['item']['id'] }});
                              $.ajax({
                                  url: "/add/{{ $product['item']['id'] }}",
                                  type: "GET",
                                  data: {},
                                  success: function (data) {
                                    var response = data;
                                    console.log(response);
                                    if(response == 'success') {
                                      if($(window).width() > 768) {
                                        toastr.success('{{ $product['item']['title'] }} One unit quantity of this has been added to your bag.', 'SUCCESS').css('width','400px');
                                      } else {
                                        toastr.success('{{ $product['item']['title'] }} One unit quantity of this has been added to your bag.', 'SUCCESS').css('width', ($(window).width()-25)+'px');
                                      }
                                    }
                                    var totalInBag = parseInt($("#totalInBag").text()) + 1;
                                    var totalInBagMobile = parseInt($("#totalInBagMobile").text()) + 1;
                                    $("#totalInBag").text(totalInBag);
                                    $("#totalInBagMobile").text(totalInBag);
                                    $("#totalInBagScroll").text(totalInBag);
                                    var itemQtyInBag = parseInt($("#itemQtyInBag{{ $product['item']['id'] }}").text()) + 1;
                                    $("#itemQtyInBag{{ $product['item']['id'] }}").text(itemQtyInBag);
                                    var itemTotalPrice = $("#itemTotalPrice{{ $product['item']['id'] }}").text();
                                    itemTotalPrice = parseInt(itemTotalPrice.replace("Total: ¥ ", "")) + {{ $product['item']['price'] }};
                                    itemTotalPrice = "Total: ¥ " + itemTotalPrice;
                                    $("#itemTotalPrice{{ $product['item']['id'] }}").text(itemTotalPrice);

                                    var totalPriceGross = $("#totalPriceGross").text();
                                    totalPriceGross = parseInt(totalPriceGross.replace("Total Price: ¥ ", "")) + {{ $product['item']['price'] }};
                                    totalPriceGross = totalPriceGross;
                                    $("#totalPricesub").text(totalPriceGross);
                                    $("#totalPriceGross").text(totalPriceGross);
                                  }
                              });
                            });
                        });
                      </script>
                    @endforeach
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-12">
                  <div class="shoping__cart__btns">
                      <a href="{{ route('product.shop') }}" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                      {{-- <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                          Upadate Cart</a> --}}
                  </div>
              </div>
              <div class="col-lg-6">
                  {{-- <div class="shoping__continue">
                      <div class="shoping__discount">
                          <h5>Discount Codes</h5>
                          <form action="#">
                              <input type="text" placeholder="Enter your coupon code">
                              <button type="submit" class="site-btn">APPLY COUPON</button>
                          </form>
                      </div>
                  </div> --}}
              </div>
              <div class="col-lg-6">
                  <div class="shoping__checkout">
                      <h5>Cart Total</h5>
                      <ul>
                          <li>Subtotal <span>¥ <span id="totalPricesub"> {{ $totalPrice }}</span></span></li>
                          <li>Total <span>¥ <span id="totalPriceGross"> {{ $totalPrice }}</span></span></li>
                      </ul>
                      <a href="{{ route('product.checkout') }}" class="primary-btn">PROCEED TO CHECKOUT</a>
                  </div>
              </div>
          </div>
        @else
          <div class="col-md-8 mx-auto">
            <h3>
              <center>
                There is no products in your bag! Visit this page by adding our products to your bag. thank you!<br/><br/>
                <a href="{{ route('product.shop') }}" class="site-btn"><i class="fa fa-shopping-bag"></i> See Products</a>
              </center>
            </h3>

          </div>
        @endif
      </div>
  </section>
  <!-- Shoping Cart Section End -->

  
  <!-- content section -->
  <section class="content-section padding-three">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            
          </div>
        </div>
      </div>
  </section>
  <!-- end content section -->
@endsection

@section('js')
  
@endsection