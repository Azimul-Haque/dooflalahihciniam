@extends('layouts.ogani')

@section('title', 'Checkout')

@section('css')
  <script type="text/javascript" src="{{ asset('vendor/hcode/js/jquery.min.js') }}"></script>
  <style type="text/css">
    .right {
        float: right;
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
                          <span>Checkout</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Breadcrumb Section End -->

  <!-- Checkout Section Begin -->
  <section class="checkout spad">
      <div class="container">
          {{-- <div class="row">
              <div class="col-lg-12">
                  <h6><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click here</a> to enter your code
                  </h6>
              </div>
          </div> --}}
          <div class="checkout__form">
            <h4>Billing Details</h4>
            <div class="row">
              <div class="col-md-6">
                <h2>Customer: {{ Auth::user()->name }}</h2>
                ID: {{ Auth::user()->code }}<br/>
                Contact: {{ Auth::user()->phone }}<br/>
                Email: {{ Auth::user()->email }}<br/>
                {{-- <big>Earned points: <b>{{ Auth::user()->points }}</b></big> --}}
                <br/><br/>
              </div>
              <div class="col-md-6">
                
                  <div class="checkout__order">
                      <h4>Your Order</h4>
                      <div class="checkout__order__products">Products <span>Total</span></div>
                      <ul>
                        @foreach($cart->items as $item)
                        <li >
                          {{-- {{ json_encode($item) }} --}}
                          {{ $item['item']['title'] }} <label class="badge badge-pill badge-warning">{{ $item['qty'] }}</label>
                          <span class="right">৳ {{ $item['price'] }}</span>
                        </li>
                        @endforeach
                      </ul>
                      <div class="checkout__order__subtotal">Subtotal <span>$750.99</span></div>
                      <div class="checkout__order__total">Total <span>$750.99</span></div>
                      <div class="checkout__input__checkbox">
                          <label for="acc-or">
                              Create an account?
                              <input type="checkbox" id="acc-or">
                              <span class="checkmark"></span>
                          </label>
                      </div>
                      <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt
                          ut labore et dolore magna aliqua.</p>
                      <div class="checkout__input__checkbox">
                          <label for="payment">
                              Check Payment
                              <input type="checkbox" id="payment">
                              <span class="checkmark"></span>
                          </label>
                      </div>
                      <div class="checkout__input__checkbox">
                          <label for="paypal">
                              Paypal
                              <input type="checkbox" id="paypal">
                              <span class="checkmark"></span>
                          </label>
                      </div>
                      <button type="submit" class="site-btn">PLACE ORDER</button>
                  </div>
              </div>
            </div>
              
          </div>
        </div>
  </section>
  <!-- Checkout Section End -->

  <!-- content section -->
  <section class="content-section padding-three">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            
          </div>
          <div class="col-md-8">
            <ul class="list-group">
              @foreach($cart->items as $item)
              <li class="list-group-item">
                {{-- {{ json_encode($item) }} --}}
                {{ $item['item']['title'] }} | {{ $item['qty'] }}
                <span class="right">৳ {{ $item['price'] }}</span>
              </li>
              @endforeach
            </ul>
            
          </div>
        </div>
      </div>
  </section>
  <!-- end content section -->
@endsection

@section('js')
  <script type="text/javascript">
    function changeDeliveryLocation() {
      var deliveryCharge;
      var oldTotalPrice;
      if($('#deliverylocation').val() == 0) {
        deliveryCharge = 60;
        $('#freePickUpPoint').text('');
      } else if ($('#deliverylocation').val() == 1020) {
        deliveryCharge = 0;
        $('#freePickUpPoint').text('Peri Pasta or Pizza Burg, Mirpur- 02, Contact no - 01315852563');
      } else if ($('#deliverylocation').val() == 2) {
        deliveryCharge = 100;
        $('#freePickUpPoint').text('');
      } else {
        deliveryCharge = 0;
        $('#freePickUpPoint').text('');
      }
      $('#deliveryCharge').text(deliveryCharge);
      $('#totalPrice').text(parseFloat($('#actualtotalprice').val()) + deliveryCharge);
    };

    $('#payment_method').change(function() {
      if($('#payment_method').val() == 0) {
        $('#bKashText').text('');
      } else if ($('#payment_method').val() == 1) {
        $('#bKashText').text('Payment gateway name...');
      }
    })

    function useEarnedBalance() {
      // $('#checkout-btn[type="submit"]').attr('disabled','disabled');
      if(({{ $cart->totalPrice }} > {{ Auth::user()->points }}) && ($('#useearnedbalance').val() > {{ Auth::user()->points }})) {
        $('#checkout-btn[type="submit"]').attr('disabled','disabled');
        toastr.warning('আপনি অর্জিত ব্যালেন্স ৳ {{ bangla(Auth::user()->points) }} এর বেশি ব্যবহার করতে পারবেন না!').css('width', '400px');
        $('#actualtotalprice').val({{ $cart->totalPrice }});
      } else if(({{ Auth::user()->points }} > {{ $cart->totalPrice }}) && ($('#useearnedbalance').val() > {{ $cart->totalPrice }})) {
        $('#checkout-btn[type="submit"]').attr('disabled','disabled');
        toastr.warning('মোট পণ্যমূল্য ৳ {{ bangla($cart->totalPrice) }} এর বেশি দিতে পারবেন না!').css('width', '400px');
        $('#actualtotalprice').val({{ $cart->totalPrice }});
      } else {
        $('#checkout-btn[type="submit"]').removeAttr('disabled');
        var totalPriceNow = {{ $cart->totalPrice }} - parseFloat($('#useearnedbalance').val());
        $('#actualtotalprice').val(totalPriceNow);
        changeDeliveryLocation();
      }
    }
  </script>
@endsection