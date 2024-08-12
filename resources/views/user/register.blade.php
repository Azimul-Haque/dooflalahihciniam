@extends('layouts.ogani')

@section('title', 'Register')

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
                        <span>Register</span>
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
          <div class="col-md-10 mx-auto">
            <div class="login-box">
              <h2 style="text-align: center"><b>REGISTER</b></h2>
              <hr/>
              {!! Form::open(['route' => 'user.register', 'method' => 'POST']) !!}
              <div class="row">
                  <div class="col-md-6">
                      {!! Form::label('name', 'Name') !!}
                      {!! Form::text('name', null, array('class' => 'form-control', 'required' => '')) !!}<br/>
                  </div>
                  <div class="col-md-6">
                      {!! Form::label('email', 'Email') !!}
                      {!! Form::text('email', null, array('class' => 'form-control', 'required' => '')) !!}<br/>
                  </div>
                  <div class="col-md-6">
                      {!! Form::label('phone', 'Phone No') !!}
                      {!! Form::text('phone', null, array('class' => 'form-control', 'required' => '', "onkeypress" => "if(this.value.length==11) return false;")) !!}{{-- onkeypress="if(this.value.length==11) return false;" --}}<br/>

                      {!! Form::label('password', 'Password') !!}
                      {!! Form::password('password', array('class' => 'form-control', 'required' => '')) !!}<br/>
                      
                      {!! Form::label('password_confirmation', 'Confirm Password') !!}
                      {!! Form::password('password_confirmation' , array('class' => 'form-control', 'required' => '')) !!}<br/>
                  </div>
                  <div class="col-md-6">
                      {!! Form::label('address', 'Delivery Address') !!}
                      {!! Form::textarea('address', null, array('class' => 'form-control address', 'required' => '', 'style' => 'max-height: 225px;')) !!}<br/>
                  </div>
                  <div class="col-md-6">
                      {!! Form::label('captcha', 'Captcha') !!}
                      {!! app('captcha')->display() !!}
                  </div>
                  <div class="col-md-6">
                      {!! Form::submit('Register', array('class' => 'site-btn', 'style' => 'margin-top:20px; width: 100%;')) !!}
                  </div>
              </div>
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