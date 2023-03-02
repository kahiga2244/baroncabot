@extends('layouts.site')
@section('title')Facebook @endsection
@section('description')Facebook Leads Page @endsection
@section('keywords')Facebook Leads Page @endsection
@section('url'){!! url('/') !!}@endsection
@section('image'){!! asset('assets/favicons/android-icon-192x192.png') !!}@endsection
@section('stylesheets')
   <style>
      .iti.iti--allow-dropdown {
         width: 260px;
      }
      form label {
         color: #586167;
         float: left;
      }
      nav{
         display: none;
      }
      ul.info-list li {
         display: block;
         font-size: 15px;
      }
   </style>
@endsection
@section('content')
   <!-- subscribe section start -->
   <section class="subscribe-bg-2 parallax-image" style="background-image: url({!! asset('assets/images/rp0IWe.jpg') !!});">
      <div class="container mt-5">
         <div class="row mb-5 mt-5">
            <div class="col mb-3  @if($agent->isMobile()) order-2 @endif">
               <div class="video-details text-left" style="text-align: left !important">
                  <ul class="info-list">
                     <li><i class="fal fa-rocket-launch"></i> Find out why UK is voted the <b>"Most transparent property market in the world"</b></li>
                     <li><i class="fal fa-rocket-launch"></i> Learn how YOU will get a UK mortgage (no matter where you live),</li>
                     <li><i class="fal fa-rocket-launch"></i> Understand what regulation protects you,</li>
                     <li><i class="fal fa-rocket-launch"></i> No need for you to have any connection to England,</li>
                     <li><i class="fal fa-rocket-launch"></i> Get returns up to 14% per annum,</li>
                     <li><i class="fal fa-rocket-launch"></i> All of your costs covered and income in pounds,</li>
                     <li><i class="fal fa-rocket-launch"></i> Currency inflation beating - protect your future TODAY.</li>
                  </ul>
                  <h5 class="text-center mt-4"><b>As Seen On</b></h5>
                  <div class="row mt-4">
                     <div class="col-md-4 mb-2 col-6">
                        <a href="https://baroncabot.com/blog/more-opportunities-for-africans-to-invest-in-property-in-the-uk/details" target="_blank">
                           <img src="{!! asset('assets/images/forbesmobile.jpg') !!}" class="img-fluid">
                        </a>
                     </div>
                     <div class="col-md-4 mb-2 col-6">
                        <a href="https://baroncabot.com/blog/baron-cabot-expands-investment-opportunities-in-africa-J6Ji/details" target="_blank">
                           <img src="{!! asset('assets/images/bbcmobile.jpg') !!}" class="img-fluid">
                        </a>
                     </div>
                     <div class="col-md-4 mb-2 col-6">
                        <a href="https://baroncabot.com/blog/baron-cabot-expands-investment-opportunities-in-africa/details" target="_blank">
                           <img src="{!! asset('assets/images/cnbcmobile.jpg') !!}" class="img-fluid">
                        </a>
                     </div>
                     <div class="col-md-4 mb-2 col-6">
                        <a href="https://baroncabot.com/blog/news/category" target="_blank">
                           <img src="{!! asset('assets/images/cnnmobile.jpg') !!}" class="img-fluid">
                        </a>
                     </div>
                     <div class="col-md-4 mb-2 col-6">
                        <a href="https://baroncabot.com/blog/news/category" target="_blank">
                           <img src="{!! asset('assets/images/ktnmobile.jpg') !!}" class="img-fluid">
                        </a>
                     </div>
                     <div class="col-md-4 mb-2 col-6">
                        <a href="https://baroncabot.com/blog/news/category" target="_blank">
                           <img src="{!! asset('assets/images/venturesmobile.jpg') !!}" class="img-fluid">
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col mb-3">
               <div class="video-details" @if(!$agent->isMobile())style="height: 725px"@endif>
                  <h2 class="mb-5">Fill In Your Details</h2>
                  <form class="col" method="POST" action="{!! route('website.inquiry') !!}">
                     @csrf
                     <div class="row">
                        <div class="col-md-6">
                           <label class="mt-3 text-left">First Name</label>
                           <input type="text" name="first_name" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                           <label class="mt-3 text-left">Last Name</label>
                           <input type="text" name="last_name" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                           <label class="mt-3 text-left">Enter Phone Number</label><br>
                           <input type="tel" name="phone_number" id="phone" class="form-control" required>
                           <span id="valid-msg" class="hide">✓ Valid</span>
                           <span id="error-msg" class="hide"></span>
                           <input type="hidden" name="page" value="@yield('title')" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                           <label class="mt-3 text-left">Email</label>
                           <input type="email" name="email" class="form-control" required>
                        </div>
                     </div>
                     {!! NoCaptcha::renderJs() !!}
                     {!! NoCaptcha::display() !!}
                     @error('g-recaptcha-response')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                     @enderror
                     <div class="col-12 mt-3">
                        <center><button type="submit" class="btn btn-warning hide" id="submitForm">Submit Information</button></center>
                        <center><small class="text-danger hide" id="phone_valid">Your Phone Number is invalid</small></center>
                     </div>
                     <br><br>
                     <center>
                        <a href="https://baroncabot.com/africa" target="_blank" class="mt-5">Learn more on how to invest in UK Property Market</a>
                     </center>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- subscribe section end -->
@endsection
