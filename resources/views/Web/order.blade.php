@extends('web.user-master')
@section('child-banner')
    <div class="inr-ban"> 
      <img class="img-fluid" src="{{ asset('public/web')}}/images/inr-ban.jpg" alt="" />
      <h2 class="page-title">My Order</h2>
    </div>
@endsection
@section('child-content')
<div class="my-order-list">
                      <div class="row">
                        <div class="col-12 col-md-3">
                          <div class="order-img">
                            <img class="img-fluid" src="{{ asset('public/web')}}/images/pro1.png" alt="">
                          </div>
                        </div>
                        <div class="col-12 col-md-9">
                          <div class="order-details">
                            <h4>The Famous One</h4>
                            <div class="order-qty">
                              <p>Quantity: <span>1</span></p>
                            </div>
                            <div class="order-price">
                              <h5>₹570.48</h5>
                            </div>
                            <div class="order-cancel-wrap">
                              <ul>
                                <li class="in-progress">
                                  <p>In Progress</p>
                                </li>
                                <li class="cancel-order">
                                  <a href="#">Cancel Order</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="my-order-list">
                      <div class="row">
                        <div class="col-12 col-md-3">
                          <div class="order-img">
                            <img class="img-fluid" src="{{ asset('public/web')}}/images/pro2.png" alt="">
                          </div>
                        </div>
                        <div class="col-12 col-md-9">
                          <div class="order-details">
                            <h4>Monky Shoulder</h4>
                            <div class="order-qty">
                              <p>Quantity: <span>1</span></p>
                            </div>
                            <div class="order-price">
                              <h5>₹570.48</h5>
                            </div>
                            <div class="order-cancel-wrap">
                              <ul>
                                <li class="in-progress">
                                  <p>In Progress</p>
                                </li>
                                <li class="cancel-order">
                                  <a href="#">Cancel Order</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="my-order-list">
                      <div class="row">
                        <div class="col-12 col-md-3">
                          <div class="order-img">
                            <img class="img-fluid" src="{{ asset('public/web')}}/images/pro3.png" alt="">
                          </div>
                        </div>
                        <div class="col-12 col-md-9">
                          <div class="order-details">
                            <h4>Tullamore DEW</h4>
                            <div class="order-qty">
                              <p>Quantity: <span>1</span></p>
                            </div>
                            <div class="order-price">
                              <h5>₹570.48</h5>
                            </div>
                            <div class="order-cancel-wrap">
                              <ul>
                                <li class="in-progress">
                                  <p>In Progress</p>
                                </li>
                                <li class="cancel-order">
                                  <a href="#">Cancel Order</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
@endsection
   