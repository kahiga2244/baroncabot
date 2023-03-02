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
               <h1 class="text-white">Due Diligence</h1>
               <nav aria-label="breadcrumb" class="theme-breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="{!! url('/') !!}">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Due Diligence</li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>
   </section>
   <section class="service-section service-2">
      <div class="container">
         <div class="row">
            <div class="col">
               <div class="title-3">

                  <h1>Our Safety Process</h1>

               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- service 2 start -->
   <section class="service-section service-2 background_blue">
      <div class="container">
         <div class="row">
            <div class="col-md-12 due-section">
               <h2 class="text-center">Understand exactly where to invest</h2>
               <div class="row">
                  <div class="col-md-1">
                     <h1 class="due_number">1</h1>
                  </div>
                  <div class="col-md-4">
                     <img src="{!! asset('assets/images/due1.png') !!}" alt="">
                  </div>
                  <div class="col-md-1">
                     <span class="dot"></span>
                  </div>
                  <div class="col-md-5">
                     <p class="due_content">The process always starts with using advanced data analytics to pick the best locations. Based on prices, growth, affordability, occupancy rates, crime and overall ROI.</p>
                  </div>
               </div>
            </div>
            <div class="col-md-12 due_arrow">
               <div class="row">
                  <div class="col-md-8">

                  </div>
                  <div class="col-md-4">
                     <img src="{!! asset('assets/images/Vector1.png') !!}" alt="">
                  </div>
               </div>
            </div>
            <div class="col-md-12 due-section">
               <h2 class="text-center">Source the best developments</h2>
               <div class="row">
                  <div class="col-md-1">
                     <span class="dot"></span>
                  </div>
                  <div class="col-md-5">
                     <p class="due_content">Not just a city, but a specific area of a city. Make sure the development is run by an experienced developer who has a long track  record (ideally over 10 years) and have a strong financial structure.</p>
                  </div>
                  <div class="col-md-1">
                     <h1 class="due_number">2</h1>
                  </div>
                  <div class="col-md-4">
                    <center><img src="{!! asset('assets/images/due2.png') !!}" alt=""></center>
                  </div>
               </div>
            </div>
            <div class="col-md-12 due_arrow">
               <div class="row">
                  <div class="col-md-4">
                     <center><img src="{!! asset('assets/images/Vector1.png') !!}" alt=""></center>
                  </div>
                  <div class="col-md-8">

                  </div>
               </div>
            </div>
            <div class="col-md-12 due-section">
               <h2 class="text-center">112 Point Due Diligence Check</h2>
               <div class="row">
                  <div class="col-md-1">
                     <h1 class="due_number">3</h1>
                  </div>
                  <div class="col-md-4">
                     <img src="{!! asset('assets/images/due3.png') !!}" alt="">
                  </div>
                  <div class="col-md-1">
                     <span class="dot"></span>
                  </div>
                  <div class="col-md-5">
                     <p class="due_content">We check and get reports on over 112 check points for every property. In addition the property is shared with UK regulated lawyers to cross check again.</p>
                  </div>
               </div>
            </div>
            <div class="col-md-12 due_arrow">
               <div class="row">
                  <div class="col-md-8">

                  </div>
                  <div class="col-md-4">
                     <img src="{!! asset('assets/images/Vector1.png') !!}" alt="">
                  </div>
               </div>
            </div>

            <div class="col-md-12 due-section">
               <h2 class="text-center">Fully funded means lower risk</h2>
               <div class="row">
                  <div class="col-md-1">
                     <span class="dot"></span>
                  </div>
                  <div class="col-md-5">
                     <p class="due_content">We work with developments which are funded privately and don't need your money. WHY? Because if its off-plan this reduces/ stops any delays (no need to sell to be able to build).</p>
                  </div>
                  <div class="col-md-1">
                     <h1 class="due_number">4</h1>
                  </div>
                  <div class="col-md-4">
                     <img src="{!! asset('assets/images/due4.png') !!}" alt="">
                  </div>
               </div>
            </div>
            <div class="col-md-12 due_arrow">
               <div class="row">
                  <div class="col-md-4">
                     <center><img src="{!! asset('assets/images/Vector1.png') !!}" alt=""></center>
                  </div>
                  <div class="col-md-8">

                  </div>
               </div>
            </div>
            <div class="col-md-12 due-section">
               <h2 class="text-center">Ensure mortgages for YOU</h2>
               <div class="row">
                  <div class="col-md-1">
                     <h1 class="due_number">5</h1>
                  </div>
                  <div class="col-md-4">
                     <img src="{!! asset('assets/images/due5.png') !!}" alt="">
                  </div>
                  <div class="col-md-1">
                     <span class="dot"></span>
                  </div>
                  <div class="col-md-5">
                     <p class="due_content">We check every development against mortgages for clients in Europe, Africa, Asia and the US. Before we start we check that you will get lending on the property.</p>
                  </div>
               </div>
            </div>
            <div class="col-md-12 due_arrow">
               <div class="row">
                  <div class="col-md-8"></div>
                  <div class="col-md-4">
                     <img src="{!! asset('assets/images/Vector1.png') !!}" alt="">
                  </div>
               </div>
            </div>
            <div class="col-md-12 due-section">
               <h2 class="text-center">Protections for your investment</h2>
               <div class="row">
                  <div class="col-md-1">
                     <span class="dot"></span>
                  </div>
                  <div class="col-md-5">
                     <p class="due_content">All our properties have a 'long stop date' meaning if highly delayed you get all your money back. All payments are sent via a lawyer who's insurance add's another layer of protection.</p>
                  </div>
                  <div class="col-md-1">
                     <h1 class="due_number">6</h1>
                  </div>
                  <div class="col-md-4">
                     <img src="{!! asset('assets/images/due6.png') !!}" alt="">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- service 2 end -->
@endsection
