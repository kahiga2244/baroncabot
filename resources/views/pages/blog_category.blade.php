@extends('layouts.site')
@section('title'){!! $category->name !!}@endsection
@section('content')

   <!-- breadcrumb start -->
   <section class="breadcrumb-section p-0">
      <img src="{!! asset('assets/images/inner-background.jpg') !!}" class="bg-img img-fluid" alt="">
      <div class="container">
         <div class="breadcrumb-content">
            <div>
               <h1 class="text-white">{!! $category->name !!} </h1>
               <nav aria-label="breadcrumb" class="theme-breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="{!! url('/') !!}">Home</a></li>
                     <li class="breadcrumb-item">Category</li>
                     <li class="breadcrumb-item active" aria-current="page">{!! $category->name !!}</li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>
   </section>
   <!-- breadcrumb end -->

   <!-- blog section start-->
   <section class="ratio_landscape blog-list-section">
      <div class="container">
         @livewire('category', ['category' => $category->url])
      </div>
   </section>
   <!-- blog section end-->
@endsection
