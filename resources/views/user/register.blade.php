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
              <h2 style="text-align: center"><b>LOGIN</b></h2>
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
                  <a href="{{ route('user.register') }}">Register</a> | <a href="{{ url(config('adminlte.password_reset_url', 'password/reset')) }}">Forgot password?</a>
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









@extends('layouts.index')

@section('title', 'Register')

@section('css')

@endsection

@section('content')
    <!-- head section -->
    <section class="content-top-margin page-title page-title-small bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7 col-sm-12 wow fadeInUp" data-wow-duration="300ms">
                    <!-- page title -->
                    <h1 class="black-text">Register</h1>
                    <!-- end page title -->
                </div>
                <div class="col-lg-4 col-md-5 col-sm-12 breadcrumb text-uppercase wow fadeInUp xs-display-none" data-wow-duration="600ms">
                    <!-- breadcrumb -->
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Register</li>
                    </ul>
                    <!-- end breadcrumb -->
                </div>
            </div>
        </div>
    </section>
    <!-- end head section -->

    <!-- content section -->
    <section class="content-section padding-three">
        <div class="container">
          <div class="row">
              <div class="col-md-6 col-md-offset-3">
                <div class="login-box">
                  <h1 style="text-align: center">Register</h1>
                  {!! Form::open(['route' => 'user.register', 'method' => 'POST']) !!}
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', null, array('class' => 'form-control', 'required' => '')) !!}

                    {!! Form::label('phone', 'Phone No') !!}
                    {!! Form::text('phone', null, array('class' => 'form-control', 'required' => '', "onkeypress" => "if(this.value.length==11) return false;")) !!}{{-- onkeypress="if(this.value.length==11) return false;" --}}

                    {!! Form::label('email', 'Email') !!}
                    {!! Form::text('email', null, array('class' => 'form-control', 'required' => '')) !!}

                    {!! Form::label('address', 'Delivery Address') !!}
                    {!! Form::textarea('address', null, array('class' => 'form-control address', 'required' => '')) !!}

                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', array('class' => 'form-control', 'required' => '')) !!}

                    {!! Form::label('password_confirmation', 'Confirm Password') !!}
                    {!! Form::password('password_confirmation' , array('class' => 'form-control', 'required' => '')) !!}

                    {!! Form::label('captcha', 'Captcha') !!}
                    {!! app('captcha')->display() !!}

                    {!! Form::submit('Register', array('class' => 'highlight-button btn btn-block btn-small checkout-btn xs-width-100 xs-text-center', 'style' => 'margin-top:20px;')) !!}
                  {!! Form::close() !!}
                </div>
              </div>
          </div>
        </div>
    </section>
    <!-- end content section -->
@endsection

@section('js')
  
@endsection