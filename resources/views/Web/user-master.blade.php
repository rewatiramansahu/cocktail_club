@extends('web.master')
@section('content')
    @yield('child-banner')
    
  
    <section class="main-wrap my-order-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-10 offset-md-1">
            <div class="account-hdr">
              <h4>Account</h4>
              <h5>{{auth()->user()->email}}</h5>
            </div>
            <div class="row">
              <div class="col-12 col-md-4 mb-4 mb-md-0">
                <div class="order-left-sidebar">
                  <h3>Overview</h3>
                  <div class="cat-list">
                    <h4>Account</h4>
                    <ul>
                      <li class="active">
                        <a href="{{route('web-profile')}}">Profile</a>
                      </li>
                      <li>
                        <a href="#">Address</a>
                      </li>
                      <li>
                        <a href="{{route('web-order')}}">Order</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-8">
                
                <div class="order-right-box">
                     @yield('child-content')
                   

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection