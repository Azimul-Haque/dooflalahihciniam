@extends('layouts.ogani')

@section('title', 'About Us')

@section('css')
  <style type="text/css">
    .padding-bottom-ten {
      padding-bottom: 10%;
    }
    .big-text {
      font-size: 16px;
      text-align: justify;
      text-justify: inter-word;
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
                          <span>About Us</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Breadcrumb Section End -->

  <!-- content section -->
  <section class="padding-three">
      <div class="container">
          <div class="row">
              <div class="col-sm-12">
                  
                  <div class="row padding-bottom-ten">
                      <div class="col-md-12 text-center">
                          <h3 class="section-title">Vision & Mission</h3>
                      </div>
                      <div class="col-md-12">
                          <p class="">
                            <h2>Vision</h2>
                            Mainichi Halal Food Shop aspires to establish itself as the epitome of global excellence in the food industry. Our vision entails achieving international acclaim for unparalleled quality and innovation.<br/><br/>
                            <h2>Mission</h2>
                            Dedicated to precision and perfection, our mission is to meticulously produce and deliver premium offerings, including cookies, rusk toast, cup cakes, puffed rice, snacks, semai, noodles, drinks, chips, spices, and culinary products. Upholding unwavering commitment to the highest standards of production, we aim to exceed customer expectations, foster innovation, and strategically contribute to the global marketplace while upholding the principles of sustainability and corporate responsibility.
                          </p>
                      </div>
                  </div>
              </div>

          </div>
      </div>
  </section>
  <!-- end content section -->
@endsection

@section('js')
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
              toastr.success($title+' আপনার ব্যাগে যুক্ত করা হয়েছে।', 'সফল (SUCCESS)').css('width','400px');
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
          }
      });
  }
</script>
@endsection