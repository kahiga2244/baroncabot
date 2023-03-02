@extends('layouts.site')
@section('title'){!! $page->title !!} @endsection
@section('description'){!! $page->meta_description !!}@endsection
@section('keywords'){!! $page->meta_tags !!}@endsection
@section('url'){!! route('child.page',['products',$page->url]) !!}@endsection
@if($page->thumbnail != "")@section('image'){!! Helper::backend() !!}/public/media/pages/{!! $page->thumbnail !!}@endsection @else @section('image'){!! asset('assets/favicons/android-icon-192x192.png') !!}@endsection @endif
@section('article')
   <meta property="article:publisher" content="https://www.facebook.com/baronandcabot" />
   <meta property="article:section" content="View all" />
   <meta property="article:published_time" content="{!! date('Y-m-d H:i:s', strtotime($page->created_at)) !!}" />
   <meta property="article:modified_time" content="{!! date('Y-m-d H:i:s', strtotime($page->updated_at)) !!}" />
@endsection
@section('content')
   <!-- breadcrumb start -->
   <section class="breadcrumb-section p-0">
      <img src="{!! asset('assets/images/inner-background.jpg') !!}" class="bg-img img-fluid" alt="">
      <div class="container">
         <div class="breadcrumb-content">
            <div>
               <h1 class="text-white">Contact us</h1>
               <nav aria-label="breadcrumb" class="theme-breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="{!! url('/') !!}">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>
   </section>
   <!-- breadcrumb end -->

   <!-- Get in touch section start -->
   <section class="small-section get-in-touch">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 contact-img">
               @if($agent->isMobile())
                  <center><img src="{!! asset('assets/images/CU.png') !!}" class="img-fluid ml-2" alt=""></center>
               @else
                  <img src="{!! asset('assets/images/CU.png') !!}" class="img-fluid ml-2" alt="" style="width:80%">
               @endif

            </div>
            <div class="col-lg-6">
               <div class="log-in">
                  <div class="mb-4 text-start text-center">
                     <h2>Let's Get In Touch</h2>
                     <p>Find out more about our latest UK property opportunities get in touch with our team.</p>
                  </div>
                  <form class="row gx-3" action="{!! route('website.inquiry') !!}" method="POST" >
                     @csrf
                     <div class="col-md-6">
                        <div class="form-group">
                           <input type="text" class="form-control" name="first_name" placeholder="Enter your name" required="">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <input type="text" class="form-control" name="last_name" placeholder="Enter Last name" required="">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <input type="email" class="form-control" name="email" placeholder="email address" required="">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <input type="tel" name="phone_number" id="phone2" class="form-control" required>
                           <span id="valid-msg2" class="hide">✓ Valid</span>
                           <span id="error-msg2" class="hide"></span>
                        </div>
                     </div>
                     <div class="form-group col-md-12">
                        <textarea class="form-control" placeholder="Write here something" rows="6" name="inquiry"></textarea>
                        <input type="hidden" name="page" value="Contact us" class="form-control" required>
                     </div>
                     {!! NoCaptcha::renderJs() !!}
                     {!! NoCaptcha::display() !!}
                     @error('g-recaptcha-response')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                     @enderror
                     <div class="col-md-12 submit-btn">
                        <center><button type="submit" class="btn btn-warning hide" id="submitForm2">Submit Information</button></center>
                        <center><small class="text-danger hide" id="phone_valid2">Your Phone Number is invalid</small></center>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Get in touch section end -->

   <!-- contact details section start -->
   <section class="small-section contact_section pt-0 contact_bottom">
      <div class="container">
         <div class="row">
            <div class="col-lg-4 col-sm-6">
               <div class="contact_wrap">
                  <i data-feather="map-pin"></i>
                  <h3>International Office</h3>
                  <p class="font-roboto">501 Swiss tower, cluster Y, JLT Dubai<br>
                     <a href="tel:+971 4 568 6572">+971 4 568 6572</a>
                  </p>
               </div>
            </div>
            <div class="col-lg-4 col-sm-6">
               <div class="contact_wrap">
                  <i data-feather="map-pin"></i>
                  <h3>UK Office</h3>
                  <p class="font-roboto">Salisbury House 29 Finsbury Circus UNIT FC.394 <br> London England EC2M 5QQ <br>
                  +44(0)203 807 9708
                  </p>
               </div>
            </div>
            <div class="col-lg-4 col-sm-6">
               <div class="contact_wrap">
                  <i data-feather="mail"></i>
                  <h3>Online service</h3>
                  <ul>
                     <p>
                        Inquiries: info@baroncabot.com</br>
                        <a href="telto:+97104375753" target="_blank">+971 (0) 437 5753</a><br>
                        <a href="telto:+4402038079708">+44(0)203 807 9708</a>
                     </p>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- contact details section end -->
@endsection
@section('scripts')
   <script>
      var input2 = document.querySelector("#phone2"),
         errorMsg2 = document.querySelector("#error-msg2"),
         validMsg2 = document.querySelector("#valid-msg2");
         submitBtn2 = document.querySelector("#submitForm2");
         phoneValid2 = document.querySelector("#phone_valid2");

      // Error messages based on the code returned from getValidationError
      var errorMap2 = [ "Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

      // Initialise plugin
      var intl2 = window.intlTelInput(input2, {
         initialCountry: "auto",
         nationalMode:false,
         // geoIpLookup: function(success, failure) {
         //    $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
         //       var countryCode = (resp && resp.country) ? resp.country : "";
         //       success(countryCode);
         //    });
         // },

         utilsScript: "{!! asset('assets/js/intl-tel-input-master/build/js/utils.js') !!}",
      });

      var reset2 = function() {
         input2.classList.remove("error");
         errorMsg2.innerHTML = "";
         errorMsg2.classList.add("hide");
         validMsg2.classList.add("hide");
         submitBtn2.classList.add("hide");
         phoneValid2.classList.add("hide");
         // $('#leadsForm2').submit(function(e) {
         //    e.preventDefault();
         // })
      };

      // Validate on blur event
      input2.addEventListener('blur', function() {
         reset();
         if(input2.value.trim()){
            if(intl2.isValidNumber()){
               validMsg2.classList.remove("hide");
               submitBtn2.classList.remove("hide");
               phoneValid2.classList.add("hide");
               // $('#leadsForm2').submit(function(e) {
               //    e.returnValue = true;
               // });
            }else{
               input2.classList.add("error");
               var errorCode2 = intl2.getValidationError();
               errorMsg2.innerHTML = errorMap2[errorCode2];
               errorMsg2.classList.remove("hide");
               phoneValid2.classList.remove("hide");
            }
         }
      });

      // Reset on keyup/change event
      input2.addEventListener('change', reset2);
      input2.addEventListener('keyup', reset2);

   </script>
@endsection
