<section class="property-section">
   <div class="container">
      <div class="row ratio_63">
         <div class="col-xl-3 col-lg-4 mb-3">
            <div class="left-sidebar">
               <div class="filter-cards">
                  <div class="advance-card">
                     <div class="back-btn d-lg-none d-block">
                           Back
                     </div>
                     <h5 class="mb-0 advance-title">Advance search </h5>
                  </div>
                  <div class="advance-card">
                     <h6>Property Location</h6>
                     <div class="row gx-2">
                        <div class="col-12">
                           <div class="form-group">
                              <select wire:model="location" class="form-control">
                                 <option value="">All Properties</option>
                                 <option value="Birmingham">Birmingham</option>
                                 <option value="Manchester">Manchester</option>
                                 <option value="Leeds">Leeds</option>
                                 <option value="Liverpool">Liverpool</option>
                                 <option value="Cambridge">Cambridge</option>
                                 <option value="Coventry">Coventry</option>
                                 <option value="Nottingham">Nottingham</option>
                                 <option value="London">London</option>
                                 <option value="Bracknell">Bracknell</option>
                              </select>
                           </div>
                        </div>
                     </div>
                  </div>
                  {{-- <div class="advance-card">
                     <h6>Category</h6>
                     <div class="category-property">
                        <ul>
                           <li><a href="javascript:void(0)"><i class="fas fa-arrow-right me-2"></i>Apartment <span
                                       class="float-end">(15)</span></a></li>
                           <li><a href="javascript:void(0)"><i class="fas fa-arrow-right me-2"></i>Villa <span
                                       class="float-end">(10)</span></a></li>
                           <li><a href="javascript:void(0)"><i class="fas fa-arrow-right me-2"></i>Family House <span
                                       class="float-end">(8)</span></a></li>
                           <li><a href="javascript:void(0)"><i class="fas fa-arrow-right me-2"></i>Town House <span
                                       class="float-end">(5)</span></a></li>
                           <li><a href="javascript:void(0)"><i class="fas fa-arrow-right me-2"></i>Offices <span
                                       class="float-end">(12)</span></a></li>
                           <li><a href="javascript:void(0)"><i class="fas fa-arrow-right me-2"></i>Duplexes <span
                                       class="float-end">(3)</span></a></li>
                        </ul>
                     </div>
                  </div> --}}
               </div>
            </div>
            @if($agent->isMobile())
               <div class="form-group">
                  <h2>Property Location</h2>
                  <select wire:model="location" class="form-control">
                     <option value="">All Properties</option>
                     <option value="Birmingham">Birmingham</option>
                     <option value="Manchester">Manchester</option>
                     <option value="Leeds">Leeds</option>
                     <option value="Liverpool">Liverpool</option>
                     <option value="Cambridge">Cambridge</option>
                     <option value="Coventry">Coventry</option>
                     <option value="Nottingham">Nottingham</option>
                     <option value="London">London</option>
                     <option value="Bracknell">Bracknell</option>
                  </select>
               </div>
            @endif
         </div>
         <div class="col-xl-9 col-lg-8 property-grid-3">
            <div class="filter-panel">
               <div class="top-panel">
                  <div>
                     <h2>Properties Listing | <i class="fal fa-map-marker-alt"></i> {!! $this->location !!}</h2>
                  </div>
               </div>
            </div>
            <div class="property-wrapper-grid">
               <div class="property-2 row column-sm zoom-gallery property-label property-grid">
                  @foreach ($properties as $property)
                     <div class="col-xl-4 col-md-6 wow fadeInUp">
                        <div class="property-box">
                           <div class="property-image">
                              <div class="property-slider">
                                 <a href="{!! route('project.details',$property->url) !!}">
                                    @php
                                       $image = Property::cover_image($property->id)->getData();
                                    @endphp
                                    @if($image->check == 1)
                                       <img src="{!! Helpers::backend() !!}/media/products/{!! $image->cover->file_name !!}" class="bg-img" alt="" style="height: 256px">
                                    @else
                                       <img src="" alt="">
                                    @endif
                                 </a>
                              </div>
                              {{-- <div class="labels-left">
                                 <div><span class="label label-shadow">sale</span></div>
                              </div> --}}
                           </div>
                           <div class="property-details" style="min-height: 251px;">
                              <span class="font-roboto">{!! $property->location !!}</span>
                              <a href="{!! route('project.details',$property->url) !!}">
                                 <h3>{!! $property->product_name !!}</h3>
                              </a>
                              <h6>£{!! number_format($property->price) !!}*</h6>
                              <h5><b>Completion :</b> <span class="text-primary">{!! $property->completion !!}</span></h5>
                              {{-- <p class="font-roboto">{!! substr($property->short_description, 0,200) !!} {!! strlen($property->short_description) > 200 ? "..." : "" !!}</p> --}}
                              {{-- <ul>
                                 <li><img src="{!! asset('assets/images/svg/icon/double-bed.svg') !!}" class="img-fluid" alt="">Bed : 4</li>
                                 <li><img src="{!! asset('assets/images/svg/icon/bathroom.svg') !!}" class="img-fluid" alt="">Baths : 4</li>
                                 <li><img src="{!! asset('assets/images/svg/icon/square-ruler-tool.svg') !!}" class="img-fluid ruler-tool" alt="">Sq Ft : 5000</li>
                              </ul> --}}
                              <div class="property-btn d-flex">
                                 {{-- <span>August 4, 2022</span> --}}
                                 <button type="button"  onclick="document.location='{!! route('project.details',$property->url) !!}'" class="btn btn-dashed btn-pill  btn-block color-2 mt-3">Details</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  @endforeach
               </div>
            </div>
            {{-- <nav class="theme-pagination">
               <ul class="pagination">
                  <li class="page-item">
                     <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                        <span aria-hidden="true">«</span>
                        <span class="sr-only">Previous</span>
                     </a>
                  </li>
                  <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                  <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                  <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                  <li class="page-item">
                     <a class="page-link" href="javascript:void(0)" aria-label="Next">
                        <span aria-hidden="true">»</span>
                        <span class="sr-only">Next</span>
                     </a>
                  </li>
               </ul>
            </nav> --}}
         </div>
      </div>
   </div>
</section>
