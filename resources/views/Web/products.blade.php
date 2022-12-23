@extends('web.master')
@section('content')
<div class="inr-ban"> 
      <img class="img-fluid" src="{{asset('public/web')}}/images/inr-ban.jpg" alt="" />
      <h2 class="page-title">Our Products</h2>
    </div>

    <section class="main-wrap">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="lft-cate-bx">
              <h3>Categories</h3>
              <ul>
                <li>Wine</li>
                <li>Beer</li>
                <li>Whiskey</li>
                <li>Cagnac</li>
                <li>Cocktail</li>
                <li>Tequila</li>
              </ul>
            </div>
            <div class="lft-cate-bx mt-5">
              <h3>Price</h3>
              
              <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault"> $50 - $100</label>
              </div>
              <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                <label class="form-check-label" for="flexCheckDefault2"> $100 - $200</label>
              </div>
              <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                <label class="form-check-label" for="flexCheckDefault3"> $200 - $500</label>
              </div>
              <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                <label class="form-check-label" for="flexCheckDefault4"> $500 - $1000</label>
              </div>
              <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
                <label class="form-check-label" for="flexCheckDefault5"> $1000 - $1500</label>
              </div>              
            </div>
            <div class="lft-cate-bx mt-5">
              <h3>Size</h3>
              
              <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" value="" id="size1">
                <label class="form-check-label" for="size1"> 180ml</label>
              </div>
              <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" value="" id="size2">
                <label class="form-check-label" for="size2"> 375ml</label>
              </div>
              <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" value="" id="size3">
                <label class="form-check-label" for="size3"> 750ml</label>
              </div>
              <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" value="" id="size4">
                <label class="form-check-label" for="size4"> 1000ml</label>
              </div>             
            </div>
          </div>

          <div class="col-md-9">
            <div class="d-flex align-items-center justify-content-between">
              <div class="short-by">
                <span class="sorting-name">Showing:</span>
                <span class="sorting-result">12 Products</span>							
              </div>

              <div class="short-by">
                <span class="sorting-name"> Sort by:</span>
                <select>
                    <option>Best Selling</option>
                    <option>Popularity</option>
                    <option>Default</option>
                    <option>Average Rating</option>
                    <option>Newness</option>
                    <option>Low to High</option>
                    <option>High to Low</option>
                </select>							
              </div>
            </div>

            <div class="row mt-4">
              @forelse($products as $product)
              <div class="col-lg-3 col-md-4">
                <div class="pro-box">
                  <figure class="pro-img">
                      <img src="{{asset('public/web')}}/images/{{$product->img}}" alt="" class="img-fluid">
                      <ul class="cart-lst">
                        <li><a href="#"><img src="{{asset('public/web')}}/images/ico5.png" alt=""></a></li>
                        <li><a href="#"><img src="{{asset('public/web')}}/images/ico4.png" alt=""></a></li>
                      </ul>
                  </figure>
                  <a href="{{route('web-product-detail',$product->slug)}}">
                    <h3>{{$product->title}}</h3> 
                    <span class="rating"><img class="img-fluid" src="{{asset('public/web')}}/images/star.png" alt="" /></span>
                    <span class="price">
                    @if($product->psizes->min('price') != NULL)    
                    ${{$product->psizes->min('price')}}.00  
                    @else
                      $0.00 
                    @endif
                    </span>
                  </a>                    
                </div>
              </div>
              @empty
              <h4>No Data Available</h4>
              @endforelse
             
            </div>

            <div class="text-center mt-4">
              <a href="#" class="btn btn-danger mt-3">Load More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection