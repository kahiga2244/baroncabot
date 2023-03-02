@extends('layouts.site')
@section('title','404')
@section('content')
   <!-- section start -->
   <section class="error-section small-section">
      <div class="container">
         <div class="row">
            <div class="col text-center not-found">
               <img src="{!! asset('assets/images/404.svg') !!}" class="img-fluid" alt="">
               <h2>Whoops! something went wrong ?</h2>
               <p class="font-roboto">we are sorry but the page you are looking for doesn't exist or has been removed. please check or search again.</p>
               <div class="btns">
                  <a href="{!! url('/') !!}" class="btn btn-gradient color-4">go to home page</a>
                  <a href="{!! url('contact-us') !!}" class="btn btn-dashed color-4 ms-2">Report problem</a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- section end -->
@endsection
