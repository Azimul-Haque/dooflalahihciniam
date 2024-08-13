<div class="latest-product__text">
    <h4>Top Rated Products</h4>
    <div class="latest-product__slider owl-carousel">
        <div class="latest-prdouct__slider__item">
            @foreach($topratedproducts->slice(0, 3) as $product)
              @php
                  $ptext = $product->title;
                  $pslug = \Illuminate\Support\Str::slug(preg_replace('/[^\w\d]+/', '-', $ptext));
              @endphp
              <a href="{{ route('product.getsingleproduct', [$product->id, $pslug]) }}" class="latest-product__item">
                  <div class="latest-product__item__pic">
                      <img src="{{ asset('images/product-images/'.$product->productimages->first()->image) }}" alt="{{ 'Image of ' . $product->title }}">
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
            @foreach($topratedproducts->slice(3, 3) as $product)
              @php
                  $ptext = $product->title;
                  $pslug = \Illuminate\Support\Str::slug(preg_replace('/[^\w\d]+/', '-', $ptext));
              @endphp
              <a href="{{ route('product.getsingleproduct', [$product->id, $pslug]) }}" class="latest-product__item">
                  <div class="latest-product__item__pic">
                      <img src="{{ asset('images/product-images/'.$product->productimages->first()->image) }}" alt="{{ 'Image of ' . $product->title }}">
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
    </div>
</div>