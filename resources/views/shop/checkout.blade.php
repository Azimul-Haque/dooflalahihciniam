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
            {!! Form::open(['route' => 'product.checkout', 'method' => 'POST']) !!}
              <div class="row">
                <div class="col-md-6">
                  <big>Customer: {{ Auth::user()->name }}</big><br/>
                  ID: {{ Auth::user()->code }}<br/>
                  Contact: {{ Auth::user()->phone }}<br/>
                  Email: {{ Auth::user()->email }}<br/>
                  {{-- <big>Earned points: <b>{{ Auth::user()->points }}</b></big> --}}
                  {!! Form::label('address', 'Delivery address:') !!}
                  {!! Form::textarea('address', Auth::user()->address, array('class' => 'form-control', 'style' => 'max-height: 100px;')) !!}

                  <select id="deliverylocation" name="deliverylocation" style="width: 100% !important;" required="" onchange="changeDeliveryLocation()">
                    <option value="" selected="" disabled="">Select Delivery Location</option>
                    <option value="0">Delivery Address</option>
                    <option value="1020">Free Pick-up from Shop</option>
                    {{-- <option value="2">Outside of Dhaka</option> --}}
                  </select>
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
                            <span class="right">¥ {{ $item['price'] }}</span>
                          </li>
                          @endforeach
                        </ul>
                        <div class="checkout__order__subtotal">Subtotal <span>¥<span>{{ $cart->totalPrice }}</span></span></div>
                        <div class="checkout__order__total">Delivery Charge <span>¥<span id="deliveryCharge">{{ $cart->deliveryCharge }}</span></span></div>
                        <div class="checkout__order__total">Delivery Charge <span>¥<span id="totalPrice">{{ $cart->totalPrice }}</span></span></div>
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

                        
                          <ul class="list-group">
                            <li class="list-group-item">
                              <h4 class="right">Delivery Charge: ¥ <span id="deliveryCharge">{{ $cart->deliveryCharge }}</span></h4><br/>
                            </li>
                            {{-- @if(Auth::user()->points > 0)
                              <li class="list-group-item">
                                <h4 class="right">
                                  <table style="float: right;">
                                    <tr>
                                      <td><label for="useearnedbalance" style="margin-right: 10px;">Pay from earned balance: ¥ </label></td>
                                      <td>
                                          @if($cart->totalPrice > Auth::user()->points)
                                            <input type="number" name="useearnedbalance" id="useearnedbalance" max="{{ Auth::user()->points }}" min="0" step=".01" class="form-control" value="0" onchange="useEarnedBalance()">
                                          @else
                                            <input type="number" name="useearnedbalance" id="useearnedbalance" max="{{ $cart->totalPrice }}" min="0" step=".01" class="form-control" value="0" onchange="useEarnedBalance()">
                                          @endif
                                        
                                      </td>
                                    </tr>
                                  </table>
                                </h4><br/><br/>
                              </li>
                            @else
                              <input type="hidden" name="useearnedbalance" id="useearnedbalance" max="{{ $cart->totalPrice }}" min="0" step=".01" class="form-control" value="0" onchange="useEarnedBalance()">
                            @endif --}}
                            <li class="list-group-item">
                              <input type="hidden" name="actualtotalprice" id="actualtotalprice" value="{{ $cart->totalPrice }}">
                              <h4 class="right bold">Total Payable Price: ¥ <span id="totalPrice">{{ $cart->totalPrice }}</span></h4><br/>
                            </li>
                          </ul>

                          

                          {{-- <div class="row">
                            <div class="col-md-4">
                              <select id="deliverylocation" name="deliverylocation" class="" required="" onchange="changeDeliveryLocation()">
                                <option value="" selected="" disabled="">Select Delivery Location</option>
                                <option value="0">Inside Dhaka</option>
                                <option value="1020">Free Pick-up Point</option>
                                <option value="2">Outside of Dhaka</option>
                              </select>
                              <span id="freePickUpPoint"></span>
                            </div>
                            <div class="col-md-12">
                              <label for="payment_method">Payment Method</label>
                              <select id="payment_method" name="payment_method" class="form-control" required="">
                                <option value="" selected="" disabled="">Payment Method</option>
                                <option value="0" selected="">Cash On Delivery</option>
                                <option value="1">Payment Gateway</option>
                              </select>
                              <span id="bKashText"></span>
                            </div>
                            <div class="col-md-4">
                              <label for="fcode">আপনার বন্ধুর ইউজার আইডি (যদি থাকে) <a href="#!" title="আপনার বন্ধুর ইউজার আইডি দিলে তার একাউন্টে পয়েন্ট যোগ হবে!"><i class="fa fa-question-circle"></i></a></label>
                              {!! Form::text('fcode', null, array('class' => 'form-control')) !!}
                            </div>
                          </div> --}}

                          {!! Form::submit('Confirm Order', array('class' => 'highlight-button-black-background btn btn-medium no-margin pull-right checkout-btn xs-width-100 xs-text-center', 'style' => 'margin-top:20px;', 'id' => 'checkout-btn')) !!}
                        
                    </div>
                </div>
              </div>
            {!! Form::close() !!}  
          </div>
        </div>
  </section>
  <!-- Checkout Section End -->
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
        toastr.warning('আপনি অর্জিত ব্যালেন্স ¥ {{ bangla(Auth::user()->points) }} এর বেশি ব্যবহার করতে পারবেন না!').css('width', '400px');
        $('#actualtotalprice').val({{ $cart->totalPrice }});
      } else if(({{ Auth::user()->points }} > {{ $cart->totalPrice }}) && ($('#useearnedbalance').val() > {{ $cart->totalPrice }})) {
        $('#checkout-btn[type="submit"]').attr('disabled','disabled');
        toastr.warning('মোট পণ্যমূল্য ¥ {{ bangla($cart->totalPrice) }} এর বেশি দিতে পারবেন না!').css('width', '400px');
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