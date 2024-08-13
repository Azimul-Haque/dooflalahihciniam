@extends('layouts.ogani')

@section('title', 'Login')

@section('css')
<style type="text/css">
  .login-box {
    margin-top: 40px;
    margin-bottom: 40px;
    padding: 20px;
    -webkit-box-shadow: 3px 3px 10px 3px rgb(166 166 166 / 40%);
    -moz-box-shadow: 3px 3px 10px 3px rgba(166,166,166,0.4);
    box-shadow: 3px 3px 10px 3px rgb(166 166 166 / 40%);
  }
  .login-box a:hover {
    color: black;
  }
</style>  
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
              <h2 style="text-align: center"><b>LOGIN</b></h2><hr/>
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
                <div style="float: left; margin-top: 10px;">
                  <big><a href="{{ route('user.register') }}">Register</a></big> | <a href="{{ url(config('adminlte.password_reset_url', 'password/reset')) }}">Forgot password?</a>
                </div>
                <div style="float: right;">
                  <button type="submit" class="site-btn">Login</button>
                </div><br/><br/>
              </form>
              
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- end content section -->


@endsection

@section('js')

@endsection