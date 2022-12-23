@extends('web.master')
@section('content')
<div class="banner"> 
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('public/web')}}/images/banner1.jpg" class="d-block w-100" alt="">
            <div class="carousel-caption d-none d-md-block">
              <h3><span>Special Variety</span> Wine Testing</h3>
              <h4>Your Favourite Alcoholic Beverages Delivered in Minutes!</h4>
              <a href="#" class="btn btn-danger mt-3">Order Now</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('public/web')}}/images/banner1.jpg" class="d-block w-100" alt="">
            <div class="carousel-caption d-none d-md-block">
              <h3><span>Special Variety</span> Wine Testing</h3>
              <h4>The Cocktail Club brings the wine & liquor to the palm of your hands. Order in just a few taps!</h4>
              <a href="#" class="btn btn-danger mt-3">Order Now</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('public/web')}}/images/banner1.jpg" class="d-block w-100" alt="">
            <div class="carousel-caption d-none d-md-block">
              <h3><span>Special Variety</span> Wine Testing</h3>
              <h4>Sale upto 30% Off</h4>
              <a href="#" class="btn btn-danger mt-3">Order Now</a>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <section class="main-wrap">
      <div class="container">
        <h3 class="main-title">Product Category <span>Explore Our Amazing Selection</span></h3>
        <div id="cate-carousel" class="owl-carousel owl-theme mt-4 slide">
        @forelse ($categories as $category)
          <div class="item">
              <div class="cate-bx">
                <a href="#">
                  <div class="cate-img">
                    <img class="img-fluid" src="{{asset('public/category/images')}}/{{$category->img}}" alt="" />
                  </div>
                  <h3>{{$category->name}}</h3>
                </a>
              </div>
            </div>
        @empty
            <p>No Category</p>
        @endforelse 
        </div>
        <div class="row mt-5">
          <div class="col-md-7">
            <div class="add-bx">
              <img class="img-fluid" src="{{asset('public/web')}}/images/bg1.jpg" alt="">
              <div class="inr-txt">
                <h3><span>Enjoy our quality responsibly</span> Soar Beyond <strong>The Expected</strong></h3>
                <p>Starting at <span>$125.00</span></p>
                <a href="#" class="btn btn-light mt-3">Shop Now</a>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="add-bx">
              <img class="img-fluid" src="{{asset('public/web')}}/images/bg2.jpg" alt="">
              <div class="inr-txt cstm-side">
                <h3><span>Just Launched</span> Extra Special <strong>Scotch</strong></h3>
                <p>In-store pickup available</p>
                <a href="#" class="btn btn-light mt-3">Shop Now</a>
              </div>
            </div>
          </div>
        </div>

        <h3 class="main-title mt-5">What’s New <span>A selection of the best-selling</span></h3>
        <div id="pro-carousel" class="owl-carousel owl-theme mt-4 slide">  
        @forelse ($newProducts as $newProduct)          
            <div class="item">
             <div class="pro-box">
              <figure class="pro-img">
                  <img src="{{asset('public/product/images')}}/{{$newProduct->img}}" alt="" class="img-fluid">
                  <ul class="cart-lst">
                    <li><a href="#"><img src="{{asset('public/web')}}/images/ico5.png" alt=""></a></li>
                    <li><a href="#"><img src="{{asset('public/web')}}/images/ico4.png" alt=""></a></li>
                  </ul>
                  @if(!is_null($newProduct->descount))
                  <span class="tag">-{{$newProduct->descount}}%</span>
                  @endif
              </figure>
              <a href="{{route('web-product-detail',$newProduct->slug)}}">
                <h3>{{$newProduct->title}}</h3> 
                <span class="rating"><img class="img-fluid" src="{{asset('public/web')}}/images/star.png" alt="" /></span>
                <span class="price">
                @if($newProduct->psizes->min('price') != NULL)    
                ${{$newProduct->psizes->min('price')}}.00  
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
      </div>
    </section>

    <section class="deal-sec">
      <img class="img-fluid" src="{{asset('public/web')}}/images/bg3.jpg" alt="" />
      <div class="content-bx">
        <h3><span>DAILY DEAL OF THE WEEK</span> SPECIAL COLLECTION <strong>AT A SPECIAL PRICE</strong></h3>
        <a href="#" class="btn btn-danger mt-3">Shop Now</a>
      </div>
    </section>

    <section class="main-wrap">
      <div class="container">
        <h3 class="main-title">Popular For You <span>A selection of the best-selling</span></h3>

        <div id="pro-carousel2" class="owl-carousel owl-theme mt-4 slide">

        @forelse ($popularProducts as $popularProduct)          
            <div class="item">
             <div class="pro-box">
              <figure class="pro-img">
                  <img src="{{asset('public/product/images')}}/{{$popularProduct->img}}" alt="" class="img-fluid">
                  <ul class="cart-lst">
                    <li><a href="#"><img src="{{asset('public/web')}}/images/ico5.png" alt=""></a></li>
                    <li><a href="#"><img src="{{asset('public/web')}}/images/ico4.png" alt=""></a></li>
                  </ul>
                  @if(!is_null($popularProduct->descount))
                  <span class="tag">-{{$popularProduct->descount}}%</span>
                  @endif
              </figure>
              <a href="{{route('web-product-detail',$popularProduct->slug)}}">
                <h3>{{$popularProduct->title}}</h3> 
                </a>    
                <span class="rating"><img class="img-fluid" src="{{asset('public/web')}}/images/star.png" alt="" /></span>
                <a href="{{route('web-product-detail',$popularProduct->slug)}}">
                <span class="price">
                @if($popularProduct->psizes->min('price') != NULL)    
                ${{$popularProduct->psizes->min('price')}}.00  
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