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
@section('stylesheets')
   <style>
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
   <section class="breadcrumb-section p-0">
      <img src="{!! asset('assets/images/Event1.jpg') !!}" class="bg-img img-fluid" alt="">
      <div class="container">
         <div class="row">
            <div class="col-lg-7">
               <div class="@if($agent->isMobile()) top-section-mobile @else top-section @endif">
                  <h1 class="text-white">Africans Investing In England</h1>
                  <ul>
                     <li><i class="fas fa-circle"></i> Are you eligible for a UK mortgage?</li>
                     <li><i class="fas fa-circle"></i> Can you get 100% of your invested money protected?</li>
                     <li><i class="fas fa-circle"></i> Understand how Africans are investing in UK property each month</li>
                  </ul>
                  <p>We will get you a mortgage, with all property deeds in your name, tenant the property for you, and protect you with regulations</p>
                  <a href="#" class="btn btn-lg btn-outline-white btn-radius-24 mt-5" data-bs-toggle="modal" data-bs-target="#getMoreInfo"><i class="fal fa-info-circle"></i> Request Information</a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- breadcrumb end -->
   <section class="service-section service-2">
      <div class="container">
         <div class="row">
            <div class="col">
               <div class="title-3">
                  <i class="fas fa-info-circle fa-2x"></i><br>
                  <small>About us</small>
                  <h2 class="mt-5 text-dark">Why Baron & Cabot?</h2>
                  <p class="mt-5">We are specialists for Africans investing in Uk properties. Find out how we can protect you and your future,<br>
                     get you a mortgage on rates as low as 4.5% regardless of which country in Africa you are in.</p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- brand section start -->
   <section class="small-section bg-light-blue arrow-gradient">
      <div class="container">
         <div class="row">
            <div class="col">
               <div class="title-1">
                  <h2>Featured In</h2>
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
                        <img src="{!! asset('assets/images/200px-CNBC_logo.svg.png') !!}" alt="" class="img-fluid" style="width:50%;">
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
   <!-- brand section end -->
   <section class="property-section">
      <!-- TrustBox widget - Starter -->
      <div class="trustpilot-widget" data-locale="en-GB" data-template-id="5613c9cde69ddc09340c6beb" data-businessunit-id="5f746adaaccd9d0001fcbe15" data-style-height="100%" data-style-width="100%" data-theme="light">
         <a href="https://uk.trustpilot.com/review/baroncabot.com" target="_blank" rel="noopener">Trustpilot</a>
      </div>
      <!-- End TrustBox widget -->
   </section>
   <!-- brand section end -->
   <section class="bg-light">
      <div class="container">
         <div class="row">
            <div class="col-lg-6">
               <div class="mt-3">
                  <small>FIND YOUR INVESTMENT​</small>
                  <h1>Our Managing Director on KTN News - Kenya</h1>
                  <p>Learn more about investing in UK Property and how you are protected with your investments. </p>
                  <p>Here our Managing Director discusses how people buy a UK Property, how you protect Yourself, and how the UK property investment market is performing.</p>
               </div>
            </div>
            <div class="col-lg-6">
               <img src="{!! asset('assets/images/1231221ot_19-compressed.jpg') !!}" class="img-fluid" alt="FInd your investment">
            </div>
         </div>
      </div>
   </section>
   <!-- banner section start -->
   <section class="banner-section layout3-bg parallax-image" style="background-image: url({{asset('assets/images/bg1.jpg')}});">
      <div class="container">
         <div class="row g-5">
            @if($agent->isMobile())
               <div class="banner-33-mobile">
            @else
               <div class="banner-33">
            @endif
               <h1>Find out how to get the biggest discounts on UK investments in</h1>
               <ul>
                  <li>Manchester</li>
                  <li>Birmingham</li>
                  <li>Leeds</li>
                  <li>Liverpool</li>
                  <li>Newcastle</li>
               </ul>
               <center>
                  <a href="{!! route('page','projects') !!}?utm_source=africa&utm_medium=cpc&utm_campaign=africa" class="btn btn-lg btn-outline-white btn-radius-24 mt-5"><i class="fal fa-info-circle"></i> View Portfolio</a>
               </center>
            </div>
         </div>
      </div>
   </section>
   <section class="bg-light">
      <div class="container">
         <div class="row">
            <div class="col-lg-6">
               <img src="{!! asset('assets/images/Screenshot_19-1-compressed.jpg') !!}" class="img-fluid" alt="FInd your investment">
            </div>
            <div class="col-lg-6">
               <div class="tax">
                  <h1>You May Not Need To Pay tax?!</h1>
                  <p>Over very little, if any! Why? Because many African countries are given tax breaks by the UK government.</p>
                  <p>In most cases, this means you can earn up to £12,500 rent (after costs) before you would need to pay any tax.</p>
                  <p>Buying UK property sounds like a great deal, doesn’t it?!</p>
                  <center>
                     <a href="#" class="btn btn-lg btn-outline-dark btn-radius-24 mt-2" data-bs-toggle="modal" data-bs-target="#getMoreInfo"><i class="fal fa-info-circle"></i> Get Brochure</a>
                  </center>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="">
      <div class="container">
         <div class="row">
            <div class="col-lg-6">
               <div class="mt-5">
                  <h1>UK Mortgages Are Different</h1>
                  <p>Rates below 6%, normally between 3.5% and 5.5%.</p>
                  <p>All Deeds are in your name, not the bank’s.</p>
                  <p>Terms up to 20 years.</p>
                  <p>You can sell a property with a mortgage on it. No need to clear the debt to sell.</p>
                  <center>
                     <a href="#" class="btn btn-lg btn-outline-dark btn-radius-24 mt-2" data-bs-toggle="modal" data-bs-target="#getMoreInfo"><i class="fal fa-info-circle"></i> Get Brochure</a>
                  </center>
               </div>
            </div>
            <div class="col-lg-6">
               <img src="{!! asset('assets/images/dsfgbfhdghnjg.jpg') !!}" class="img-fluid" alt="FInd your investment">
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
               <div class="title-2">
                  <h2>Testimonials </h2>
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
   <!-- banner section start -->
   <section class="banner-section layout3-bg parallax-image" style="background-image: url({{asset('assets/images/bg1.jpg')}});">
      <div class="container">
         <div class="row">
            <div class="col-lg-6">
               <h2 class="text-white mt-5">Trust and Transparency</h2>
               <p class="text-white">Did you know that England is constantly voted as the Number 1 most transparent place to buy real estate?</p>
               <h2 class="text-white">Why?</h2>
               <p class="text-white">Because every single buyer goes through solicitors who are regulated to protect you.</p>
               <p class="text-white">Add to that our own due diligence procedures and insurance on your invested capital during the build process and you have a level of protection on your investment unheard of globally.</p>
               <h4 class="text-white"><a href="">Global Real Estate Transparency Index, 2022</a></h4>
            </div>
            <div class="col-lg-6">
               <img src="{!! asset('assets/images/Screenshot_21-compressed.jpg') !!}" alt="trust" class="img-fluid">
            </div>
         </div>
      </div>
   </section>

   <!-- section start -->
   <section class="faq-section log-in bg-light">
      <div class="container">
         <div class="row">
            <div class="col-lg-6">
               <div class="faq-questions">
                  <div class="title-3 text-start">
                     <h2>Frequently ask question</h2>
                  </div>
                  <div id="accordion" class="accordion">
                     <div class="card">
                        <div class="card-header">
                           <a class="collapsed card-link" data-bs-toggle="collapse" href="#collapseFive">How much should I expect to put down on a BTL mortgage?</a>
                        </div>
                        <div id="collapseFive" class="collapse" data-bs-parent="#accordion">
                           <div class="card-body">
                              <p>Please request advice on the loan to value on a buy to let mortgage. While most would say 25% or 30% total deposit for a mortgage each situation can be unique.</p>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header">
                           <a class="collapsed card-link" data-bs-toggle="collapse" href="#collapseSix">
                              Do you help rent the property?
                           </a>
                        </div>
                        <div id="collapseSix" class="collapse" data-bs-parent="#accordion">
                           <div class="card-body">
                              <p>At Baron & Cabot we pride ourselves in a full service for investors. As many of our investors are not UK based, and most of the remainder do not want to be hands on with the investment we offer a 360 process from sourcing, mortgage, currency exchange, legal support and managemnt of the property.</p>
                              <p>Often we will use 3rd party support to ensure the best possible price for our investors.</p>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header">
                           <a class="collapsed card-link" data-bs-toggle="collapse" href="#collapseSix">
                              Why are Baron & Cabot different to other brokers?
                           </a>
                        </div>
                        <div id="collapseSix" class="collapse" data-bs-parent="#accordion">
                           <div class="card-body">
                              <p>In our opinion we care more, we really focus on ‘confidence through clarity’.</p>
                              <p>We do the due diligence on developments which we will share with you. We will never carry a development which does not pass this criteria.</p>
                              <p>While there are some briliant companies in our market there are also some very lazy ones. If you have seen a development you like which we have not discussed with you, let us know, it may have failed our due diligence.</p>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header">
                           <a class="collapsed card-link" data-bs-toggle="collapse" href="#collapseSix">
                              How can I check that you are safe to invest with?
                           </a>
                        </div>
                        <div id="collapseSix" class="collapse" data-bs-parent="#accordion">
                           <div class="card-body">
                              <p>If you have any doubt’s what so ever speak to one of our staff. This is a normal concern and one we have a lot of resources for.</p>
                              <p>If you are an international client we will often work with a local bank of yours who you can speak to and ask about how many mortgages we have done together.</p>
                              <p>Alternatively, we have independent solicitors who can help, or even solicitors in your own country who can work with us to supply due diligence.</p>
                              <p>Finally, we have almost certainly worked with people in your city who we can also arrange a call with.  </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="faq-questions">

                  <div id="accordion" class="accordion">
                     <div class="card mt-5">
                        <div class="card-header">
                        <a class="card-link" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true">
                           Why should I use a company like you and not direct to developer?
                        </a>
                        </div>
                        <div id="collapseOne" class="collapse" data-bs-parent="#accordion">
                           <div class="card-body">
                              <p>Baron & Cabot have the benefit of being able to offer full market coverage to advise to our clients the best development for you without being restricted to particular developers.</p>
                              <p>In addition to full market cover as we tend to purchase large volumes in each development we are able to negotiate for you using the volume of the company (as an when this is possible).</p>
                              <p>Finally, developers are generally not client focussing and require companies like us to go to the market. As such most developers will be unable to offer discounts which we can negotiate, this is because they cannot be seen to be undercutting the market.</p>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header">
                        <a class="collapsed card-link" data-bs-toggle="collapse" href="#collapseTwo"> How do I know my money is protected?</a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                        <div class="card-body">
                           <p>One of the great questions is protection on your investment. While no investment (in anything) is completely without risk, there are many ways we help protect you.</p>
                           <p>Speak to our staff about the due diligence conducted on each development and developer, all is available for you when needed.</p>
                           <p>In addition it’s likely that part or all of your money is protected with insurnace and other additional protection.</p>
                           <p>Each project is different so please feel free to request this information.</p>
                        </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header">
                        <a class="collapsed card-link" data-bs-toggle="collapse" href="#collapseThree">
                           Why do you advise speaking to me before sharing projects?
                        </a>
                        </div>
                        <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                           <div class="card-body">
                              <p>At Baron & Cabot we have in excess of 11,000 investment properties we have access to. We also have many projects which cannot be advertised due to being owned by our clients who are not actively selling but would be open to offers, or it may be properties we are due to release soon or may even be small developements we will sell to existing clients as there is no need to do a lot of marketing (as they will sell immidiately).</p>
                              <p>By speaking to you our staff are trained in delivering not just the most suitable or best development, but also the most suitable unit in the development for you to consider.</p>
                              <p>Understanding your needs, price points and other factors significantly improves productivity for you our new client, and our staff, remove any calls or emails about properties which would not suit and make you more likely to find the ideal investment and buy through us which works for us both.</p>
                              <p>We are here to work with you as a busienss partner and ideally this starts with getting some understanding of your needs.</p>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header">
                           <a class="card-link" data-bs-toggle="collapse" href="#collapseFour"> Do you help me find a mortgage? </a>
                        </div>
                        <div id="collapseFour" class="collapse" data-bs-parent="#accordion">
                           <div class="card-body">
                              <p>Yes we do!</p>
                              <p>No matter where you live in the world, no matter what currency you earn in, and even if you are retired we can help you!</p>
                              <p>Speak to our specialists who will get you an actual rate and get you in contact with the lender.</p>
                              <p>Rates are between 1.5% and 6% with up to 30 year terms. Rates depend on the country you live in, and your own financial circumstances.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </section>

   <!-- section end -->
   <section class="">
      <div class="container">
         <div class="row">
            <div class="col-md-6 mb-3">
               <div class="mt-3">
                  <h1 class="text-center">Did You Know?</h1>
                  <div class="know">
                     <p>We have over 4,000 UK property Investments.</p>
                     <div class="border"></div>
                  </div>
                  <div class="know">
                     <p>We get you mortgage with your local bank or UK one regardless of the country you live in.</p>
                     <div class="border"></div>
                  </div>
                  <div class="know">
                     <p>We get you a mortgage with your local bank or UK one regardless of the country you live in. </p>
                     <div class="border"></div>
                  </div>
                  <div class="know">
                     <p>We get you the same discounts in Africa as an investor in England.</p>
                     <div class="border"></div>
                  </div>
                  <center>
                     <a href="#" class="btn btn-lg btn-outline-dark btn-radius-24 mt-5" data-bs-toggle="modal" data-bs-target="#getMoreInfo"><i class="fal fa-info-circle"></i> Request Information</a>
                  </center>
               </div>
            </div>
            <div class="col-md-6 bg-grey">
               <h1 class="text-center">Find Out More!</h1>
               <p class="text-center mb-4">Fill in your information below to find out how to get a mortgage on discounted UK property today!</p>
               <div class="row">
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
                        <div class="col-md-6 col">
                           <div class="form-group">
                              <input type="email" name="email" placeholder="Email" class="form-control" required>
                              <input type="hidden" name="page" value="Africa" class="form-control" required>
                           </div>
                        </div>
                        <div class="col-md-6 col">
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
                        <center><button type="submit" class="btn btn-warning hide" id="submitForm2">Submit Information</button></center>
                        <center><small class="text-danger hide" id="phone_valid2">Your Phone Number is invalid</small></center>
                     </div>
                  </form>
               </div>
            </div>
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
