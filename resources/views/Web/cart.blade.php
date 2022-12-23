@extends('web.master')
@section('content')
<div class="inr-ban"> 
      <img class="img-fluid" src="{{ asset('public/web')}}/images/inr-ban.jpg" alt="" />
      <h2 class="page-title">Cart</h2>
    </div>

    <section class="main-wrap">
      <div class="container">
        <h3 class="main-title">Cart</h3>

        <div class="row mt-5">
          <div class="col-md-8 mb-4 mb-md-0">
            <div class="cart-dtl-bx table-responsive">
              <table class="table table-striped">
                  <thead>
                      <tr>
                          <th>Product</th>
                          <th>Price</th>
                          <th>Quantity</th>
                          <th>Subtotal</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>
                              <div class="cart-pro-dtl">
                                  <img class="img-fluid" src="images/pro1.png" alt="" />
                                  <h4>Monkey Shoulder : The Original <span>350ml</span></h4>
                              </div>
                          </td>
                          <td>$226.00</td>
                          <td>
                            <div id="field1" class="count-bx">
                              <button id="sub" class="sub">-</button>
                              <input id="1" value="1" min="1" max="3">
                              <button id="add" class="add">+</button>
                            </div>
                          </td>
                          <td>$226.00</td>
                      </tr>
                      <tr>
                          <td>
                              <div class="cart-pro-dtl">
                                  <img class="img-fluid" src="images/pro2.png" alt="" />
                                  <h4>Fantastic Steel Shirt <span>350ml</span></h4>
                              </div>                                        
                          </td>
                          <td>$540.00</td>
                          <td>
                            <div id="field1" class="count-bx">
                              <button id="sub" class="sub">-</button>
                              <input id="1" value="1" min="1" max="3">
                              <button id="add" class="add">+</button>
                            </div>
                          </td>
                          <td>$540.00</td>
                      </tr>
                      <tr>
                          <td>
                              <div class="cart-pro-dtl">
                                  <img class="img-fluid" src="images/pro3.png" alt="" />
                                  <h4>Chanajor Garam Tikki <span>750ml</span></h4>
                              </div>                                        
                          </td>
                          <td>$750.99</td>
                          <td>
                            <div id="field1" class="count-bx">
                              <button id="sub" class="sub">-</button>
                              <input id="1" value="1" min="1" max="3">
                              <button id="add" class="add">+</button>
                            </div>
                          </td>
                          <td>$750.99</td>
                      </tr>
                  </tbody>
              </table>
              <div className="coupon-bx mt-4">
                  <form method="get" action="#">
                      <input type="text" placeholder="Coupon code" />
                      <Button type="submit" class="btn btn-danger">Apply</Button>
                  </form>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="cart-dtl-bx">
              <table class="table table-striped">
                  <tbody>
                      <tr>
                          <th>Subtotal</th>
                          <td class="text-right">$776.00</td>
                      </tr>
                      <tr>
                          <th>Total</th>
                          <td class="text-right">$776.00</td>
                      </tr>
                  </tbody>
              </table>
              <a href="#" class="btn btn-danger mt-3 w-100">Proceed to checkout</a>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection