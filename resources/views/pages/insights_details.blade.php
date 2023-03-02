@extends('layouts.site')
@section('title'){!! $blog->title !!}@endsection
@section('description'){!! $blog->meta_description !!}@endsection
@section('keywords'){!! $blog->meta_tags !!}@endsection
@section('content')
   <!-- breadcrumb start -->
   <section class="breadcrumb-section p-0">
      <img src="{!! asset('assets/images/inner-background.jpg') !!}" class="bg-img img-fluid" alt="">
      <div class="container">
         <div class="breadcrumb-content">
            <div>
               <h1 class="text-white">{!! $blog->title !!}</h1>
               <nav aria-label="breadcrumb" class="theme-breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="{!! url('/') !!}">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Blog</li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>
   </section>
   <!-- breadcrumb end -->

   <!-- blog details section start-->
   <section class="ratio_40">
      <div class="container">
         <div class="row">
            <div class="col-xl-9 col-lg-8">
               <div class="blog-single-detail theme-card">
                  <center>
                     @if($blog->thumbnail)
                        <img src="{!! Helpers::backend() !!}/media/posts/{!! $blog->thumbnail !!}" class="img-responsive" alt="" style="width:100%">
                     @endif
                  </center>
                  <div class="blog-title">
                     <ul class="post-detail">
                        <li>{!! date('F jS, Y', strtotime($blog->created_at)) !!}</li>
                        {{-- <li>Posted By : Agent</li>
                        <li><i class="fa fa-heart me-2"></i>8 Hits</li>
                        <li><i class="fa fa-comments me-2"></i>20 Comment</li> --}}
                     </ul>
                     <h3>{!! $blog->title !!}</h3>
                  </div>
                  <div class="details-property">
                     <div class="row">
                        {!! $blog->content !!}
                     </div>
                  </div>
               </div>
            </div>
            @include('partials._insights_bar')
         </div>
      </div>
   </section>
   <!-- blog details section end-->
@endsection
