<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="google-site-verification" content="oB6ch4sB9zv59sFQjEkiB-ZEVMBjgvzIsXIOj0rkqpI" />
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>@yield('title') - Baron & Cabot</title>

   <!-- Meta -->
	<!-- Page Description Here -->
	<meta name="description" content="@yield('description')">
	<meta name="keywords" content="@yield('keywords')">

	<!-- Twitter Meta -->
	<meta name="twitter:site" content="@baroncabot">
	<meta name="twitter:creator" content="@baroncabot">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="@yield('title')">
	<meta name="twitter:description" content="@yield('description')">
	<meta name="twitter:image" content="{!! asset('assets/favicon/apple-icon-120x120.png') !!}">

	<!-- Facebook Meta -->
   <meta property="og:locale" content="en_US" />
	<meta property="og:url" content="@yield('url')"/>
	<meta property="og:title" content="@yield('title')">
	<meta property="og:description" content="@yield('description')">
	<meta property="og:type" content="website">
   <meta property="og:image" content="@yield('image')" />
	<meta property="og:image:secure_url" content="@yield('image')">
	<meta property="og:image:type" content="image/jpeg">
	<meta property="og:image:width" content="500">
	<meta property="og:image:height" content="250">
   <meta property="og:site_name" content="Baron &amp; Cabot" />

   @yield('article')

   <link rel="apple-touch-icon" sizes="57x57" href="{!! asset('assets/favicons/apple-icon-57x57.png') !!}">
   <link rel="apple-touch-icon" sizes="60x60" href="{!! asset('assets/favicons/apple-icon-60x60.png') !!}">
   <link rel="apple-touch-icon" sizes="72x72" href="{!! asset('assets/favicons/apple-icon-72x72.png') !!}">
   <link rel="apple-touch-icon" sizes="76x76" href="{!! asset('assets/favicons/apple-icon-76x76.png') !!}">
   <link rel="apple-touch-icon" sizes="114x114" href="{!! asset('assets/favicons/apple-icon-114x114') !!}.png">
   <link rel="apple-touch-icon" sizes="120x120" href="{!! asset('assets/favicons/apple-icon-120x120.png') !!}">
   <link rel="apple-touch-icon" sizes="144x144" href="{!! asset('assets/favicons/apple-icon-144x144.png') !!}">
   <link rel="apple-touch-icon" sizes="152x152" href="{!! asset('assets/favicons/apple-icon-152x152.png') !!}">
   <link rel="apple-touch-icon" sizes="180x180" href="{!! asset('assets/favicons/apple-icon-180x180.png') !!}">
   <link rel="icon" type="image/png" sizes="192x192" href="{!! asset('assets/favicons/android-icon-192x192.png') !!}">
   <link rel="icon" type="image/png" sizes="32x32" href="{!! asset('assets/favicons/favicon-32x32.png') !!}">
   <link rel="icon" type="image/png" sizes="96x96" href="{!! asset('assets/favicons/favicon-96x96.png') !!}">
   <link rel="icon" type="image/png" sizes="16x16" href="{!! asset('assets/favicons/favicon-16x16.png') !!}">
   <link rel="manifest" href="{!! asset('manifest.json') !!}">
   <meta name="msapplication-TileColor" content="#ffffff">
   <meta name="msapplication-TileImage" content="{!! asset('assets/favicons/ms-icon-144x144.png') !!}">
   <meta name="theme-color" content="#ffffff">

   <!--Google font-->
   <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800,800i"
      rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i&amp;display=swap" 
      rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">

   <!-- range slider css -->
   <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/jquery-ui.css') !!}">

   <!-- animate css -->
   <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/animate.css') !!}">

   <!-- Template css -->
   <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/bootstrap.css') !!}">
   <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/color1.css') !!}">
   <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/custom.css') !!}">
   <link rel="stylesheet" type="text/css" href="{!! asset('assets/fonts/fontawesome/css/all.min.css') !!}">

   <!-- lightbox -->
   <link href="{!! asset('assets/js/lightbox/src/css/lightbox.css') !!}" rel="stylesheet" />
   <link href="{!! asset('assets/css/fancybox.min.css') !!}" rel="stylesheet" />

   <link rel="stylesheet" href="{!! asset('assets/js/intl-tel-input-master/build/css/intlTelInput.css') !!}">
   {{-- <link rel="stylesheet" href="http://demos.codexworld.com/international-telephone-input-with-country-flags-dial-codes-jquery/css/intlTelInput.css"> --}}

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

   <!-- TrustBox script -->
   <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
   <!-- End TrustBox script -->
  <!------------whatsapp css---->
  <link rel="stylesheet" href="{!! asset('assets/css/whatsapp/floating-wpp.css') !!}">
  <!-----end--->
   <style>
      .iti.iti--allow-dropdown.iti--separate-dial-code {
         margin-top: 12px;
         width: 100%;
      }

      a.tp-widget-checkoutreviews {
         align-content: center;
         font-size: 30px;
         font-weight: bold;
         text-transform: uppercase;
         margin-right: 80px;
         font-family: "Inter", sans-serif;
      }

      .iti__country-list > li {
         display: inherit;
      }

      .hide{
         display: none;
      }

      #error-msg{color: #EA4335;}
      #valid-msg{color: #34A853;}
   </style>
   @livewireStyles

   @yield('stylesheets')

   <!-- Meta Pixel Code -->
   <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '400315665571328');
      fbq('track', 'PageView');
   </script>
   <noscript>
      <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=400315665571328&ev=PageView&noscript=1"/>
   </noscript>
   <!-- End Meta Pixel Code -->

   <!-- Google Tag Manager -->
   <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
   new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
   j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
   'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
   })(window,document,'script','dataLayer','GTM-W4LL3C9');</script>
   <!-- End Google Tag Manager -->

   <!-- Hotjar Tracking Code for https://www.baroncabot.com -->
   <script>
         (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:2958085,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
         })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
   </script>
   @yield('head-script')
 
</head>

