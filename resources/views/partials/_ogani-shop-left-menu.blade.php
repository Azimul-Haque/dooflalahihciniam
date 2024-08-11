<div class="sidebar">
    <div class="sidebar__item">
        <h4>Categories</h4>
        <ul>
            @foreach($categories as $category)
                @php
                    $ctext = $category->name;
                    $cslug = \Illuminate\Support\Str::slug(preg_replace('/[^\w\d]+/', '-', $ctext));
                @endphp

                @if($category->products->count() > 0)
                    @php
                      $totalproductofthiscat = 0;
                      foreach($category->subcategories as $subcategory) {
                        if($subcategory->isAvailable == 1) {
                          foreach ($subcategory->products as $product) {
                            if($product->isAvailable == 1) {
                              $totalproductofthiscat = $totalproductofthiscat + 1;
                            }
                          }
                        }
                      }
                    @endphp
                    @if($category->products->count() > 0 && $totalproductofthiscat > 0)
                        <li>
                            <a href="{{ route('product.categorywise', [$category->id, $cslug]) }}">
                                {{ $category->name }}<span></span>
                            </a>
                            <ul style="margin-left: 30px;">
                                @foreach($category->subcategories as $subcategory)
                                    @php
                                      $totalproductofthissubcat = 0;
                                      if($subcategory->isAvailable == 1) {
                                        foreach ($subcategory->products as $product) {
                                          if($product->isAvailable == 1) {
                                            $totalproductofthissubcat = $totalproductofthissubcat + 1;
                                          }
                                        }
                                      }

                                      $sctext = $subcategory->name;
                                      $scslug = \Illuminate\Support\Str::slug(preg_replace('/[^\w\d]+/', '-', $sctext));
                                    @endphp
                                    @if($subcategory->isAvailable == 1 && $totalproductofthissubcat > 0)
                                        <li
                                        @if(!empty($subcategoryid))
                                            @if($subcategoryid == $subcategory->id)
                                            class="active"
                                            @endif
                                        @endif
                                        >
                                            <a href="{{ route('product.subcategorywise', [$subcategory->id, $scslug]) }}">
                                                {{ $subcategory->name }}
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                    @endif
                @endif
            @endforeach
        </ul>
    </div>
    <div class="sidebar__item">
        <h4>Price</h4>
        <div class="price-range-wrap">
            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                data-min="20" data-max="3000">
                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
            </div>
            <div class="range-slider">
                <div class="price-input">
                    <input type="text" id="minamount">
                    <input type="text" id="maxamount">
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="sidebar__item sidebar__item__color--option">
        <h4>Colors</h4>
        <div class="sidebar__item__color sidebar__item__color--white">
            <label for="white">
                White
                <input type="radio" id="white">
            </label>
        </div>
        <div class="sidebar__item__color sidebar__item__color--gray">
            <label for="gray">
                Gray
                <input type="radio" id="gray">
            </label>
        </div>
        <div class="sidebar__item__color sidebar__item__color--red">
            <label for="red">
                Red
                <input type="radio" id="red">
            </label>
        </div>
        <div class="sidebar__item__color sidebar__item__color--black">
            <label for="black">
                Black
                <input type="radio" id="black">
            </label>
        </div>
        <div class="sidebar__item__color sidebar__item__color--blue">
            <label for="blue">
                Blue
                <input type="radio" id="blue">
            </label>
        </div>
        <div class="sidebar__item__color sidebar__item__color--green">
            <label for="green">
                Green
                <input type="radio" id="green">
            </label>
        </div>
    </div> --}}
    {{-- <div class="sidebar__item">
        <h4>Popular Size</h4>
        <div class="sidebar__item__size">
            <label for="large">
                Large
                <input type="radio" id="large">
            </label>
        </div>
        <div class="sidebar__item__size">
            <label for="medium">
                Medium
                <input type="radio" id="medium">
            </label>
        </div>
        <div class="sidebar__item__size">
            <label for="small">
                Small
                <input type="radio" id="small">
            </label>
        </div>
        <div class="sidebar__item__size">
            <label for="tiny">
                Tiny
                <input type="radio" id="tiny">
            </label>
        </div>
    </div> --}}
    <div class="sidebar__item">
        <div class="latest-product__text">
            <h4>Latest Products</h4>
            <div class="latest-product__slider owl-carousel">
                <div class="latest-prdouct__slider__item">
                    @foreach($newarrivals->slice(0, 3) as $product)
                      {{-- <li class="clearfix">
                          <a href="">
                            <img src="{{ asset('images/product-images/'.$product->productimages->first()->image) }}" alt="{{ $product->title }}">
                          </a>
                          <div class="widget-posts-details">
                            <a href="{{ route('product.getsingleproduct', [$product->id, generate_token(100)]) }}">
                              {{ $product->title }}
                            </a> 
                            @if($product->oldprice > 0)
                              <del>¥ {{ $product->oldprice }}</del>
                            @endif
                            ¥ {{ $product->price }}
                          </div>
                      </li> --}}
                      @php
                          $ptext = $product->title;
                          $pslug = \Illuminate\Support\Str::slug(preg_replace('/[^\w\d]+/', '-', $ptext));
                      @endphp
                      <a href="{{ route('product.getsingleproduct', [$product->id, $pslug]) }}" class="latest-product__item">
                          <div class="latest-product__item__pic">
                              <img src="{{ asset('vendor/ogani/img/latest-product/lp-1.jpg') }}" alt="">
                          </div>
                          <div class="latest-product__item__text">
                              <h6>{{ $product->title }}</h6>
                              <span>
                                  @if($product->oldprice > 0)
                                    <small><del>¥ {{ $product->oldprice }}</del></small>
                                  @endif
                                  ¥ {{ $product->price }}
                              </span>
                          </div>
                      </a>
                    @endforeach
                </div>
                <div class="latest-prdouct__slider__item">
                    @foreach($newarrivals->slice(2, 6) as $product)
                      @php
                          $ptext = $product->title;
                          $pslug = \Illuminate\Support\Str::slug(preg_replace('/[^\w\d]+/', '-', $ptext));
                      @endphp
                      <a href="{{ route('product.getsingleproduct', [$product->id, $pslug]) }}" class="latest-product__item">
                          <div class="latest-product__item__pic">
                              <img src="{{ asset('vendor/ogani/img/latest-product/lp-1.jpg') }}" alt="">
                          </div>
                          <div class="latest-product__item__text">
                              <h6>{{ $product->title }}</h6>
                              <span>
                                  @if($product->oldprice > 0)
                                    <small><del>¥ {{ $product->oldprice }}</del></small>
                                  @endif
                                  ¥ {{ $product->price }}
                              </span>
                          </div>
                      </a>
                    @endforeach
                    {{-- <a href="#" class="latest-product__item">
                        <div class="latest-product__item__pic">
                            <img src="{{ asset('vendor/ogani/img/latest-product/lp-1.jpg') }}" alt="">
                        </div>
                        <div class="latest-product__item__text">
                            <h6>Crab Pool Security</h6>
                            <span>¥30.00</span>
                        </div>
                    </a>
                    <a href="#" class="latest-product__item">
                        <div class="latest-product__item__pic">
                            <img src="{{ asset('vendor/ogani/img/latest-product/lp-2.jpg') }}" alt="">
                        </div>
                        <div class="latest-product__item__text">
                            <h6>Crab Pool Security</h6>
                            <span>¥30.00</span>
                        </div>
                    </a>
                    <a href="#" class="latest-product__item">
                        <div class="latest-product__item__pic">
                            <img src="{{ asset('vendor/ogani/img/latest-product/lp-3.jpg') }}" alt="">
                        </div>
                        <div class="latest-product__item__text">
                            <h6>Crab Pool Security</h6>
                            <span>¥30.00</span>
                        </div>
                    </a> --}}
                </div>
            </div>
        </div>
    </div>
</div>