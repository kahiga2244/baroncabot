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
               <h1 class="text-white">Meet The Team </h1>
               <nav aria-label="breadcrumb" class="theme-breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="{!! url('/') !!}">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Team</li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>
   </section>
   <!-- breadcrumb end -->

   <!-- agent grid section start -->
   <section class="agent-section property-section">
      <div class="container">
         <div class="row ratio2_3">
            <div class="col-xl-12 col-lg-12 property-grid-3 agent-grids">
               <div class="property-wrapper-grid list-view">
                  <div class="property-2 row column-sm property-label property-grid list-view">
                     @foreach ($teams as $team)
                        <div class="col-md-12 col-xl-6 wow fadeInUp">
                           <div class="property-box" @if($agent->isMobile()) @else style="min-height: 420px;" @endif>
                              <div class="agent-image">
                                 <div @if($agent->isMobile())style="height: 355px;"@endif>
                                    @if($team->profile_image)
                                       <img src="{!! Helpers::backend() !!}/storage/teams/{!! $team->profile_image !!}" class="img-fluid bg-img" alt="">
                                    @else
                                       <img src="{!! asset('assets/images/profile_placeholder.png') !!}" class="bg-img" alt="">
                                    @endif
                                    {{-- <span class="label label-shadow">2 properties</span> --}}
                                    <div class="agent-overlay"></div>
                                    <div class="overlay-content">
                                       @if($team->linkedin != "" && $team->email != "")
                                          <ul>
                                             <li><a href="{!! $team->linkedin !!}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                             <li><a href="{!! $team->email !!}" target="_blank"><i class="fas fa-envelope"></i></a></li>
                                          </ul>
                                          <span>Connect</span>
                                       @endif
                                    </div>
                                 </div>
                              </div>
                              <div class="agent-content">
                                 <h3><a href="#">{!! $team->name !!}</a></h3>
                                 <p class="font-roboto text-danger">{!! $team->position !!}</p>
                                 {{-- <p>{!! substr($team->bio, 0,218) !!} {!! strlen($team->bio) > 218 ? "..." : "" !!}</p> --}}
                                 <p>{!! $team->bio !!}</p>
                                 {{-- <a href="#">Play Intro Reel <i class="fas fa-arrow-right"></i></a> --}}
                                 @if($team->video_link)
                                 <a href="#" data-bs-toggle="modal" data-bs-target="#video{!! $team->id !!}" class="btn btn-solid btn-flat color-3 mt-3"><i class="fa fa-play"></i> Play Intro Reel</a>
                                 @endif
                              </div>
                           </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="video{!! $team->id !!}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-keyboard="false" data-bs-backdrop="static">
                           <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    {{-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> --}}
                                    <button type="button" class="btn-close" onClick="refreshPage()" data-bs-dismiss="modal" aria-label="Close"><span  aria-hidden="true">×</span></button>
                                 </div>
                                 <div class="modal-body">
                                    <video width="100%" controls>
                                       <source src="{!! asset('assets/video/'.$team->video_link) !!}" type="video/mp4" autostart="false">
                                       {{-- <source src="movie.ogg" type="video/ogg"> --}}
                                    </video>
                                 </div>
                              </div>
                           </div>
                        </div>
                     @endforeach
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- agent grid section end -->
@endsection
