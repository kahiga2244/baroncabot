@extends('layouts.site')
@section('title')Baron & Cabot @endsection
@section('description')Baron & Cabot @endsection
@section('keywords')Baron & Cabot @endsection
@section('url'){!! route('landing.page.leads1') !!}@endsection
@section('image'){!! asset('assets/favicons/android-icon-192x192.png') !!}@endsection

@section('stylesheets')
   <style>
      nav{
         display: none;
      }

      .hero-content {
         margin-top: 15%;
      }
      .text-white{
         color:#fff !important;
      }
      .hero-card {
         height: 400px;
         background-color: #F8AF3B;
      }
      .hero-card-mobile {
         background-color: #F8AF3B;
      }
      .top-section{
         margin-top: 35%;
      }

      .breadcrumb-section {
         height: 100vh;
      }

      .top-section-mobile{
         margin-top: 35%;
      }

      .top-section-mobile > ul li {
         color: #fff;
         display: block;
         list-style: circle !important;
         list-style-type: decimal;
         font-size: 15px;
      }

      .top-section-mobile > p {
         font-size: 18px;
         margin-top: 30px;
         color: #F8AF3B;
         display: block;
      }

      .top-section > ul li {
         color: #fff;
         display: block;
         list-style: circle !important;
         list-style-type: decimal;
         font-size: larger;
      }

      .top-section > p {
         font-size: 25px;
         margin-top: 30px;
         color: #F8AF3B;
         display: block;
      }

      .banner-33 {
         margin: 30px auto !important;
         /* background-color: rgba(255, 255, 255, 0.8); */
         /* -webkit-box-shadow: 2px 0px 30px 40px rgb(255 255 255 / 80%); */
         /* box-shadow: 2px 0px 30px 40px rgb(255 255 255 / 80%); */
         padding: 80px !important;
         width: 70% !important;
         margin: 0 auto !important;
         text-align: center !important;
      }

      .banner-33 > ul li {
         display: block;
         text-align: revert;
         font-size: larger;
         color: #fff;
      }

      .banner-33 h1 {
         font-size: 36px;
         color: #ffffff;
      }

      .btn-radius-24{
         border-radius: 24px !important;
      }

      .border {
         width: 235px;
         border-bottom: 1px solid #B78433 !important;
      }

      .know {
         margin-bottom: 20px;
      }

      .know > p {
         font-weight: 600;
         font-size: larger;
      }

      /* .form-control {
         border: 3px solid #073964;
         border-radius: 5rem;
         padding: 10px 10px 10px 10px;
      } */

      .banner-33-mobile > ul li {
         display: block;
         text-align: revert;
         font-size: larger;
         color: #fff;
      }

      .banner-33-mobile h1 {
         font-size: 36px;
         color: #ffffff;
      }

      #error-msg{color: #EA4335;}
      #valid-msg{color: #34A853;}

   </style>
@endsection
@section('content')
   <!-- breadcrumb start -->
   <section class="breadcrumb-section p-0" @if($agent->isMobile())style="height: 110vh;"@endif>
      <img src="{!! asset('assets/images/unsplash_PhYq704ffdA.jpg') !!}" class="bg-img img-fluid" alt="">
      <div class="container">
         <div class="row hero-content">
            <div class="col-lg-12">
               <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-6 mt-5">
                     <h1 class="text-white text-center mt-5">Find Your UK Investment With the <i>5-star Trust Rated</i> UK Market Leaders</h1>
                  </div>
                  <div class="col-md-4">
                     @if($agent->isMobile())
                        <div class="card hero-card-mobile">
                           <div class="card-body">
                              <h3 class="text-center mb-4 mt-2">Request Service Today</h3>
                              <form class="col" id="leadsForm2" method="POST" action="{!! route('website.inquiry') !!}">
                                 @csrf
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <input type="text" name="first_name" placeholder="First Name" class="form-control" required>
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <input type="text" name="last_name" placeholder="Last Name" class="form-control" required>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <input type="email" name="email" placeholder="Email" class="form-control" required>
                                          <input type="hidden" name="page" value="Africa" class="form-control" required>
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <input type="tel" name="phone_number" id="phone2" class="form-control" required>
                                          <span id="valid-msg2" class="hide">✓ Valid</span>
                                          <span id="error-msg2" class="hide"></span>
                                       </div>
                                    </div>
                                 </div>
                                 {!! NoCaptcha::renderJs() !!}
                                 {!! NoCaptcha::display() !!}
                                 @error('g-recaptcha-response')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                 @enderror
                                 <div class="col-12 mt-4">
                                    <center><button type="submit" class="btn btn-light hide" id="submitForm2">Submit Information</button></center>
                                    <center><small class="text-danger hide" id="phone_valid2">Your Phone Number is invalid</small></center>
                                 </div>
                              </form>
                           </div>
                        </div>
                     @else
                        <div class="card hero-card">
                           <div class="card-body">
                              <h3 class="text-center mb-4 mt-2">Request Service Today</h3>
                              <form class="col" id="leadsForm2" method="POST" action="{!! route('website.inquiry') !!}">
                                 @csrf
                                 <div class="row">
                                    <div class="col-md-6 col">
                                       <div class="form-group">
                                          <input type="text" name="first_name" placeholder="First Name" class="form-control" required>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col">
                                       <div class="form-group">
                                          <input type="text" name="last_name" placeholder="Last Name" class="form-control" required>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="row">
                                    <div class="col-md-12 col">
                                       <div class="form-group">
                                          <input type="email" name="email" placeholder="Email" class="form-control" required>
                                          <input type="hidden" name="page" value="Africa" class="form-control" required>
                                       </div>
                                    </div>
                                    <div class="col-md-12 col">
                                       <div class="form-group">
                                          <input type="tel" name="phone_number" id="phone2" class="form-control" required>
                                          <span id="valid-msg2" class="hide">✓ Valid</span>
                                          <span id="error-msg2" class="hide"></span>
                                       </div>
                                    </div>
                                 </div>
                                 {!! NoCaptcha::renderJs() !!}
                                 {!! NoCaptcha::display() !!}
                                 @error('g-recaptcha-response')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                 @enderror
                                 <div class="col-12 mt-4">
                                    <center><button type="submit" class="btn btn-light hide" id="submitForm2">Submit Information</button></center>
                                    <center><small class="text-danger hide" id="phone_valid2">Your Phone Number is invalid</small></center>
                                 </div>
                              </form>
                           </div>
                        </div>
                     @endif
                  </div>
                  <div class="col-md-1"></div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- breadcrumb end -->
   <!-- brand section end -->
   <section class="property-section">
      <!-- TrustBox widget - Starter -->
      <div class="trustpilot-widget" data-locale="en-GB" data-template-id="5613c9cde69ddc09340c6beb" data-businessunit-id="5f746adaaccd9d0001fcbe15" data-style-height="100%" data-style-width="100%" data-theme="light">
         <a href="https://uk.trustpilot.com/review/baroncabot.com" target="_blank" rel="noopener">Trustpilot</a>
      </div>
      <!-- End TrustBox widget -->
   </section>

   <!-- brand section start -->
   <section class="small-section bg-light-blue arrow-gradient">
      <div class="container">
         <div class="row">
            <div class="col">
               <div class="title-1">
                  <h2>We are trusted by</h2>
               </div>
               <div class="slide-3 brand-slider">
                  {{-- <div>
                     <a href="javascript:void(0)" class="logo-box">
                        <img src="{!! asset('assets/images/bbc.png') !!}" alt="" class="img-fluid">
                     </a>
                  </div> --}}
                  <div>
                     <a href="javascript:void(0)" class="logo-box">
                        <img src="{!! asset('assets/images/BBC_News.svg.svg') !!}" alt="" class="img-fluid" style="width:40%;">
                     </a>
                  </div>
                  <div>
                     <a href="javascript:void(0)" class="logo-box">
                        <img src="{!! asset('assets/images/Screenshot_13.png') !!}" alt="" class="img-fluid">
                     </a>
                  </div>
                  <div>
                     <a href="javascript:void(0)" class="logo-box">
                        <img src="{!! asset('assets/images/200px-CNBC_logo.svg.png') !!}" alt="" class="img-fluid" style="width:30%;">
                     </a>
                  </div>
                  <div>
                     <a href="javascript:void(0)" class="logo-box">
                        <img src="{!! asset('assets/images/Forbes_logo.png') !!}" alt="" class="img-fluid">
                     </a>
                  </div>
                  <div>
                     <a href="javascript:void(0)" class="logo-box">
                        {{-- <img src="{!! asset('assets/images/Screenshot_16.png') !!}" alt="" class="img-fluid"> --}}
                        <svg class="cnn-badge-icon" style="outline:0;width:40%" viewBox="0 0 240 240" fill="#CC0000" xmlns="https://www.w3.org/2000/svg" aria-hidden="true"><rect x="0" y="0" width="100%" height="100%" fill="#fff"></rect><path d="M.31-.07v240h240V-.07ZM86.54,135.29V92.51c0-16.1,20.81-23.83,31.82-5.12.8,1.35,18.14,31.22,18.14,31.22V92.51c0-16.1,20.8-23.83,31.81-5.12.8,1.35,18.14,31.22,18.14,31.22V76.79h10.38V147a2.11,2.11,0,0,1-1.51,2.14c-1.1.3-2.26-.38-3.11-1.82-.17-.28-9-15.46-17.48-30.13L159.17,90.4c-2.18-3.7-5.43-4.35-7.74-3.72a6.23,6.23,0,0,0-4.55,6.13V147a2.12,2.12,0,0,1-1.51,2.14c-1.11.3-2.27-.38-3.11-1.82-.15-.25-8.34-14.36-16.25-28-10.08-17.38-16.7-28.78-16.8-28.95-2.18-3.71-5.44-4.35-7.77-3.72a6.24,6.24,0,0,0-4.56,6.13v53.05a2.9,2.9,0,0,1-2.72,2.71H67.23a28.64,28.64,0,0,1,0-57.28h14v10.36H67.35a18.28,18.28,0,1,0,0,36.56H83.68A2.84,2.84,0,0,0,86.54,135.29Zm124.77,12.05c0,16.1-20.81,23.83-31.82,5.13-.79-1.35-18.14-31.23-18.14-31.23v26.1c0,16.1-20.8,23.83-31.81,5.13-.8-1.35-18.14-31.23-18.14-31.23v24.61c0,11.17-6.63,17.22-17,17.22H67.25a43.14,43.14,0,0,1,0-86.28h14V87.15h-14a32.78,32.78,0,1,0,0,65.56H94.16a7,7,0,0,0,6.86-6.85V92.81a2.1,2.1,0,0,1,1.51-2.13c1.1-.3,2.26.38,3.11,1.82l16.79,28.93c9.76,16.83,16.17,27.88,16.25,28,2.19,3.7,5.45,4.35,7.78,3.71A6.22,6.22,0,0,0,151,147V92.82a2.11,2.11,0,0,1,1.49-2.14c1.09-.3,2.24.38,3.08,1.82l15.56,26.81,17.49,30.15c1.71,2.9,4.09,3.93,6.16,3.93a6,6,0,0,0,1.61-.22A6.23,6.23,0,0,0,201,147V76.79h10.34Z" transform="translate(-0.31 0.07)"></path></svg>
                     </a>
                  </div>
                  <div>
                     <a href="javascript:void(0)" class="logo-box">
                        <img src="{!! asset('assets/images/Screenshot_14.png') !!}" alt="" class="img-fluid">
                     </a>
                  </div>

               </div>
               <center>
               <a href="#" class="btn btn-lg btn-outline-dark mt-5" data-bs-toggle="modal" data-bs-target="#getMoreInfo"><i class="fal fa-info-circle"></i> Request Information</a>
               </center>
            </div>
         </div>
      </div>
   </section>

   <section class="service-section service-2" style="background-color: #073964">
      <div class="container">
         <div class="row text-center">
            <div class="col-md-12 mb-5"><h2 style="font-size: 40px;color:#fff">Why Choose Us</h2></div>
            <div class="row mt-5">
               <div class="col-md-2"></div>
               <div class="col-md-8">
                  <div class="row">
                     <div class="col-md-4 mb-5">
                        <center>
                           <img src="{!! asset('assets/images/scatter_chart.png') !!}" alt="scatter_chart" style="width:50%">
                        </center>
                        <h4 class="mt-3 text-center"><a class="text-white" href="#">Property Sourcing</a></h4>
                     </div>
                     <div class="col-md-4 mb-5">
                        <center>
                           <img src="{!! asset('assets/images/mobile2.png') !!}" alt="scatter_chart" style="width:50%">
                        </center>
                        <h4 class="mt-3 text-center"><a class="text-white" href="#">Research Developments</a></h4>
                     </div>
                     <div class="col-md-4 mb-5">
                        <center>
                           <img src="{!! asset('assets/images/arrow_up_wtih_chart.png') !!}" alt="scatter_chart" style="width:50%">
                        </center>
                        <h4 class="mt-3 text-center"><a class="text-white" href="#">Mortgage Supply</a></h4>
                     </div>
                     <div class="col-md-4">
                        <center>
                           <img src="{!! asset('assets/images/property_management.png') !!}" alt="scatter_chart" style="width:50%">
                        </center>
                        <h4 class="mt-3 text-center"><a class="text-white" href="#">Property Management</a></h4>
                     </div>
                     <div class="col-md-4">
                        <center>
                           <img src="{!! asset('assets/images/payment.png') !!}" class="mt-2" alt="scatter_chart" style="width:50%">
                        </center>
                        <h4 class="mt-3 text-center"><a class="text-white" href="#">UK Bank Account Set Up</a></h4>
                     </div>
                     <div class="col-md-4">
                        <center>
                           <img src="{!! asset('assets/images/independent-research.png') !!}" alt="scatter_chart" style="width:50%">
                        </center>
                        <h4 class="mt-3 text-center"><a class="text-white" href="#">Independent Research</a></h4>
                     </div>
                     <div class="col-md-12 mt-5">
                        <center><a href="tel:+442036951739" class="btn btn-outline-light text-white">Need Help ? <br> +44 20 3695 1739</a></center>
                     </div>
                  </div>
               </div>
               <div class="col-md-2"></div>
            </div>
         </div>
      </div>
   </section>

   <section class="">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <h2 style="font-size: 80px;margin-top: 50px" class="text-center mb-5">Service Areas</h2>
            </div>
            <div class="col-md-6">
               <div class="row mb-5">
                  <div class="col-md-4">

                  </div>
                  <div class="col-md-8">
                     <a href="" class="btn btn-primary">Birmingham</a>
                     <a href="" class="btn btn-primary">Manchester</a>
                     <a href="" class="btn btn-primary">Leeds</a>
                  </div>
               </div>
               <div class="row mb-5">
                  <div class="col-md-8">
                     <a href="" class="btn btn-primary">Liverpool</a>
                     <a href="" class="btn btn-primary">Nottingham</a>
                     <a href="" class="btn btn-primary">London</a>
                  </div>
                  <div class="col-md-4"></div>
               </div>
               <div class="row">

                  <div class="col-md-4">

                  </div>
                  <div class="col-md-8">
                     <a href="" class="btn btn-primary mb-2">Nottingham</a>
                     <a href="" class="btn btn-primary">Bracknell</a>
                     <a href="" class="btn btn-primary">Cambridge</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

  <!-- banner section end -->
   <!-- testimonial section start -->
   <section class="bg-light about-people">
      <div class="container">
         <div class="row">
            <div class="col">
               <div class="title-2 mb-5">
                  <h1 class="text-center">Testimonials </h1>
               </div>
               <div class="slick-between">
                  <div class="testimonial-1 dot-gradient">
                     <div>
                        <div class="pepole-comment">
                           <div class="client-msg">
                              <span class="quote"><img src="{!! asset('assets/images/testimonial/quote.png') !!}" alt="quote"></span>
                              <p>I am dealing with Tom Hepworth through Baron & Cabot, dubai office. Tom is prompt, candid and quite helpful in giving right information. My deal is going well so far and am hopeful would finish smoothly. I suggest to deal with them.</p>
                           </div>
                           <div class="media">
                              <div class="media-body">
                                 <h3>Basant Kumar</h3>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div>
                        <div class="pepole-comment">
                           <div class="client-msg">
                              <span class="quote"><img src="{!! asset('assets/images/testimonial/quote.png') !!}" alt="quote"></span>
                              <p>Tom came recommended by my brother, and it was a smooth transaction from the start of the purchase till the documents were exchanged. He is highly recommended by me and i look forward to future transactions with him.</p>
                           </div>
                           <div class="media">
                              <div class="media-body">
                                 <h3>Oladapo Adeyemo</h3>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div>
                        <div class="pepole-comment">
                           <div class="client-msg">
                              <span class="quote"><img src="{!! asset('assets/images/testimonial/quote.png') !!}" alt="quote"></span>
                              <p>I saw a professional approach when I spoke to Mr James Welsh. He was very patient and detailed while explaining to me the packages and offers available. I trust tge company will go far.</p>
                           </div>
                           <div class="media">
                              <div class="media-body">
                                 <h3>Pinnacle Health</h3>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div>
                        <div class="pepole-comment">
                           <div class="client-msg">
                              <span class="quote"><img src="{!! asset('assets/images/testimonial/quote.png') !!}" alt="quote"></span>
                              <p>The service I got was top notch, attention to detail, quick turnaround on issues and just the right amount of follow up. I started off being a skeptic ended up being a believer. Keep up the good work.</p>
                           </div>
                           <div class="media">
                              <div class="media-body">
                                 <h3>Olufemi Adeyemo</h3>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div>
                        <div class="pepole-comment">
                           <div class="client-msg">
                              <span class="quote"><img src="{!! asset('assets/images/testimonial/quote.png') !!}" alt="quote"></span>
                              <p>I had a great experience from start to finish and that was down to Stephen, he made everything so seamless. Could not recommend him enough.</p>
                           </div>
                           <div class="media">
                              <div class="media-body">
                                 <h3>Amanda Jenkins</h3>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div>
                        <div class="pepole-comment">
                           <div class="client-msg">
                              <span class="quote"><img src="{!! asset('assets/images/testimonial/quote.png') !!}" alt="quote"></span>
                              <p>Great working with Stephen extremely helpful, I highly recommend! Amazing company.</p>
                           </div>
                           <div class="media">
                              <div class="media-body">
                                 <h3>Emma Joanne White</h3>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div>
                        <div class="pepole-comment">
                           <div class="client-msg">
                              <span class="quote"><img src="{!! asset('assets/images/testimonial/quote.png') !!}" alt="quote"></span>
                              <p>With help and advice from Stephen I’m very happy with my investment.Thank you for your guidance and knowledgeable advice. Highly recommended.</p>
                           </div>
                           <div class="media">
                              <div class="media-body">
                                 <h3>Annmarie Wilford</h3>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div>
                        <div class="pepole-comment">
                           <div class="client-msg">
                              <span class="quote"><img src="{!! asset('assets/images/testimonial/quote.png') !!}" alt="quote"></span>
                              <p>Great service from start to finish. I dealt with Stephen who was very professional and nothing was too much to ask. I would highly recommend! Thanks again Stephen.</p>
                           </div>
                           <div class="media">
                              <div class="media-body">
                                 <h3>Liam B</h3>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div>
                        <div class="pepole-comment">
                           <div class="client-msg">
                              <span class="quote"><img src="{!! asset('assets/images/testimonial/quote.png') !!}" alt="quote"></span>
                              <p>I dealt with Stephen who was very knowledgeable about UK property. Great advice and the investment is working for itself. Couldn't recommend enough, will be investing in another property soon.</p>
                           </div>
                           <div class="media">
                              <div class="media-body">
                                 <h3>Nikiesha Swan</h3>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div>
                        <div class="pepole-comment">
                           <div class="client-msg">
                              <span class="quote"><img src="{!! asset('assets/images/testimonial/quote.png') !!}" alt="quote"></span>
                              <p>Great service from start to finish, Stephen was very professional would highly recommend! Thanks again!</p>
                           </div>
                           <div class="media">
                              <div class="media-body">
                                 <h3>Aisha Fletcher-Lindsay</h3>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div>
                        <div class="pepole-comment">
                           <div class="client-msg">
                              <span class="quote"><img src="{!! asset('assets/images/testimonial/quote.png') !!}" alt="quote"></span>
                              <p>I am dealing with Tom Hepworth through Baron & Cabot, dubai office. Tom is prompt, candid and quite helpful in giving right information. My deal is going well so far and am hopeful would finish smoothly. I suggest to deal with them.</p>
                           </div>
                           <div class="media">
                              <div class="media-body">
                                 <h3>Basant Kumar</h3>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div>
                        <div class="pepole-comment">
                           <div class="client-msg">
                              <span class="quote"><img src="{!! asset('assets/images/testimonial/quote.png') !!}" alt="quote"></span>
                              <p>Tom came recommended by my brother, and it was a smooth transaction from the start of the purchase till the documents were exchanged. He is highly recommended by me and i look forward to future transactions with him.</p>
                           </div>
                           <div class="media">
                              <div class="media-body">
                                 <h3>Oladapo Adeyemo</h3>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div>
                        <div class="pepole-comment">
                           <div class="client-msg">
                              <span class="quote"><img src="{!! asset('assets/images/testimonial/quote.png') !!}" alt="quote"></span>
                              <p>Tom came recommended by my brother, and it was a smooth transaction from the start of the purchase till the documents were exchanged. He is highly recommended by me and i look forward to future transactions with him.</p>
                           </div>
                           <div class="media">
                              <div class="media-body">
                                 <h3>Oladapo Adeyemo</h3>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- testimonial section end -->


   <!-- section end -->
   <section class="">
      <div class="container">
         <div class="row">
            <div class="col-md-12 mb-5">
               <h1 class="text-center">READY TO GET STARTED ?</h1>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-6">
               <div class="row">
                  <div class="col-md-6 mb-3">
                     <a href="#" data-bs-toggle="modal" data-bs-target="#getMoreInfo" class="btn btn-lg btn-warning btn-block"><i class="fal fa-calendar-star"></i> Schedule a Meeting </a>
                  </div>
                  <div class="col-md-6">
                     <a href="tel:+442036951739" class="btn btn-lg btn-success btn-block"><i class="fal fa-phone-alt"></i> Call us</a>
                  </div>
               </div>
            </div>
            <div class="col-md-3"></div>
         </div>
      </div>
   </section>

   <section class="property-section">
      <!-- TrustBox widget - Starter -->
      <div class="trustpilot-widget" data-locale="en-GB" data-template-id="5613c9cde69ddc09340c6beb" data-businessunit-id="5f746adaaccd9d0001fcbe15" data-style-height="100%" data-style-width="100%" data-theme="light">
         <a href="https://uk.trustpilot.com/review/baroncabot.com" target="_blank" rel="noopener">Trustpilot</a>
      </div>
      <!-- End TrustBox widget -->
   </section>
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
