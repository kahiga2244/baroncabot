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
      <img src="{!! asset('assets/images/5.jpg') !!}" class="bg-img img-fluid" alt="">
      <div class="container">
         <div class="breadcrumb-content">
            <div>
               <h1 class="text-white">Franchise Opportunities</h1>
               <nav aria-label="breadcrumb" class="theme-breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="{!! url('/') !!}">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Franchise</li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>
   </section>
   <!-- breadcrumb end -->
<!----------------intro------------>
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
                <!-- <h1>Opportunities</h1> -->
                    <h3>The benefits of being one of the first franchisee's in such a
                        rapid growing company are huge. Be the first in your country
                        and reap the rewards of a turn key GBP earning solution.</3>
               </div>
            </div>
         </div>
         <center><a href="#" data-bs-toggle="modal" data-bs-target="#getMoreInfo" class="btn btn-solid color-3 btn-flat mt-5 btn-lg"><i class="fa fa-question-circle"></i>&nbsp; Inquire</a></center>
      </div>
   </section>
   <!-- our service section end -->
    <!-- banner section end -->
    <section class="property-section">
      <!-- TrustBox widget - Starter -->
      <div class="trustpilot-widget" data-locale="en-GB" data-template-id="5613c9cde69ddc09340c6beb" data-businessunit-id="5f746adaaccd9d0001fcbe15" data-style-height="100%" data-style-width="100%" data-theme="light">
         <a href="https://uk.trustpilot.com/review/baroncabot.com" target="_blank" rel="noopener">Trustpilot</a>
      </div>
      <!-- End TrustBox widget -->
   </section>
   <!----------end banner section------>
   <!---------carousel section------------>
   <section class="small-section bg-light-blue arrow-gradient">
      <div class="container">
         <div class="row">
            <div class="col">
               <!-- <div class="title-2 text-white mb-5">
                  <h2 class="text-dark">As seen on</h2>
               </div> -->
               <div class="slide-3 brand-slider">
                  {{-- <div>
                     <a href="javascript:void(0)" class="logo-box">
                        <img src="{!! asset('assets/images/bbc.png') !!}" alt="" class="img-fluid">
                     </a>
                  </div> --}}
                  <div>
                     <a href="https://baroncabot.com/blog/baron-cabot-in-bbc/details" target="_blank" class="logo-box">
                        <img src="{!! asset('assets/images/BBC_News.svg.svg') !!}" alt="" class="img-fluid" style="width:40%;">
                     </a>
                  </div>
                  <div>
                     <a href="https://venturesafrica.com/apostories/baron-cabot-expands-investment-opportunities-in-africa/" target="_blank" class="logo-box">
                        <img src="{!! asset('assets/images/Screenshot_13.png') !!}" alt="" class="img-fluid">
                     </a>
                  </div>
                  <div>
                     <a href="https://baroncabot.com/blog/baron-cabot-expands-investment-opportunities-in-africa/details" target="_blank" class="logo-box">
                        <img src="{!! asset('assets/images/200px-CNBC_logo.svg.png') !!}" alt="" class="img-fluid" style="width:50%;">
                     </a>
                  </div>
                  <div>
                     <a href="https://www.forbesafrica.com/brand-voice/2022/04/08/more-opportunities-for-africans-to-invest-in-property-in-the-uk/" target="_blank" class="logo-box">
                        <img src="{!! asset('assets/images/Forbes_logo.png') !!}" alt="" class="img-fluid">
                     </a>
                  </div>
                  <div>
                     <a href="" class="logo-box" target="_blank">
                        {{-- <img src="{!! asset('assets/images/Screenshot_16.png') !!}" alt="" class="img-fluid"> --}}
                        <svg class="cnn-badge-icon" style="outline:0;width:40%" viewBox="0 0 240 240" fill="#CC0000" xmlns="https://www.w3.org/2000/svg" aria-hidden="true"><rect x="0" y="0" width="100%" height="100%" fill="#fff"></rect><path d="M.31-.07v240h240V-.07ZM86.54,135.29V92.51c0-16.1,20.81-23.83,31.82-5.12.8,1.35,18.14,31.22,18.14,31.22V92.51c0-16.1,20.8-23.83,31.81-5.12.8,1.35,18.14,31.22,18.14,31.22V76.79h10.38V147a2.11,2.11,0,0,1-1.51,2.14c-1.1.3-2.26-.38-3.11-1.82-.17-.28-9-15.46-17.48-30.13L159.17,90.4c-2.18-3.7-5.43-4.35-7.74-3.72a6.23,6.23,0,0,0-4.55,6.13V147a2.12,2.12,0,0,1-1.51,2.14c-1.11.3-2.27-.38-3.11-1.82-.15-.25-8.34-14.36-16.25-28-10.08-17.38-16.7-28.78-16.8-28.95-2.18-3.71-5.44-4.35-7.77-3.72a6.24,6.24,0,0,0-4.56,6.13v53.05a2.9,2.9,0,0,1-2.72,2.71H67.23a28.64,28.64,0,0,1,0-57.28h14v10.36H67.35a18.28,18.28,0,1,0,0,36.56H83.68A2.84,2.84,0,0,0,86.54,135.29Zm124.77,12.05c0,16.1-20.81,23.83-31.82,5.13-.79-1.35-18.14-31.23-18.14-31.23v26.1c0,16.1-20.8,23.83-31.81,5.13-.8-1.35-18.14-31.23-18.14-31.23v24.61c0,11.17-6.63,17.22-17,17.22H67.25a43.14,43.14,0,0,1,0-86.28h14V87.15h-14a32.78,32.78,0,1,0,0,65.56H94.16a7,7,0,0,0,6.86-6.85V92.81a2.1,2.1,0,0,1,1.51-2.13c1.1-.3,2.26.38,3.11,1.82l16.79,28.93c9.76,16.83,16.17,27.88,16.25,28,2.19,3.7,5.45,4.35,7.78,3.71A6.22,6.22,0,0,0,151,147V92.82a2.11,2.11,0,0,1,1.49-2.14c1.09-.3,2.24.38,3.08,1.82l15.56,26.81,17.49,30.15c1.71,2.9,4.09,3.93,6.16,3.93a6,6,0,0,0,1.61-.22A6.23,6.23,0,0,0,201,147V76.79h10.34Z" transform="translate(-0.31 0.07)"></path></svg>
                     </a>
                  </div>
                  <div>
                     <a href="https://www.youtube.com/watch?v=NaBGAVin3QQ" target="_blank" class="logo-box">
                        <img src="{!! asset('assets/images/Screenshot_14.png') !!}" alt="" class="img-fluid">
                     </a>
                  </div>

                  <div>
                     <a href="https://youtu.be/-KkV39Fcop8?t=121" target="_blank" class="logo-box">
                        <img src="{!! asset('assets/images/citizendigital.png') !!}" alt="" class="img-fluid" style="width:70%;">
                     </a>
                  </div>

               </div>
            </div>
         </div>
      </div>
   </section>
   <!------------------end of carousel section-->
   <!-------------------opportunity section---->
   <section class="provide-service bg-light">
      <div class="container">
         <div class="row">
         <div class="col-lg-5 order-lg-1">
               <div class="provide-details">
                <h1>Opportunities</h1>
                    <p>We are offering the opportunity to build a UK property sales
                      company in your home country as part of our joint venture
                      expansion plans.
                    </p>
                    <p>
                    As a group we transact on around £100 million GBP per
                    annum ($120 m) of UK property and have some of the best
                    property developments in the UK.
                    </p>
                    <p>
                    We use our skill set in sourcing the best stock, utilizing our
                    due diligence, data analytics and market knowledge. Process
                    clients with a world class processing team, solicitors who
                    know the African market well, and finally with our
                    management company ‘Redstone’ who will look after your
                    clients from property completion through to future sale.
                    </p>
                    <p>
                    We can get mortgages for any client, anywhere in the world,
                    meaning investment levels can be as low as $50,000 and all
                    of this is within the highest regulated property market in the
                    world.
                    </p>
                    <p>
                    We are offering you the opportunity to use our brand, our
                    training, our marketing, and back end processing, allowing
                    you to just focus on selling the products.
                  </p>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="service-img">
                  <img src="{!! asset('assets/images/ServicesIntrosection.png') !!}" class="img-fluid" alt="">
               </div>
            </div>
         </div>
         <center><a href="#" data-bs-toggle="modal" data-bs-target="#getMoreInfo" class="btn btn-solid color-3 btn-flat mt-5 btn-lg"><i class="fa fa-question-circle"></i>&nbsp; Inquire</a></center>
      </div>
   </section>
   <!----------------------end of opportunity section-->
   <!----------------------Training------->
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
                <h1>Your Training</h1>
                    <p>Naturally we need you to be successful and compliant with
                       the correct practices under the Baron & Cabot brand so you
                       can make money over the long term with plenty of repeat
                       business.
                    </p>
                    <p>
                    Before we start your management will be trained into UK
                    property by our senior management. Not just the sales but
                    also expected lead conversions, and management data to
                    work from.
                    </p>
                    <p>
                    Then your staff will start their training either on site or ideally
                    in our Dubai training office where they can immerse
                    themselves with successful staff.
                    </p>
                    <p>
                    On site training is hugely beneficial if it is possible as the
                    staff will see success happening in front of them and learn
                    great habits. This training can be anything between 2 and 4
                    weeks and will be intense. Make sure the staff are ready for
                    long hours!
                    </p>
                    <p>
                    All staff will be earning while they train allowing you to
                    minimize outgoings at this point.
                    </p>
                    <p>
                    Online additional training and tests are used for compliance
                    and additional sales training, plus weekly sharing of the best
                    calls globally (as all are recorded) are shared so your staff
                    keep improving.
                    </p>
               </div>
            </div>
         </div>
         <center><a href="#" data-bs-toggle="modal" data-bs-target="#getMoreInfo" class="btn btn-solid color-3 btn-flat mt-5 btn-lg"><i class="fa fa-question-circle"></i>&nbsp; Inquire</a></center>
      </div>
   </section>
   <!---------------------end training section--->
   <!---------software------->
   <section class="provide-service bg-light">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 order-lg-1">
               <div class="service-img">
               <h1>Coaching</h1>
               <p>
               Our Artificial Intelligence automated sales coach will listen
                into your senior staff’s sales calls and update you and the
                staff member about mistakes made, or improvements to
                make. This advanced coaching will also allow your
                management to pull off calls and use them as training
                examples with the support of one of our senior training staff.
               </p>
               <p>
               This coaching never ends with your staff, as does the
                management training and support weekly or by-weekly to
                your preference reducing to monthly once you are making
                serious progress.
               </p>
                  <img src="{!! asset('assets/images/due6.png') !!}" class="img-fluid" alt="">
               </div>
            </div>
            <div class="col-lg-5">
               <div class="provide-details">
                <img src="{!! asset('assets/images/due4.png') !!}" class="img-fluid" alt="">
                <h1>Software</h1>
                    <p>Our property portal offers staff training, videos and pricing of
                        every property we have. Search functions allow the staff
                        member to find your clients perfect property quickly while
                        liaising with them. Automatic cash flows will show your client
                        in real time what their returns will be and live reservations
                        will allow you to hold that unit.
                    </p>
                    <p>
                        Training videos on each city and every development will be
                        available for practice or to show your clients in your
                        meetings/ Zoom calls.
                    </p>
                    <p>
                        Having this allows you to work remotely and branch out to
                        clients outside of your local city, dramatically increasing your
                        opportunities.
                    </p>
               </div>
            </div>
         </div>
         <center><a href="#" data-bs-toggle="modal" data-bs-target="#getMoreInfo" class="btn btn-solid color-3 btn-flat mt-5 btn-lg"><i class="fa fa-question-circle"></i>&nbsp; Inquire</a></center>
      </div>
   </section>
   <!------------end--------->
   <!---------------------investment----------->
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
                <h1>Investment Strategy</h1>
                    <p>We work from millions of lines of data in picking the best
                        investment locations and pockets of value for clients.
                   </p>
                   <p>
                   With some of the most advanced machine learning and data
                    processing we have the square foot of every property in
                    England, and every sold price of every residential property in
                    the UK since 1997*.
                   </p>
                   <p>
                   With this information as well as economic forecasts,
                    government information on new investments and knowledge
                    of every new transport link in the UK for the next 5 years we
                    are ahead of the curve with investments.
                   </p>
                   <p>
                   This means our investors don’t only get large discounts due
                    to our purchasing power, they also get massive rental growth
                    and capital growth.
                   </p>
               </div>
            </div>
         </div>
         <center><a href="#" data-bs-toggle="modal" data-bs-target="#getMoreInfo" class="btn btn-solid color-3 btn-flat mt-5 btn-lg"><i class="fa fa-question-circle"></i>&nbsp; Inquire</a></center>
      </div>
   </section>
   <!-----------------------end----->
   <!------------------mortgages---->

   <!--------------------end-------->
   <!----------------------become a franchise----->
   <section class="provide-service bg-light">
      <div class="container">
         <div class="row">
         <div class="col-lg-6">
               <div class="provide-details">
                <h2>Become a franchise</h2>
                    <p>If you’d like to learn more about possible franchise opportunities and joining the Baron & Cabot Franchise network, we’d love
                        to hear from you. Get in touch with us using the contact details on this page or send us a message and we’ll respond with a
                        territory evaluation.
                    </p>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="service-img">
               <h2>Our franchise offering</h2>

               <p style="margin: left">Specialist service divisions support the Pam Golding Properties network of corporate and franchise offices.</p>
               <p>The PGP Training Academy provides real estate training in accordance with the franchise agreement and, additionally via the
                    group’s internal online training platform.</p>
                <p>A dedicated marketing division at national and regional level facilitates the provision of material across both print and digital
                    platforms.</p>
                <p>Bespoke intranet and CRM systems provide office administration, property management services, and agent and client
                    management tools.</p>

               </div>
            </div>

         </div>
         <!-- <center><a href="#" data-bs-toggle="modal" data-bs-target="#getMoreInfo" class="btn btn-solid color-3 btn-flat mt-5 btn-lg"><i class="fa fa-question-circle"></i>&nbsp; Inquire</a></center> -->
      </div>
   </section>
   <!-----------------------end-------------->
   <!------------------media--->
   {{-- <section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="text-center">
                <h3 class="mb-3">Media</h3>
            </div>
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                  @foreach(CMS::posts() as $blog)
                                    <div class="col-md-4 mb-3">
                                          <div class="card">
                                             @if($blog->thumbnail)
                                                <img src="{!! Helpers::backend() !!}/media/posts/{!! $blog->thumbnail !!}" class="img-fluid" alt="">
                                             @else
                                                <img src="{!! asset('assets/images/placeholder.png') !!}" class="img-fluid" alt="">
                                             @endif
                                             <div class="card-body">
                                             <h3><a href="{!! route('blog.details',$blog->url) !!}">{!! $blog->title !!}</a></h3>
                                             <p class="font-roboto">{!! substr($blog->synopsis, 0,250) !!} {!! strlen($blog->synopsis) > 250 ? "..." : "" !!}</p>
                                             <a href="{!! route('blog.details',$blog->url) !!}">read more</a>
                                             </div>
                                          </div>
                                    </div>
                                 @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <div class=" text-center">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
</section> --}}
   <!---------------------end--->
   <!--------------hhd-->
   <!-- feature section start -->
  <section class="feature-section slick-between  mb-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <div class="title-2 text-white mb-5">
            <h2 class="text-dark">Articles</h2>
          </div>
          <div class="feature-2 dot-gradient">
            @foreach(CMS::posts() as $blog)
              <div>
                  <div class="card" style="width: 18rem;">
                    @if($blog->thumbnail)
                    <img src="{!! Helpers::backend() !!}/media/posts/{!! $blog->thumbnail !!}" class="img-fluid" alt="">
                 @else
                    <img src="{!! asset('assets/images/placeholder.png') !!}" class="img-fluid" alt="">
                 @endif
                    <div class="card-body">
                      <h3><a href="{!! route('blog.details',$blog->url) !!}">{!! $blog->title !!}</a></h3>
                      <p class="font-roboto">{!! substr($blog->synopsis, 0,250) !!} {!! strlen($blog->synopsis) > 250 ? "..." : "" !!}</p>
                      <a href="{!! route('blog.details',$blog->url) !!}">read more</a>
                    </div>
                  </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
      <center><a href="#" data-bs-toggle="modal" data-bs-target="#getMoreInfo" class="btn btn-solid color-3 btn-flat mt-5 btn-lg"><i class="fal fa-headset"></i> Contact us</a></center>
    </div>
  </section>
  <!-- feature section end -->
  <!--------------end--->
@endsection
