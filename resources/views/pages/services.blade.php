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
      .service-box{
         min-height: 436px;
      }
   </style>
@endsection
@section('content')

   <!-- breadcrumb start -->
   <section class="breadcrumb-section p-0">
      <img src="{!! asset('assets/images/inner-background.jpg') !!}" class="bg-img img-fluid" alt="">
      <div class="container">
         <div class="breadcrumb-content">
            <div>
               <h1 class="text-white">Our Services.</h1>
               <nav aria-label="breadcrumb" class="theme-breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="{!! url('/') !!}">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">service</li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>
   </section>
   <!-- breadcrumb end -->
   <!-- our service section start -->
   <section class="provide-service bg-light">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 order-lg-1">
               <div class="service-img">
                  <img src="{!! asset('assets/images/ServicesIntrosection.png') !!}" class="img-fluid" alt="">
               </div>
            </div>
            <div class="col-lg-5">
               <div class="provide-details">
                  <h2>Find out what makes us different.</h2>
                  <p>We understand the developers’ financial situation, track record and ensure every document from planning applications, highways acts, title deeds, lease details are all in place, so you don’t have to.</p>
                  <p>Our global team of experts will guide you through every step of your investment, from initial purchase and property management to exit and beyond.</p>
                  <p>This means that for every investment you look at with Baron & Cabot, a report in place will have been fully independently researched.</p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- our service section end -->
   <!-- service 3 start -->
   <section class="service-section">
      <div class="container-fluid">
         <div class="row">
            <div class="col">
               <div class="container">
                  <div class="row">
                     <div class="col">
                        <div class="title-1 color-6">
                           <h2>What we can do for you</h2>
                           <hr>
                        </div>
                        <div class="row property-service column-space">
                           <div class="col-xl-4 col-md-6 wow fadeInUp">
                              <div class="service-box text-center" >
                                 <center>
                                    <img src="{!! asset('assets/images/scatter_chart.png') !!}" alt="scatter_chart" style="width:50%">
                                 </center>
                                 <h3 class="mt-3"><a href="#">Property Sourcing</a></h3>
                                 <p>Largest volume of UK investment properties. As we are fully independent we are able to provide you with over 4,000 property investments.</p>
                              </div>
                           </div>
                           <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                              <div class="service-box text-center">
                                 <center>
                                    <img src="{!! asset('assets/images/mobile2.png') !!}" alt="mobile2" style="width:50%">
                                 </center>
                                 <h3 class="mt-3"><a href="#">Research Developments</a></h3>
                                 <p>Baron & Cabot only company with trained UK surveyors and data analysts, meaning you get the highest returns.</p>
                              </div>
                           </div>
                           <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                              <div class="service-box text-center">
                                 <center>
                                    <img src="{!! asset('assets/images/Asset2.svg') !!}" alt="mobile2" style="width:50%">
                                 </center>
                                 <h3 class="mt-3"><a href="#">UK Bank Account Set Up</a></h3>
                                 <p>For our international clients we will support in your bank account set up. That can be a bank from your country with a presence in UK, a UK bank or an online UK account.</p>
                              </div>
                           </div>
                           <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                              <div class="service-box text-center">
                                 <center>
                                    <img src="{!! asset('assets/images/independent-research.png') !!}" alt="mobile2" style="width:50%">
                                 </center>
                                 <h3 class="mt-3"><a href="#">Independent Research</a></h3>
                                 <p>We back up our specialists work with additional independent external research companies. This gives you the edge and best possible profits.</p>
                              </div>
                           </div>
                           <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                              <div class="service-box text-center">
                                 <center>
                                    <img src="{!! asset('assets/images/candlestick_angle.png') !!}" alt="mobile2" style="width:50%">
                                 </center>
                                 <h3 class="mt-3"><a href="#">Currency Exchange</a></h3>
                                 <p>We are able to offer favorable exchange rates to get the best possible return for your investments.</p>
                              </div>
                           </div>
                           <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                              <div class="service-box text-center">
                                 <center>
                                    <img src="{!! asset('assets/images/arrow_up_wtih_chart.png') !!}" alt="mobile2" style="width:50%">
                                 </center>
                                 <h3 class="mt-3"><a href="#">Mortgage Supply</a></h3>
                                 <p>Use our world-class international mortgage service. Whether you are UK citizen or international, we will always find a way. </p>
                              </div>
                           </div>
                           <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                              <div class="service-box text-center">
                                 <center>
                                    <img src="{!! asset('assets/images/payment_with_check.png') !!}" alt="mobile2" style="width:50%">
                                 </center>
                                 <h3 class="mt-3"><a href="#">International Tax</a></h3>
                                 <p>Make investing in the UK clear and simple, with the option to use the accountants for the lifetime of your investment.</p>
                              </div>
                           </div>
                           <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                              <div class="service-box text-center">
                                 <center>
                                    <img src="{!! asset('assets/images/legal_processing.png') !!}" alt="mobile2" style="width:50%">
                                 </center>
                                 <h3 class="mt-3"><a href="#">Legal Processing</a></h3>
                                 <p>We take you through the process with a professional legal panel, trusted by the developers and us for an easy and simple purchase.</p>
                              </div>
                           </div>
                           <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                              <div class="service-box text-center">
                                 <center>
                                    <img src="{!! asset('assets/images/property_management.png') !!}" alt="mobile2" style="width:50%">
                                 </center>
                                 <h3 class="mt-3"><a href="#">Property Management</a></h3>
                                 <p>Our nationwide management network allows full management of your property.</p>
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

   <!-- banner section start -->
   <section class="banner-section banner-4 parallax-image">
      <div class="container">
         <div class="row">
            <div class="col">
               <div class="light-bg banner-1">
                  <span class="big-gradient">*</span>
                  <span class="small-white">*</span>
                  <h6>WANT TO KNOW MORE?</h6>
                  <h2>Get in touch with our property experts today
                  </h2>
                  <div class="button-banner">
                     <a href="#" class="btn btn-lg btn-outline-white" data-bs-toggle="modal" data-bs-target="#getMoreInfo">Get in touch</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- banner section end -->
   <section class="property-section">
      <!-- TrustBox widget - Starter -->
      <div class="trustpilot-widget" data-locale="en-GB" data-template-id="5613c9cde69ddc09340c6beb" data-businessunit-id="5f746adaaccd9d0001fcbe15" data-style-height="100%" data-style-width="100%" data-theme="light">
         <a href="https://uk.trustpilot.com/review/baroncabot.com" target="_blank" rel="noopener">Trustpilot</a>
      </div>
      <!-- End TrustBox widget -->
   </section>
@endsection
