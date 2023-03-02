<!DOCTYPE html>
<html lang="en">
   @include('partials._head')
   <body>
      <!-- Loader start -->
      {{-- <div class="loader-wrapper">
         <div class="row loader-text">
            <div class="col-12">
               <img src="{!! asset('assets/images/loader/loader.gif') !!}" class="img-fluid" alt="">
            </div>
            <div class="col-12">
               <div>
                  <h3 class="mb-0">Baron & Cabot</h3>
               </div>
            </div>
         </div>
      </div> --}}
      <!-- Loader end -->

      <!-- header start -->
      @include('partials._header')
      <!--  header end -->
      @include('partials._messages')
      @yield('content')

      <!-- footer start -->
      @include('partials._footer')
      <!-- footer end -->

      <!-- tap to top start -->
      <a href="#" data-bs-toggle="modal" data-bs-target="#getMoreInfo" class="text-white">
         <div class="tap-top top color-6">
            <i class="fal fa-headset"></i> Contact Us
         </div>
      </a>
      <!-- tap to top end -->


      <!-- getMoreInfo -->
      <div class="modal fade" id="getMoreInfo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-keyboard="false" data-bs-backdrop="static">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header text-center">
                  <h5 class="modal-title " id="exampleModalLabel">Register Interest</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
               </div>
               <div class="modal-body">
                  <div class="row">
                     <form class="col" id="leadsForm" method="POST" action="{!! route('website.inquiry') !!}">
                        @csrf
                        <div class="row">
                           <div class="col">
                              <div class="form-group">
                                 <label for="">First Name</label>
                                 <input type="text" name="first_name" class="form-control" required>
                              </div>
                           </div>
                           <div class="col">
                              <div class="form-group">
                                 <label for="">Last Name</label>
                                 <input type="text" name="last_name" class="form-control" required>
                              </div>
                           </div>
                        </div>

                        <div class="col">
                           <div class="form-group">
                              <label for="">Phone Number</label><br>
                              <input type="tel" name="phone_number" id="phone" class="form-control" required>
                              <span id="valid-msg" class="hide">✓ Valid</span>
                              <span id="error-msg" class="hide"></span>
                           </div>
                           <input type="hidden" name="page" value="@yield('title')" class="form-control" required>
                        </div>

                        <div class="col">
                           <div class="form-group">
                              <label for="">Email</label>
                              <input type="email" name="email" class="form-control" debounce-disable="true" required>
                           </div>
                           <input type="hidden" name="page" value="@yield('title')" class="form-control" required>
                        </div>
                        {!! NoCaptcha::renderJs() !!}
                        {!! NoCaptcha::display() !!}
                        @error('g-recaptcha-response')
                           <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <div class="col-12 mt-3">
                           <center><button type="submit" class="btn btn-warning hide" id="submitForm">Submit Information</button></center>
                           <center><small class="text-danger hide" id="phone_valid">Your Phone Number is invalid</small></center>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>

      @include('partials._javascripts')
   </body>
</html>
