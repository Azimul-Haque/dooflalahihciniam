@extends('layouts.index')

@section('title', 'Contact')

@section('css')

@endsection

@section('content')
    <!-- head section -->
    <section class="content-top-margin page-title page-title-small bg-gray">
      <div class="container">
          <div class="row">
              <!-- section title -->
              <div class="col-md-12 col-sm-12">
                  <span class="text-large letter-spacing-2 black-text font-weight-600 agency-title">Contact</span>
              </div>
              <!-- end section title -->
              <!-- section highlight text -->
              <div class="col-md-6 col-sm-6 text-right xs-text-left">
              </div>
              <!-- end section highlight text -->
          </div>
      </div>
  </section>
    <!-- end head section -->

    <section class="wow fadeIn">
        <div class="container">
            <div class="row">
                <!-- office address -->
                <div class="col-md-6 col-sm-6 xs-margin-bottom-ten">
                    <div class="position-relative"><img src="{{ asset('images/abc.png') }}" alt=""/><a class="highlight-button-dark btn btn-very-small view-map no-margin bg-black white-text" href="https://www.google.co.in/maps" target="_blank">See on Map</a></div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <p class="text-med black-text letter-spacing-1 margin-ten no-margin-bottom text-uppercase font-weight-600 xs-margin-top-five">Email</p>
                            <p><i class="fa fa-envelope black-text"></i> <a href="mailto:info@mainichihalalfood.com">info@mainichihalalfood.com</a></p>
                        </div>
                        <div class="col-md-6 xs-text-center">
                            <p class="text-med black-text letter-spacing-1 margin-ten no-margin-bottom text-uppercase font-weight-600 xs-margin-top-five">Contact No.</p>
                            <p class="black-text no-margin-bottom"><strong><i class="fa fa-phone black-text"></i></strong>Phone: <a href="tel:04-7481-4515">04-7481-4515</a></p>
                            <p class="black-text no-margin-bottom"><strong><i class="fa fa-phone black-text"></i></strong>Fax: <a href="tel:04-7481-4516">04-7481-4516</a></p>
                            <p class="black-text no-margin-bottom"><strong><i class="fa fa-phone black-text"></i></strong>Mobile: <a href="tel:090-1703-9984">090-1703-9984</a></p>
                        </div>
                    </div>
                </div>
                <!-- end office address -->

                <div class="col-md-6 col-sm-6">
                    <span class="text-large letter-spacing-2 black-text font-weight-600 agency-title">Contact Form</span><br/><br/><br/>
                    {!! Form::open(['route' => 'index.postcontactmessage', 'method' => 'POST']) !!}
                        <div id="success" class="no-margin-lr"></div>
                        <input name="name" type="text" value="{{ old('name') }}" placeholder="Name" required="" />
                        <div class="row">
                            <div class="col-md-6">
                                <input name="phone" type="text" value="{{ old('phone') }}" placeholder="Phone Number"  required="" />
                            </div>
                            <div class="col-md-6">
                                <input name="email" type="email" value="{{ old('email') }}" placeholder="Email"  required="" />
                            </div>
                        </div>
                        <textarea name="message" placeholder="Message"  required="">{{ old('message') }}</textarea>
                        
                        @php
                          $contact_num1 = rand(1,20);
                          $contact_num2 = rand(1,20);
                          $contact_sum_result_hidden = $contact_num1 + $contact_num2;
                        @endphp

                        <input type="hidden" name="contact_sum_result_hidden" value="{{ $contact_sum_result_hidden }}">
                        <input type="text" name="contact_sum_result" id="" class="form-control" placeholder="{{ $contact_num1 }} + {{ $contact_num2 }} = ?" required="">
                        {!! app('captcha')->display() !!}<br/>
                        
                        <button id="contact-us-button" type="submit" class="highlight-button-dark btn btn-small button xs-margin-bottom-five"><i class="fa fa-paper-plane"></i> Send</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>

    <section class="wow fadeIn no-padding">
        <div class="container-fuild">
            <div class="row no-margin">
                <div id="canvas1" class="col-md-12 col-sm-12 no-padding contact-map map">
                    <iframe id="map_canvas1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d810.0157399575658!2d140.09124118781082!3d35.70006825145883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6022812f4f57067f%3A0x913d9961d26e44bf!2zSmFwYW4sIOOAkjI3Ni0wMDMyIENoaWJhLCBZYWNoaXlvLCBZYWNoaXlvZGFpaGlnYXNoaSwgMS1jaMWNbWXiiJIy4oiSMSAyLTE2IOesrDc!5e0!3m2!1sen!2sbd!4v1715632587410!5m2!1sen!2sbd"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
   
@endsection