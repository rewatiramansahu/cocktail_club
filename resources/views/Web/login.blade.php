@extends('web.master')
@section('content')
<section class="login-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 offset-md-3">
            <div class="sign-form-wrap">
              <div class="login-title mb-4">
                <div class="log-logo"><img class="img-fluid" src="{{ asset('public/web')}}/images/logo.png"></div>
                <h3>Sign Up</h3>
              </div>
              <div class="signin-form">
                <form action="{{route('web-login-check')}}" method="post">
                    @csrf
                 @include('web.error-msg')
                  <div class="row">
                    <div class="col-12 col-md-12 mb-3">
                      <div class="form-group">
                        <label>Email </label>
                        <input type="email" class="form-control" placeholder="|" name="email" value="{{old('email') ?? ''}}" />
                      </div>
                    </div>
                    <div class="col-12 col-md-12 mb-3">
                      <div class="form-group">
                        <label>Password </label>
                        <input type="password" class="form-control" name="password" placeholder="|" />
                      </div>
                    </div>
                    
                    <div class="col-12 col-md-12 mb-3">
                      <div class="login-forgot-pass">
                        <a class="forgot-password-btn" href="#" >Forgot Password ? </a>
                      </div>
                    </div>
                    <div class="col-12 col-md-12 mb-3">
                      <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="Remember_me">
                        <label class="form-check-label" for="Remember_me" >Remember Me</label>
                      </div>
                    </div>
                    <div class="col-12 col-md-12">
                      <div class="form-group submit-btn-wrap">
                        <ul>
                          <li><input class="btn btn-danger" type="submit" name="" value="Sign Up"></li>
                          <li><p> Don't have an account? <a href="{{route('web-register')}}">Log Up </a></p></li>
                        </ul>
                      </div>
                    </div>

                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection