<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('public/web')}}/css/bootstrap.min.css">
    <link href="{{ asset('public/web')}}/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/web')}}/css/menu.css" rel="stylesheet">
    <link href="{{ asset('public/web')}}/css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/web')}}/css/owl.theme.default.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/web')}}/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,500,300,600,700' rel='stylesheet' type='text/css'>
    @yield('css_link')
    @yield('title')
    @yield('css_style')
  </head>
  
  <body>
  	<!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
    
    <header>
      <div class="head-top">
        <div class="container d-flex align-items-center justify-content-between">
          <p class="top-txt">Welcome! Plus member get <span>25% Off</span></p>
         
          <div class="d-flex align-items-center justify-content-end">
            
            @if(auth()->check())
            <ul class="links">
              <li><a href="#">PAYMENT</a></li>
              <li><a href="#">REORDER</a></li>
            </ul>
            <div class="dropdown">
              <button class="btn-account dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="{{asset('public/web')}}/images/ico1.png" alt=""> {{ucFirst(auth()->user()->name)}}
              </button>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="{{route('web-profile')}}">My Profile</a>
                <a class="dropdown-item" href="{{route('web-order')}}">My Order</a>
                  <a class="dropdown-item" href="{{route('web-logout')}}">Logout</a>
              </div>
            </div>
            @else
            <ul class="links">
              <li><a href="{{route('web-register')}}">Register</a></li>
              <li><a href="{{route('web-login')}}">Login</a></li>
            </ul>
            @endif
          </div>
        </div>
      </div>
      <div class="head-bttm">
        <div class="container d-flex align-items-center justify-content-between">
          <div class="logo">
            <a href="{{route('web-home')}}"><img class="img-fluid" src="{{ asset('public/web')}}/images/logo.png" alt=""></a>
          </div>

          <div class="d-flex align-items-center justify-content-end flex-row-reverse">
            @if(auth()->check())
            <ul class="ecom-lst">
              <li>
                <div class="cart-prt">
                    <a href="{{route('web-wishlist')}}"><img src="{{ asset('public/web')}}/images/ico2.png" alt=""></a>
                    <span>0</span>
                </div>
              </li>
              <li>
                <div class="cart-prt">
                    <a href="{{route('web-cart')}}"><img src="{{ asset('public/web')}}/images/ico3.png" alt=""></a>
                    <span>0</span>
                </div>
              </li>
            </ul>
            @endif
            <div class="top-srch">
              <form>
                <input placeholder="Search.." type="text">
                <button type="submit" class="search-icon"><i class="fa fa-search"></i></button>
              </form>
            </div>
            
            <div id="cssmenu">
              <ul>
                <li class="active"><a href="{{route('web-home')}}">Home</a></li>
                <!-- <li><a href="#">Product <i class="fa fa-angle-down"></i></a>
                  <ul>
                    <li><a href="product.html">Product 1</a></li>
                    <li><a href="#">Product 2</a></li>
                    <li><a href="#">Product 3</a></li>
                  </ul>
                </li>-->
                <li><a href="{{route('web-about-us')}}">About Us</a></li>
                <li><a href="{{route('web-product')}}">shop</a></li>
                <li><a href="{{route('web-faq')}}">FAQ’s</a></li>
                <li><a href="{{route('web-contact-us')}}">Contact Us</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

    @yield('content')

    <section class="subscribe-sec">
      <div class="container d-flex align-items-center justify-content-between">
        <div class="lft-prt">
          <img src="{{ asset('public/web')}}/images/mail.png" alt="" />
          <h3>Subscribe to our newsletter <span>Get all the latest information on Events, Sales and Offers.</span></h3>
        </div>
        <div class="submit-box">
          <form method="get" action="#">
            <input placeholder="Enter your email id" type="email">
            <button type="submit" class="search-icon">Subscribe</button>
          </form>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="container">
        <div class="f-top">
          <div class="row">
            <div class="col-md-4">
              <div class="f-logo">
                <img class="img-fluid" src="{{ asset('public/web')}}/images/logo.png" alt="">
              </div>
              <p class="f-pera">Get Question? Call us 24/7 <a href="tel:3109272008">310 927 2008 / 347 819 2464</a></p>
              <ul class="f-social">
                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
              </ul>
            </div>
            <div class="col-md-2">
              <h3 class="footer-title">COMPANY</h3>
              <ul class="footer-menu-list">
                <li><a href="{{route('web-about-us')}}">About Us</a></li>
                <li><a href="#">Team Member</a></li>
                <li><a href="#">Career</a></li>
                <li><a href="{{route('web-contact-us')}}">Contact Us</a></li>
                <li><a href="#">Affilate</a></li>
                <li><a href="#">Order History</a></li>
              </ul>
            </div>
            <div class="col-md-3">
              <h3 class="footer-title">MY ACCOUNT</h3>
              <ul class="footer-menu-list">
                <li><a href="{{route('web-order')}}">Track My Order</a></li>
                <li><a href="{{route('web-cart')}}">View Cart</a></li>
                <li><a href="{{route('web-login')}}">Sign In</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="{{route('web-wishlist')}}">My Wishlist</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
            <div class="col-md-3">
              <h3 class="footer-title">CUSTOMER SERVICE</h3>
              <ul class="footer-menu-list">
                <li><a href="#">Payment Methods</a></li>
                <li><a href="#">Money-back guarantee!</a></li>
                <li><a href="#">Product Returns</a></li>
                <li><a href="#">Support Center</a></li>
                <li><a href="#">Shipping</a></li>
                <li><a href="#">Term and Conditions</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="f-bttm flex-row-reverse">
          <div class="paypal-img">
              <img class="img-fluid" src="{{asset('public/web')}}/images/payment.png" alt="">
          </div>
          <p class="copyright">Copyright © 2022. All Rights Reserved.</p>
        </div>
      </div>
    </footer>

    <div class="modal fade" id="ageModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <div class="modal-body text-center">
            <div class="pop-logo">
              <img class="img-fluid" src="{{asset('public/web')}}/images/logo.png" alt="">
            </div>
            <p>You must be 21 + to use The Cocktail Club. Please drink responsibly.</p>
            <h2>Are you at least 21+ years old?</h2>
            <div class="btn-grp3">
            	<a href="#" class="btn btn-outline-danger">Yes</a>
            	<a href="#" class="btn btn-outline-danger">No</a>
            </div>
            <p class="coptright-pera">To learn more about responsible consumption, Please visit <a href="#">cocktailclub.com</a></p>
          </div>
        </div>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('public/web')}}/js/jquery.min.js"></script>
    <script src="{{ asset('public/web')}}/js/popper.min.js"></script>
    <script src="{{ asset('public/web')}}/js/bootstrap.min.js"></script>
    <script src="{{ asset('public/web')}}/js/menu.js"></script>
    <script src="{{ asset('public/web')}}/js/owl.carousel.min.js"></script> 
	  <script src="{{ asset('public/web')}}/js/main.js"></script>
	  <script src="{{ asset('public/web')}}/js/tinymce.min.js"></script>
    @yield('script')
    @yield('js')
  </body>
</html>

