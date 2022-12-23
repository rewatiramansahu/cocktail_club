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
                <form action="{{route('web-register-save')}}" method="post">
                    @csrf
                  @include('web.error-msg')
                  <div class="row">
                    <div class="col-12 col-md-12 mb-3">
                      <div class="form-group">
                        <label>Name </label>
                        <input type="text" class="form-control" name="name"  value="{{old('name') ?? ''}}" placeholder="|" />
                      </div>
                    </div>
                    <div class="col-12 col-md-12 mb-3">
                      <div class="form-group">
                        <label>Email Address </label>
                        <input type="email" class="form-control" name="email"  value="{{old('email') ?? ''}}" placeholder="|" />
                      </div>
                    </div>
                    <div class="col-12 col-md-12 mb-3">
                      <div class="form-group">
                        <label>Mobile Number </label>
                        <input type="text" class="form-control" name="phone" placeholder="|"  value="{{old('phone') ?? ''}}" />
                      </div>
                    </div>
                    <div class="col-12 col-md-12 mb-3">
                      <div class="form-group">
                        <label>Password </label>
                        <input type="password" class="form-control"  name="password" placeholder="|" />
                      </div>
                    </div>
                    <div class="col-12 col-md-12 mb-3">
                      <div class="form-group">
                        <label>Confirm Password </label>
                        <input type="password" class="form-control" name="confirm_password" placeholder="|" />
                      </div>
                    </div>
                    <div class="col-12 col-md-12 mb-3">
                      <div class="form-group">
                        <label>Zip Code </label>
                        <input type="text" class="form-control" name="zipcode" placeholder="|"  value="{{old('zipcode') ?? ''}}" />
                      </div>
                    </div>
                    <div class="col-12 col-md-12 mb-3">
                      <div class="form-group">
                        <label>City </label>
                        <input type="text" class="form-control" name="city" placeholder="|" value="{{old('city') ?? ''}}" />
                      </div>
                    </div>
                    <div class="col-12 col-md-12 mb-3">
                      <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" name="term" value="1" id="agree_privacy_policy">
                        <label class="form-check-label" for="agree_privacy_policy">I agree to the Terms and conditions and Privacy Policy</label>
                      </div>
                    </div>
                    <div class="col-12 col-md-12">
                      <div class="form-group submit-btn-wrap">
                        <ul>
                          <li><input class="btn btn-danger" type="submit" name="" value="Sign Up"></li>
                          <li><p> Already have an account? <a href="{{route('web-login')}}">Log In </a></p></li>
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