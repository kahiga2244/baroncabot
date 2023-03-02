<!-- latest jquery-->
<script src="{!! asset('assets/js/jquery-3.6.0.min.js') !!}"></script>

<!-- popper js-->
<script src="{!! asset('assets/js/popper.min.js') !!}"></script>

<!-- magnific js -->
{{-- <script src="{!! asset('assets/js/jquery.magnific-popup.js') !!}"></script>
<script src="{!! asset('assets/js/zoom-gallery.js') !!}"></script>
<script src="{!! asset('assets/js/zoom-gallery-multiple.js') !!}"></script> --}}

<!-- Bootstrap js-->
<script src="{!! asset('assets/js/bootstrap.bundle.min.js') !!}"></script>

<!-- video js-->
<script src="{!! asset('assets/js/jquery.vide.min.js') !!}"></script>

<!-- range slider js -->
{{-- <script src="{!! asset('assets/js/jquery-ui.js') !!}"></script>
<script src="{!! asset('assets/js/jquery.ui.touch-punch.min.js') !!}"></script>
<script src="{!! asset('assets/js/range-slider.js') !!}"></script> --}}

<!-- feather icon js-->
<script src="{!! asset('assets/js/feather-icon/feather.min.js') !!}"></script>
<script src="{!! asset('assets/js/feather-icon/feather-icon.js') !!}"></script>

<!-- slick js -->
<script src="{!! asset('assets/js/slick.js') !!}"></script>
<script src="{!! asset('assets/js/slick-animation.min.js') !!}"></script>
<script src="{!! asset('assets/js/custom-slick.js') !!}"></script>

<!-- notify js -->
<script src="{!! asset('assets/js/bootstrap-notify.min.js') !!}"></script>

<!-- wow js-->
<script src="{!! asset('assets/js/wow.min.js') !!}" ></script>

<!-- Template js-->
<script src="{!! asset('assets/js/script.js') !!}"></script>

<!-- Customizer js-->
<script src="{!! asset('assets/js/customizer.js') !!}"></script>

<!-- Color-picker js-->
<script src="{!! asset('assets/js/color/layout3.js') !!}"></script>

<script src="{!! asset('assets/js/fancybox.min.js') !!}"></script>

{{-- /////////////////////////////////////////////////////////////////////////// --}}

  <!-- fancy slider js -->
  <script src="{!! asset('assets/js/fancy-slider.js') !!}"></script>

  <!-- Color-picker js-->
  <script src="{!! asset('assets/js/color/layout5.js') !!}"></script>

<script>
   function refreshPage(){
      window.location.reload();
   }
</script>

<!-- ================== toastr ================== -->
<link href="{!! asset('assets/js/toastr/build/toastr.css') !!}" rel="stylesheet"/>
<script src="{!! asset('assets/js/toastr/build/toastr.min.js') !!}"></script>
@if(Session::has('success'))
   <script>
		toastr.options =
		{
			"closeButton" : true,
			"progressBar" : true
		}
      toastr.success('{!! Session::get('success') !!}');
   </script>
@endif

@if(Session::has('error'))
   <script>
		toastr.options =
		{
			"closeButton": true,
			"progressBar" : true
		}
      toastr.error('{!! Session::get('error') !!}');
   </script>
@endif

@if(Session::has('warning'))
   <script>
		toastr.options =
		{
			"closeButton": true,
			"progressBar" : true
		}
      toastr.warning('{!! Session::get('warning') !!}');
   </script>
@endif

<!-- select 2 -->
<link href="{!! asset('assets/js/select2/dist/css/select2.min.css') !!}" rel="stylesheet" />
<script src="{!! asset('assets/js/select2/dist/js/select2.min.js') !!}"></script>
<script>
   $('.select2').select2({
      width: '100%',
      allowClear: true,
   });
</script>

<!-- Use as a Vanilla JS plugin -->
<script src="{!! asset('assets/js/intl-tel-input-master/build/js/intlTelInput.min.js') !!}"></script>
<script>
   var input = document.querySelector("#phone"),
      errorMsg = document.querySelector("#error-msg"),
      validMsg = document.querySelector("#valid-msg");
      submitBtn = document.querySelector("#submitForm");
      phoneValid = document.querySelector("#phone_valid");

   // Error messages based on the code returned from getValidationError
   var errorMap = [ "Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

   // Initialise plugin
   var intl = window.intlTelInput(input, {
      initialCountry: "auto",
      nationalMode:false,
      // geoIpLookup: function(success, failure) {
      //    $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //       var countryCode = (resp && resp.country) ? resp.country : "";
      //       success(countryCode);
      //    });
      // },

      utilsScript: "{!! asset('assets/js/intl-tel-input-master/build/js/utils.js') !!}",
   });

   var reset = function() {
      input.classList.remove("error");
      errorMsg.innerHTML = "";
      errorMsg.classList.add("hide");
      validMsg.classList.add("hide");
      submitBtn.classList.add("hide");
      phoneValid.classList.add("hide");
   };

   // Validate on blur event
   input.addEventListener('blur', function() {
      reset();
      if(input.value.trim()){
         if(intl.isValidNumber()){
            validMsg.classList.remove("hide");
            submitBtn.classList.remove("hide");
            phoneValid.classList.add("hide");
         }else{
            input.classList.add("error");
            var errorCode = intl.getValidationError();
            errorMsg.innerHTML = errorMap[errorCode];
            errorMsg.classList.remove("hide");
            phoneValid.classList.remove("hide");
         }
      }
   });

   // Reset on keyup/change event
   input.addEventListener('change', reset);
   input.addEventListener('keyup', reset);

</script>


@livewireScripts


@yield('scripts')

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W4LL3C9" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<script type="text/javascript">
   DeBounce_APIKEY = 'public_bzJxYXc2Q0J2OHBLRVJYUXNCcm1wdz09';
   DeBounce_BlockFreeEmails = 'false';
   //Set this value true to block free emails like Gmail.
</script>
<script async type="text/javascript" src="https://cdn.debounce.io/widget/DeBounce.js"></script>

<!-----------------whatsapp-->
<script src="{!! asset('assets/js/whatsapp/floating-wpp.min.js') !!}" rel="stylesheet"></script>
<!-- <script href="{!! asset('assets/js/whatsapp/whatsapp.js') !!}" rel="stylesheet"></script> -->
<script type="text/javascript">
    $(function () {
        $('#whatsapp').floatingWhatsApp({
            phone: '+442036951739',
            showPopup: 'True',
            popupMessage: "hey this baron cabot company",
            headerTitle: "whatsapp Chat",
            message: "great",
            position: "left",
        });
    });
</script>
<!-----------end---->