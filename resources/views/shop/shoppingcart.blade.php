@extends('layouts.ogani')

@section('title', 'Shopping Cart')

@section('css')
  <script type="text/javascript" src="{{ asset('vendor/hcode/js/jquery.min.js') }}"></script>
  <style type="text/css">
    .btn {
        margin-right: 00px;
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
                      <table>
                          <thead>
                              <tr>
                                  <th class="shoping__product">Products</th>
                                  <th>Price</th>
                                  <th>Quantity</th>
                                  <th>Total</th>
                                  <th></th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td class="shoping__cart__item">
                                      <img src="img/cart/cart-1.jpg" alt="">
                                      <h5>Vegetable’s Package</h5>
                                  </td>
                                  <td class="shoping__cart__price">
                                      $55.00
                                  </td>
                                  <td class="shoping__cart__quantity">
                                      <div class="quantity">
                                          <div class="pro-qty">
                                              <input type="text" value="1">
                                          </div>
                                      </div>
                                  </td>
                                  <td class="shoping__cart__total">
                                      $110.00
                                  </td>
                                  <td class="shoping__cart__item__close">
                                      <span class="icon_close"></span>
                                  </td>
                              </tr>
                                <div class="">
                                  <ul class="list-group">
                                    
                                  </ul>
                                </div>
                                <div class="">
                                  <div class="row">
                                    <div class="col-md-8"></div>
                                    <div class="col-md-2">
                                      <strong style="float: right;" id="totalPriceGross">Total Price: ¥ {{ $totalPrice }}</strong>
                                    </div>
                                    <div class="col-md-2">
                                    </div>
                                  </div>
                                  <hr/>
                                </div>
                                <div class="">
                                  <a href="{{ route('product.checkout') }}" class="highlight-button btn btn-medium no-margin pull-left"><i class="fa fa-check-square-o" aria-hidden="true"></i> Confirm the Order</a>
                                </div>
                          </tbody>
                      </table>
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
                          <li>Subtotal <span>$454.98</span></li>
                          <li>Total <span>$454.98</span></li>
                      </ul>
                      <a href="#" class="primary-btn">PROCEED TO CHECKOUT</a>
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