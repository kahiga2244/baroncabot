@extends('layouts.site')
@section('title'){!! $property->product_name !!}@endsection
@section('stylesheets')
   <style>
       .select2-container {
            z-index: 9999 !important;
         }
   </style>
@endsection
@section('content')
   <!-- slider section start -->
   <section class="p-0 ratio3_2">
      <div class="single-property-slider">
         @foreach ($images as $image)
            <div>
               <a data-fancybox="light-masonry" href="{!! Helpers::backend() !!}/media/products/{!! $image->file_name !!}">
                  <div>
                     <img src="{!! Helpers::backend() !!}/media/products/{!! $image->file_name !!}" class="bg-img" alt="">
                  </div>
               </a>
            </div>
         @endforeach
      </div>
   </section>
   <!-- slider section end -->
   <!-- single property header start -->
   <section class="without-top property-main small-section">
      <div class="single-property-section">
         <div class="container">
            <h1 class="text-center mb-3 mt-0">{!! $property->product_name !!}</h1>
            <div class="single-title">
               <div class="col ">
                  <h2 class="text-center">
                     <span class="top-info">£{!! number_format($property->price) !!}</span><br>
                     Starting Price
                  </h2>
               </div>
               <div class="col">
                  <h2 class="text-center">
                     <span class="top-info"> {!! $property->unit_choices !!}</span><br>
                     Unit Choices
                  </h2>
               </div>
               <div class="col">
                  <h2 class="text-center">
                     <span class="top-info">{!! $property->completion !!}</span><br>
                     Completion
                  </h2>
               </div>
               <div class="col">
                  <h2 class="text-center">
                     <span class="top-info">{!! $property->location !!}</span><br>
                     Location
                  </h2>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- single property header end -->

   <!-- single property start -->
   <section class="single-property mt-0 pt-0">
      <div class="container">
         <div class="row ratio_55">
            <div class="col-xl-9 col-lg-8">
               <div class="description-section tab-description">
                  <div class="description-details">
                     <div class="desc-box">
                        <ul class="nav nav-tabs line-tab" id="top-tab" role="tablist">
                           <li class="nav-item"><a class="nav-link {{ Nav::isRoute('project.details') }}" href="{!! route('project.details',$property->url) !!}">Details</a></li>
                           {{-- <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#details">Project Details</a></li> --}}
                           {{-- <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#feature">Feature</a></li>
                           <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#video">video</a> </li> --}}
                           {{-- <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#floor_plan">Floor plan</a></li> --}}

                           {{-- @if($property->map)
                           <li class="nav-item"><a data-bs-toggle="tab" class="nav-link"  href="">location</a></li>
                           @endif --}}
                           @if($checkCashFlow == 1)
                              @if($forecast->rental_growth_year_1 != "" && $forecast->rental_capital_appreciation_10 != "")
                                 <li class="nav-item">
                                    <a class="nav-link {{ Nav::isRoute('project.roi') }}" data-bs-toggle="modal" data-bs-target="#roi" href="#">Return On Investment</a>
                                 </li>
                              @endif
                           @endif
                        </ul>
                        <div class=" tab-content" id="top-tabContent">
                           @if(request()->route()->getName() == 'project.details')
                              <div class="tab-pane fade show active about page-section">
                                 <div class="row">
                                    <div class="col-md-12">
                                       {!! $property->description !!}
                                    </div>
                                 </div>
                              </div>
                           @endif

                           {{-- <div class="tab-pane fade page-section" id="feature">
                              <h4 class="content-title">features</h4>
                              <div class="single-feature row">
                                    <div class="col-xl-3 col-6">
                                       <ul>
                                          <li>
                                                <i class="fas fa-wifi"></i> Free Wi-Fi
                                          </li>
                                          <li>
                                                <i class="fas fa-hands"></i> Elevator Lift
                                          </li>
                                          <li>
                                                <i class="fas fa-power-off"></i> Power Backup
                                          </li>
                                          <li>
                                                <i class="fas fa-monument"></i> Laundry Service
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="col-xl-3 col-6">
                                       <ul>
                                          <li>
                                                <i class="fas fa-user-shield"></i> Security Guard
                                          </li>
                                          <li>
                                                <i class="fas fa-video"></i> CCTV
                                          </li>
                                          <li>
                                                <i class="fas fa-door-open"></i> Emergency Exit
                                          </li>
                                          <li>
                                                <i class="fas fa-first-aid"></i> Doctor On Call
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="col-xl-3 col-6">
                                       <ul>
                                          <li>
                                                <i class="fas fa-shower"></i> Shower
                                          </li>
                                          <li>
                                                <i class="fas fa-car"></i> free Parking in the area
                                          </li>
                                          <li>
                                                <i class="fas fa-fan"></i> Air Conditioning
                                          </li>
                                       </ul>
                                    </div>
                              </div>
                           </div> --}}
                           {{-- <div class="tab-pane fade page-section ratio_40" id="video">
                              <h4 class="content-title">video</h4>
                              <div class="play-bg-image">
                                 <div class="bg-size">
                                    <img src="{!! asset('assets/images/property/11.jpg') !!}" class="bg-img" alt="">
                                 </div>
                                 <div class="icon-video">
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                       data-bs-target="#videomodal">
                                       <i class="fas fa-play"></i>
                                    </a>
                                 </div>
                              </div>
                           </div> --}}
                           {{-- <div class="tab-pane fade page-section" id="floor_plan">
                              <h4 class="content-title">Floor plan</h4>
                              <img src="{!! asset('assets/images/single-property/floor-plan.png') !!}" alt="" class="img-fluid">
                           </div> --}}
                           @if($property->map)
                              <div class="tab-pane fade page-section" id="location-map">
                                 <h4 class="content-title">location</h4>
                                 {!! $property->map !!}
                              </div>
                           @endif
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-4">
               <a href="#" class="btn btn-lg  btn-block btn-solid btn-flat color-3 mb-3" data-bs-toggle="modal" data-bs-target="#getMoreInfo"><i class="fa fa-eye"></i> Get More Info</a>
               {{-- <div class="left-sidebar sticky-cls single-sidebar">
                  <div class="filter-cards">
                     <div class="advance-card">
                        <h4>Mortgage</h4>
                        <div class="category-property">
                           <form>
                              <div class="input-group mb-3">
                                    <span class="input-group-text">$</span>
                                    <input type="number" class="form-control" placeholder="Loan Amount" required>
                              </div>
                              <div class="input-group mb-3">
                                    <span class="input-group-text">$</span>
                                    <input type="number" class="form-control" placeholder="Down Payment" required>
                              </div>
                              <div class="input-group mb-3">
                                    <span class="input-group-text">%</span>
                                    <input type="number" class="form-control" placeholder="Rate of Interest" required>
                              </div>
                              <div class="input-group mb-3">
                                    <span class="input-group-text">$</span>
                                    <input type="number" class="form-control" placeholder="Number Of years" required>
                              </div>
                              <button type="submit" class="btn btn-gradient color-2 btn-block btn-pill">Calculate</button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div> --}}
            </div>
         </div>
      </div>
   </section>
   <!-- single property end -->

   <!-- Modal -->
   <div  class="modal fade" id="roi" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel"></h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
            </div>
            <form action="{!! route('project.roi.calculate.first') !!}" method="POST">
               @csrf
               <div class="modal-body">
                  <h4 class="text-center mb-3">Before we can give you a predicted ROI we need to know a few things about you</h4>
                  <div class="row mt-3">
                     <div class="col-md-6 mb-3">
                        <label for="">Where do you live ?</label>
                        <select name="country" class="form-control select2" required>
                           <option value="">Choose country</option>
                           @foreach ($rates as $rate)
                              <option value="{!! $rate->id !!}">{!! $rate->country !!} </b></option>
                           @endforeach
                        </select>
                     </div>
                     <div class="col-md-6 mb-3">
                        <label for="">Which unit would you like to get ?</label>
                        <select name="unit" class="form-control select2" required>
                           <option value="">Choose</option>
                           @foreach ($units as $unit)
                              @if($unit->status != 'Sold')
                                 <option value="{!! $unit->id !!}">{!! $unit->product_name !!} | £{!! number_format($unit->price) !!} | Size {!! $unit->size !!}</option>
                              @endif
                              @endforeach
                        </select>
                     </div>
                     <div class="col-md-6 mb-3">
                        <label for="">Do you want to buy in a company ?</label>
                        <select name="company_buy" class="form-control" required>
                           <option value="No">No</option>
                           <option value="Yes">Yes</option>
                           <option value="Not sure">Not sure</option>
                        </select>
                     </div>
                     <div class="col-md-6 mb-3">
                        <label for="">Will you live in the property ?</label>
                        <select name="live_in" class="form-control" required>
                           <option value="No">No</option>
                           <option value="Yes">Yes</option>
                        </select>
                     </div>
                     {{-- <div class="col-md-6 mb-3">
                        <label for="">Will you use the property as an AirBnb or long term rent </label>
                        <select name="" class="form-control" required>
                           <option value="No">No</option>
                           <option value="Yes">Yes</option>
                        </select>
                     </div> --}}
                     <div class="col-md-6 mb-3">
                        <label for="">Will you use the property as an AirBnb or long term rent </label>
                        <select name="lease_terms" class="form-control" required>
                           <option value="Long">Long Term</option>
                           <option value="Airbnb">AirBnB</option>
                        </select>
                     </div>
                     <div class="col-md-6 mb-3">
                        <label for="">Cash purchase or mortgage</label>
                        <select name="purchase_type" class="form-control" required>
                           <option value="Mortgage">Mortgage</option>
                           <option value="Cash">Cash</option>

                        </select>
                     </div>
                     <input type="hidden" name="url" value="{!! $property->url !!}">
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button class="btn btn-success" type="submit">Calculate ROI</button>
               </div>
            </form>
         </div>
      </div>
   </div>

@endsection
@section('scripts')
   <!-- Color-picker js-->
   <script src="{!! asset('assets/js/color/single-property2.js') !!}"></script>
   <script type="text/javascript">
      window.livewire.on('popModal', () => {
         $('#roi').modal('hide');
      });
   </script>
@endsection
