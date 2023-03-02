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
      <img src="{!! asset('assets/images/whoweare.jpg') !!}" class="bg-img img-fluid" alt="">
      <div class="container">
         <div class="breadcrumb-content">
            <div>
               <h1 class="text-white">About Us</h1>
               <nav aria-label="breadcrumb" class="theme-breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="{!! url('/') !!}">Home</a></li>
                     <li class="breadcrumb-item">About Us</li>
                     <li class="breadcrumb-item active" aria-current="page">Who we are</li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>
   </section>
   <!-- breadcrumb end -->

   <!-- About us section start -->
   <section class="about-main">
      <div class="container">
         <div class="row">
            <div class="col">
               <div class="title-1 color-6">
                  <h2>Our Mission</h2>
                  <hr>
               </div>
               <div class="user-about">
                  <div class="row">
                     <div class="col-xl-6 col-lg-6">
                        <center>
                           <img src="{!! asset('assets/images/Ourmission.png') !!}" class="img-fluid" alt="">
                        </center>
                     </div>
                     <div class="col-xl-6 col-lg-6">
                        <div class="about-content">
                           <p>Provide the best fully researched property investments</p>
                           <p><b>At Baron & Cabot we come in every day because we want to simplify the investment process for investors.</b></p>
                           <p>With a team who have worked with property investments for years, we, like you, were frustrated by the lack of clear information available for property investors.</p>
                           <p>Now we have, and continue to build market leading research so that you can simply choose (with our help) the most suitable investment for you, safe in the knowledge that all our properties have gone through one if the most robust due diligence process’s in the industry.
                           </p>
                           <p>We are committed to delivering this to our clients, friends, family and associates on a daily basis. And has been the reason behind why our company has grown so quickly.
                           </p>
                           <p>Property investment is simple when we have all the tools to hand. We call this; Confidence through clarity

                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="service-section service-2 bg-light">
      <div class="container">
         <div class="row">
            <div class="col">
               <div class="title-1 color-6">
                  <h2>Most Advanced Data analytics</h2>
                  <hr>
               </div>
               <div class="user-about">
                  <div class="row">
                     <div class="col-xl-6 col-lg-6">
                        <div class="about-content">
                           <p>One of the key reasons Baron & Cabot are able to invest so well, is having some of the most advanced data analytics in the world.</p>
                           <p>We break down the whole of England into 1-2 square kilometre squares and look at all of the economic and environmental factors which change the property value and rental value.</p>
                           <p>These factors include historical data of price, price per square foot, average salary, inflation, supply & demand, and lending rates all the way back to 1990’s.</p>
                           <p>This means that not only are we miles ahead of the game in terms of picking the right property, we can also produce some of the most accurate cash flow estimates in the world.</p>
                           <p>As an investor this will give you full confidence in buying the best and knowing what your future assets will be worth. </p>
                        </div>
                     </div>
                     <div class="col-xl-6 col-lg-6">
                        <center>
                           <img src="{!! asset('assets/images/DataAnalytics.png') !!}" class="img-fluid" alt="" style="width:60%">
                        </center>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="about-main">
      <div class="container">
         <div class="row">
            <div class="col">
               <div class="title-1 color-6">
                  <h2>Due diligence check list</h2>
                  <hr>
               </div>
               <div class="user-about">
                  <div class="row">
                     <div class="col-xl-6 col-lg-6">
                        <center>
                           <img src="{!! asset('assets/images/Checklist.png') !!}" class="img-fluid" alt="">
                        </center>
                     </div>
                     <div class="col-xl-6 col-lg-6">
                        <div class="about-content">
                           <p>Our 122-point due diligence checklist is a leader in the market and is expected to be the industry standard in the coming years. And for good reason.</p>
                           <p>The report is critical before any property purchase, breaking down every detail of a developer, development, investment area and financials with a simple star scoring system.</p>
                           <p>We understand the developers financial situation, track record, and ensure every document from planning applications, highways acts, title deeds, lease details are all in place so you don’t have to.</p>
                           <p>This means that every investment you look at with a Baron & Cabot 122-point report in place will have been fully independently researched.</p>
                           <p>With our 122-point report, you can focus on the best investment for you, knowing the research has already been done.</p>
                           <p>Don’t buy any UK property until you have seen the Baron & Cabot 122-point report on it.

                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- About us section end -->
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
