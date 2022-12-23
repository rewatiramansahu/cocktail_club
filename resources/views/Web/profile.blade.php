@extends('web.user-master')
@section('child-banner')
    <div class="inr-ban"> 
      <img class="img-fluid" src="{{ asset('public/web')}}/images/inr-ban.jpg" alt="" />
      <h2 class="page-title">My Profile</h2>
    </div>
@endsection
@section('child-content')
<div class="my-profile-wrap">
                      <h3>Primary Information </h3>
                      <div class="table-responsive">
                        <table class="table info-table my-2">
                            <tbody>
                                <tr>
                                    <td>First Name :</td>
                                    <td>Jon</td>
                                </tr>
                                <tr>
                                    <td>Last Name :</td>
                                    <td>Doe</td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td>Male</td>
                                </tr>
                                <tr>
                                    <td>Date of Birth</td>
                                    <td>00-00-0000</td>
                                </tr>
                                <tr>
                                    <td>Bio</td>
                                    <td>---</td>
                                </tr>
                                <tr>
                                    <td>Mobile Number</td>
                                    <td>09876543221</td>
                                </tr>
                                <tr>
                                    <td>Location</td>
                                    <td>--</td>
                                </tr>
                                <tr>
                                    <td>E-mail Id</td>
                                    <td>jondoe@gmail.com</td>
                                </tr>
                                <tr>
                                  <td></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th><a href="#">Edit <i class="fa fa-angle-right"></i></a></th>
                                    <th></th>                                            
                                </tr>
                            </tfoot>
                        </table>
                      </div>
                    </div>
@endsection
   