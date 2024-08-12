@extends('layouts.ogani')

@section('title', 'Login')

@section('css')

.login-box
  
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
                        <a href="{{ route('product.index') }}">Mainichi Halal Food</a>
                        <span>Login</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Breadcrumb Section End -->

  <!-- content section -->
  <section class="content-section padding-three">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mx-auto">
            <div class="login-box">
              <h1 style="text-align: center">Login</h1>
              <form action="{{ route('user.login') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="phoneoremail">Email or Phone Number</label>
                  <input class="form-control" type="text" id="phoneoremail" name="phoneoremail">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input class="form-control" type="password" id="password" name="password">
                </div>
                <button type="submit" class="highlight-button btn btn-small no-margin pull-right checkout-btn xs-width-100 xs-text-center">Login</button>
              </form>
              <p><a href="{{ route('user.register') }}">Register</a> | <a href="{{ url(config('adminlte.password_reset_url', 'password/reset')) }}">Forgot password?</a></p>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- end content section -->


@endsection

@section('js')

@endsection