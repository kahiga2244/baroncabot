 <!-- agent grid section start -->
 <section class="agent-section property-section">
   <div class="container">
      <div class="row ratio2_3">
         <div class="col-xl-12 col-lg-12 property-grid-3 agent-grids">
            <div class="property-wrapper-grid list-view">
               <div class="property-2 row column-sm property-label property-grid list-view">
                  @foreach ($teams as $team)
                     <div class="col-md-12 col-xl-6 wow fadeInUp">
                        <div class="property-box">
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
                                    <ul>
                                       <li><a href="{!! $team->linkedin !!}" target="_blank"><img src="{!! asset('assets/images/about/icon-1.png') !!}" alt=""></a>
                                       </li>
                                       <li><a href="{!! $team->twitter !!}" target="_blank"><img src="{!! asset('assets/images/about/icon-2.png') !!}" alt=""></a>
                                       </li>
                                       <li><a href="{!! $team->facebook !!}" target="_blank"><img src="{!! asset('assets/images/about/icon-3.png') !!}" alt=""></a>
                                       </li>
                                    </ul>
                                    <span>Connect</span>
                                 </div>
                              </div>
                           </div>
                           <div class="agent-content">
                              <h3><a href="#">{!! $team->name !!}</a></h3>
                              <p class="font-roboto text-danger">{!! $team->position !!}</p>
                              <p>{!! substr($team->bio, 0,218) !!} {!! strlen($team->bio) > 218 ? "..." : "" !!}</p>
                              {{-- <a href="#">Play Intro Reel <i class="fas fa-arrow-right"></i></a> --}}
                              <a href="#" class="btn btn-solid btn-flat color-3 mt-3" data-bs-toggle="modal" data-bs-target="#video{!! $team->id !!}" wire:click="view({{$team->id}})"><i class="fa fa-play"></i> Play Intro Reel</a>
                           </div>
                        </div>
                     </div>

                     <div wire:ignore.self class="modal fade video-modal" id="video{!! $team->id !!}" aria-labelledby="exampleModalLabel" data-bs-keyboard="false" data-bs-backdrop="static">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-body">
                                 <button type="button" onClick="refreshPage()"><span  aria-hidden="true">×</span></button>
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
