@extends('web.master')
@section('content')
<div class="inr-ban"> 
      <img class="img-fluid" src="{{asset('public/web')}}/images/inr-ban.jpg" alt="" />
      <h2 class="page-title">Contact Us</h2>
    </div>

    <section class="main-wrap">
      <div class="container">
        <div class="row mt-5">
          <div class="col-md-7">
              <h2 class="contact-title"><span>Send Us</span> Message</h2>                    
              <form class="rd-mailform">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="form-label">Your name</label>
                      <input class="form-control" type="text">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="form-label">Your phone</label>
                      <input class="form-control" type="text">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="form-label">Your e-mail</label>
                      <input class="form-control" type="email">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="form-label">Message</label>
                      <textarea class="form-control"></textarea>
                    </div>
                  </div>
                </div>
                <button class="btn btn-danger mt-3" type="submit">Send message</button>
              </form>
          </div>
          <div class="col-md-5">
              <div class="map-box">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9753.60353613367!2d-97.66942434516508!3d30.19656936906795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8644b13b8b4aff45%3A0x1ca7fca8c9dc2768!2sAustin-Bergstrom%20International%20Airport!5e0!3m2!1sen!2sin!4v1618837785582!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
              </div>
          </div>
        </div>
      </div>
    </section>
@endsection