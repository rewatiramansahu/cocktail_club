@extends('web.master')
@section('content')
<div class="inr-ban"> 
      <img class="img-fluid" src="{{ asset('public/web')}}/images/inr-ban.jpg" alt="" />
      <h2 class="page-title">Wishlist</h2>
    </div>

    

    <section class="main-wrap">
      <div class="container">
        <h3 class="main-title">Wishlist</h3>

        <div class="row mt-5">
          <div class="col-md-12">
            <div class="cart-dtl-bx table-responsive wishlist-table">
              <table class="table table-striped">
                  <thead>
                      <tr>
                          <th>Product</th>
                          <th>Price</th>
                          <th>Stock Status</th>
                          <th></th>
                          <th></th>
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
                            <h5 class="wishlist-instock">In Stock</h5>
                          </td>
                          <td> 
                            <a class="btn btn-danger" href="#">Add to Cart</a>
                          </td>
                          <td>
                            <a class="remove-icon" href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
                          </td>
                      </tr>
                      <tr>
                          <td>
                              <div class="cart-pro-dtl">
                                  <img class="img-fluid" src="images/pro2.png" alt="" />
                                  <h4>Fantastic Steel Shirt <span>350ml</span></h4>
                              </div>
                          </td>
                          <td>$226.00</td>
                          <td>
                            <h5 class="wishlist-outofstock">In Stock</h5>
                          </td>
                          <td> 
                            <a class="btn btn-danger" href="#">Add to Cart</a>
                          </td>
                          <td>
                            <a class="remove-icon" href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
                          </td>
                      </tr>
                      <tr>
                          <td>
                              <div class="cart-pro-dtl">
                                  <img class="img-fluid" src="images/pro3.png" alt="" />
                                  <h4>Chanajor Garam Tikki <span>750ml</span></h4>
                              </div>
                          </td>
                          <td>$226.00</td>
                          <td>
                            <h5 class="wishlist-outofstock">In Stock</h5>
                          </td>
                          <td> 
                            <a class="btn btn-danger" href="#">Add to Cart</a>
                          </td>
                          <td>
                            <a class="remove-icon" href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
                          </td>
                      </tr>
                  </tbody>
              </table>
              
            </div>
          </div>

        </div>
      </div>
    </section>
@endsection