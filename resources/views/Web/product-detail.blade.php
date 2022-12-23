@extends('web.master')
@section('content')
<section class="main-wrap">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="pro-dtl-img">
                <img class="img-fluid" src="{{asset('public/product/images')}}/{{$product->img}}" alt="{{$product->title}}" style="width:636px;height:636px" />
            </div>
          </div>
          <div class="col-md-6">
              <div class="pro-dtl-txt">
                  <h3>{{$product->title}}</h3>
                  <p>{{$product->sub_title}}</p>
                  <div class="rating"><img src="{{asset('public/web')}}/images/star.png" alt=""  /></div>
                  
                    @foreach($product->psizes as $index => $psize) 
                        @if($index == 0)                       
                       <span class="price" >${{$psize->price}}.00</span>
                       @endif
                    @endforeach
                  <p>{{$product->short_description}}</p>
                  <ul class="quantity-lst">
                    @foreach($product->psizes as $index => $psize) 
                       <li class="{{ $index == 0 ? 'active' : '' }}"> {{$psize->sizes->size}}{{$psize->sizes->unit}} </li>
                    @endforeach
                    
                  </ul>

                  <h4>Quantity</h4>
                  <div id="field1" class="count-bx">
                    <button id="sub" class="sub">-</button>
                    <input id="1" value="1" min="1" max="3">
                    <button id="add" class="add">+</button>
                  </div>

                  <a href="cart.html" class="btn btn-danger mt-3">Add To Cart</a>
              </div>
            </div>
        </div>

        <div class="mt-5">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#tab1" role="tab">Description</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab2" role="tab">Review</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                  {!! $product->long_description !!}
                </div>

                <div class="tab-pane fade" id="tab2" role="tabpanel">
                  <div class="tab-head-prt">
                    <div>
                      <div class="rating"><img src="{{asset('public/web')}}/images/star2.png" alt=""></div>
                      <h4>Based on 2 reviews</h4>
                    </div>
                    <a href="#" class="btn btn-danger">Add To Cart</a>
                  </div>
                  <div class="review-bx">
                      <div class="rating"><img src="{{asset('public/web')}}/images/star2.png" alt=""></div>
                      <h3>Jasminie <span>on May 23, 2022</span></h3>
                      <p>Sonsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                  <div class="review-bx">
                      <div class="rating"><img src="{{asset('public/web')}}/images/star2.png" alt=""></div>
                      <h3>Jecob <span>on Aug 12, 2022</span></h3>
                      <p>Sonsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                </div>
            </div>
        </div>
      </div>
    </section>

    <section class="main-wrap">
      <div class="container">
        <h3 class="main-title">Releted Product</h3>

        <div id="pro-carousel2" class="owl-carousel owl-theme mt-4 slide">

        @forelse ($reletedProducts as $reletedProduct)          
            <div class="item">
             <div class="pro-box">
              <figure class="pro-img">
                  <img src="{{asset('public/product/images')}}/{{$reletedProduct->img}}" alt="" class="img-fluid">
                  <ul class="cart-lst">
                    <li><a href="#"><img src="{{asset('public/web')}}/images/ico5.png" alt=""></a></li>
                    <li><a href="#"><img src="{{asset('public/web')}}/images/ico4.png" alt=""></a></li>
                  </ul>
                  @if(!is_null($reletedProduct->descount))
                  <span class="tag">-{{$reletedProduct->descount}}%</span>
                  @endif
              </figure>
              <a href="{{route('web-product-detail',$reletedProduct->slug)}}">
                <h3>{{$reletedProduct->title}}</h3> 
                </a>    
                <span class="rating"><img class="img-fluid" src="{{asset('public/web')}}/images/star.png" alt="" /></span>
                <a href="{{route('web-product-detail',$reletedProduct->slug)}}">
                <span class="price">
                @if($reletedProduct->psizes->min('price') != NULL)    
                ${{$reletedProduct->psizes->min('price')}}.00  
                @else
                  $0.00 
                @endif


                </span>
              </a>                    
            </div>
          </div>
        @empty
            <p>No Product Found</p>
        @endforelse 


        </div>

        <h3 class="main-title mt-5">Our Top Brand</h3>

        <div id="brand-carousel" class="owl-carousel owl-theme mt-5 slide">
          <div class="item">
            <img class="img-fluid" src="{{asset('public/web')}}/images/1.png" alt="" />
          </div>
          <div class="item">
            <img class="img-fluid" src="{{asset('public/web')}}/images/2.png" alt="" />
          </div>
          <div class="item">
            <img class="img-fluid" src="{{asset('public/web')}}/images/3.png" alt="" />
          </div>
          <div class="item">
            <img class="img-fluid" src="{{asset('public/web')}}/images/4.png" alt="" />
          </div>
          <div class="item">
            <img class="img-fluid" src="{{asset('public/web')}}/images/5.png" alt="" />
          </div>
          <div class="item">
            <img class="img-fluid" src="{{asset('public/web')}}/images/6.png" alt="" />
          </div>
          <div class="item">
            <img class="img-fluid" src="{{asset('public/web')}}/images/1.png" alt="" />
          </div>
          <div class="item">
            <img class="img-fluid" src="{{asset('public/web')}}/images/2.png" alt="" />
          </div>
          <div class="item">
            <img class="img-fluid" src="{{asset('public/web')}}/images/3.png" alt="" />
          </div>
        </div>
      </div>
    </section>
@endsection