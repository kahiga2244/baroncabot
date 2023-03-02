<?php $__env->startSection('title'); ?><?php echo $page->title; ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?><?php echo $page->meta_description; ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?><?php echo $page->meta_tags; ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('url'); ?><?php echo route('child.page',['products',$page->url]); ?><?php $__env->stopSection(); ?>
<?php if($page->thumbnail != ""): ?><?php $__env->startSection('image'); ?><?php echo Helper::backend(); ?>/public/media/pages/<?php echo $page->thumbnail; ?><?php $__env->stopSection(); ?> <?php else: ?> <?php $__env->startSection('image'); ?><?php echo asset('assets/favicons/android-icon-192x192.png'); ?><?php $__env->stopSection(); ?> <?php endif; ?>
<?php $__env->startSection('article'); ?>
   <meta property="article:publisher" content="https://www.facebook.com/baronandcabot" />
   <meta property="article:section" content="View all" />
   <meta property="article:published_time" content="<?php echo date('Y-m-d H:i:s', strtotime($page->created_at)); ?>" />
   <meta property="article:modified_time" content="<?php echo date('Y-m-d H:i:s', strtotime($page->updated_at)); ?>" />

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<!---------carousel landing page---------->
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
        <link
         href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
         rel="stylesheet"
         integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
         crossorigin="anonymous"
      />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css ">
<!------------->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('stylesheets'); ?>
<style>
#home .btn{
    margin-top: 30px;
    text-align: center;
    display: block;
}
#home a{
    text-decoration: none;
    font-size: 0.9rem;
    padding: 13px 35px;
    background-color: #fff;
    font-weight: 600;
    border-radius: 5px;
}
#home a.blue{
    color: #fff;
    background: rgb(21, 21, 100);
    transition: 0.3s ease;
}
#home a.blue:hover{
    color: rgb(21, 21, 100);
    background: #fff;
}
#home a.yellow{
    color: #fff;
    background: #FDC93B;
    transition: 0.3s ease;
}
#home a.yellow:hover{
    color: rgb(21, 21, 100);
    background: #fff;
}

.popup{
    width: 400px;
    background: #fff;
    border-radius: 6px;
    position: absolute;
    top: 0;
    left: 50%;
    margin-bottom: 15%;
    transform: translate(-50%,-50%) scale(0.1);
    text-align: center;
    padding: 0 30px 30px;
    color: #333;
    visibility: hidden;
    transition: transform 0.4s, top 0.4s;
}
.open-popup{
    visibility: visible;
    top: 30%;
    margin-bottom: 30%;
    transform: translate(-50%,-50%) scale(1);
}
.popup img{
    width: 100px;
    margin-left: 30px;
    margin-top: -30px;
    border-radius: 50%;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}
.popup h2{
    font-size: 38px;
    font-weight: 500;
    margin: 30px 0 10px;
}
.popup button{
    width: 100%;
    margin-top: 50px;
    padding: 10px 0;
    background: #002D62;
    color: #fff;
    border: 0;
    outline: none;
    font-size: 18px;
    border-radius: 4px;
    cursor: pointer;
    box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);

}
form input{
   border: 0;
   outline: none;
   padding: 10px 20px;
   height: 70px;
   width: 400px;
   font-size: 16px;
}
form button{
   background:  rgb(21, 21, 100);
   border: none;
   outline: none;
   height: 70px;
   width: 100px;
   cursor: pointer;

}

</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="breadcrumb-section p-0">
  <img src="<?php echo asset('assets/images/Campus.jpg'); ?>" class="bg-img img-fluid" alt="">
  <div class="container">
     <div class="breadcrumb-content">
        <div id="home">
          <h1 class="text-white">Baron & Cabot University</h1>
           <div class="btn">
             <a class="blue" href="#" onclick="openPopup()">Learn More</a>
              <a class="yellow" href="https://www.youtube.com/@baroncabot8108">Visit Courses</a>
              <div class="popup" id="popup">
               
               <h2>Thank You!</h2>
               <p>Consider signing up for more updates!</p>
               <button type="button" onclick="closePopup()" href="introduction">OK</button>
           </div>
           </div>
        </div>
     </div>
  </div>
</section>
<!------------------programs--------->
<!------------------intro programs-------->
<section class="service-section">
  <div class="container-fluid">
    <div class="container" id="introduction">
      <div class="row">
        <div class="col-lg-5">
        <h3><span style="color: rgb(21, 21, 100)">&#x7C;</span>Our Programs</h3>
        </div>
      <div class="col-lg-7">
        <p>Online courses for lifelong learning and professional development from wherever you are in the world. Learn from world-leading faculty at
          The London School of Economics and Political Science. Understand today, shape the future.</p>
      </div>
    </div>
  </div>
</div>
  </section>
<!---------------courses------------>
<section class="service-section">
  <div class="container-fluid">
   <div class="row property-service column-space">
    <div class="col-xl-3 col-md-6 wow fadeInUp">
     <div class="service-box text-center" >

       <img src="https://via.placeholder.com/300x230">

      <h3 class="mt-3"><a href="#">How much do I need to invest in UK Property?</a></h3>
      <p>One make creepeth, man bearing their firmament wont great heaven.</p>
      <div class="property-btn d-flex">
        <a href="https://www.youtube.com/watch?v=xgC5yviFoxs&t=10s"><button type="button" class="btn btn-dashed btn-pill  btn-block color-2 mt-3">Watch video</button></a>
      </div>
      </div>
     </div>
                       <div class="col-xl-3 col-md-6 wow fadeInUp">
                        <div class="service-box text-center" >

                            
                            <img src="https://via.placeholder.com/300x230">

                           <h3 class="mt-3"><a href="#">How much do I need to invest in UK Property?</a></h3>
                           <p>One make creepeth, man bearing their firmament wont great heaven.</p>
                           <div class="property-btn d-flex">

                            <a href="https://www.youtube.com/watch?v=xgC5yviFoxs&t=10s"><button type="button" class="btn btn-dashed btn-pill  btn-block color-2 mt-3">Watch video</button></a>
                         </div>
                        </div>
                     </div>
                       <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                          <div class="service-box text-center">
                              <img src="https://via.placeholder.com/300x230">

                             <h3 class="mt-3"><a href="#">What is the average property price in the UK?</a></h3>
                             <p>One make creepeth, man bearing their firmament wont great heaven.</p>
                             <div class="property-btn d-flex">

                              <button type="button" class="btn btn-dashed btn-pill  btn-block color-2 mt-3">Watch video</button>
                           </div>
                          </div>
                       </div>
                       <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                          <div class="service-box text-center">
                              <img src="https://via.placeholder.com/300x220">
                             <h3 class="mt-3"><a href="#">Do I get a VISA/ UK residency with UK purchase?</a></h3>
                             <p>One make creepeth, man bearing their firmament wont great heaven</p>
                             <div class="property-btn d-flex">

                              <button type="button" class="btn btn-dashed btn-pill  btn-block color-2 mt-3">Watch video</button>
                           </div>
                          </div>
                       </div>
     </div>
  </div>
</section>
<!---------------about------------->
<section class="service-section">
  <div class="container-fluid">
    <div class="container" id="introduction">
      <div class="row">
        <div class="col-lg-5">
        <h3><span style="color: rgb(21, 21, 100)">&#x7C;</span>About B&C University</h3>
        <div class="btn" style="background: #002D62;">
          <a class="blue" href="#"style="color:#FFFFFF;">Learn More</a>
        </div>
        </div>
      <div class="col-lg-7">
        <p> B&C University Online makes our world-leading teaching and research accessible to a global audience. We provide a comprehensive portfolio of online programmes to equip you and your organisation with the knowledge and skills to advance in an ever-changing world.</p>
      </div>
    </div>
  </div>
</div>
  </section>
<!-------------As seen on--------------->
<section class="small-section bg-light-blue arrow-gradient">
  <div class="container">
     <div class="row">
        <div class="col">
           <div class="title-2 text-white mb-5">
              <h2 class="text-dark">Articles</h2>
           </div>
           <div class="slide-3 brand-slider">
              
              <div>
                 <a href="https://baroncabot.com/blog/baron-cabot-in-bbc/details" target="_blank" class="logo-box">
                    <img src="<?php echo asset('assets/images/BBC_News.svg.svg'); ?>" alt="" class="img-fluid" style="width:40%;">
                 </a>
              </div>
              <div>
                 <a href="https://venturesafrica.com/apostories/baron-cabot-expands-investment-opportunities-in-africa/" target="_blank" class="logo-box">
                    <img src="<?php echo asset('assets/images/Screenshot_13.png'); ?>" alt="" class="img-fluid">
                 </a>
              </div>
              <div>
                 <a href="https://baroncabot.com/blog/baron-cabot-expands-investment-opportunities-in-africa/details" target="_blank" class="logo-box">
                    <img src="<?php echo asset('assets/images/200px-CNBC_logo.svg.png'); ?>" alt="" class="img-fluid" style="width:50%;">
                 </a>
              </div>
              <div>
                 <a href="https://www.forbesafrica.com/brand-voice/2022/04/08/more-opportunities-for-africans-to-invest-in-property-in-the-uk/" target="_blank" class="logo-box">
                    <img src="<?php echo asset('assets/images/Forbes_logo.png'); ?>" alt="" class="img-fluid">
                 </a>
              </div>
              <div>
                 <a href="" class="logo-box" target="_blank">
                    
                    <svg class="cnn-badge-icon" style="outline:0;width:40%" viewBox="0 0 240 240" fill="#CC0000" xmlns="https://www.w3.org/2000/svg" aria-hidden="true"><rect x="0" y="0" width="100%" height="100%" fill="#fff"></rect><path d="M.31-.07v240h240V-.07ZM86.54,135.29V92.51c0-16.1,20.81-23.83,31.82-5.12.8,1.35,18.14,31.22,18.14,31.22V92.51c0-16.1,20.8-23.83,31.81-5.12.8,1.35,18.14,31.22,18.14,31.22V76.79h10.38V147a2.11,2.11,0,0,1-1.51,2.14c-1.1.3-2.26-.38-3.11-1.82-.17-.28-9-15.46-17.48-30.13L159.17,90.4c-2.18-3.7-5.43-4.35-7.74-3.72a6.23,6.23,0,0,0-4.55,6.13V147a2.12,2.12,0,0,1-1.51,2.14c-1.11.3-2.27-.38-3.11-1.82-.15-.25-8.34-14.36-16.25-28-10.08-17.38-16.7-28.78-16.8-28.95-2.18-3.71-5.44-4.35-7.77-3.72a6.24,6.24,0,0,0-4.56,6.13v53.05a2.9,2.9,0,0,1-2.72,2.71H67.23a28.64,28.64,0,0,1,0-57.28h14v10.36H67.35a18.28,18.28,0,1,0,0,36.56H83.68A2.84,2.84,0,0,0,86.54,135.29Zm124.77,12.05c0,16.1-20.81,23.83-31.82,5.13-.79-1.35-18.14-31.23-18.14-31.23v26.1c0,16.1-20.8,23.83-31.81,5.13-.8-1.35-18.14-31.23-18.14-31.23v24.61c0,11.17-6.63,17.22-17,17.22H67.25a43.14,43.14,0,0,1,0-86.28h14V87.15h-14a32.78,32.78,0,1,0,0,65.56H94.16a7,7,0,0,0,6.86-6.85V92.81a2.1,2.1,0,0,1,1.51-2.13c1.1-.3,2.26.38,3.11,1.82l16.79,28.93c9.76,16.83,16.17,27.88,16.25,28,2.19,3.7,5.45,4.35,7.78,3.71A6.22,6.22,0,0,0,151,147V92.82a2.11,2.11,0,0,1,1.49-2.14c1.09-.3,2.24.38,3.08,1.82l15.56,26.81,17.49,30.15c1.71,2.9,4.09,3.93,6.16,3.93a6,6,0,0,0,1.61-.22A6.23,6.23,0,0,0,201,147V76.79h10.34Z" transform="translate(-0.31 0.07)"></path></svg>
                 </a>
              </div>
              <div>
                 <a href="https://www.youtube.com/watch?v=NaBGAVin3QQ" target="_blank" class="logo-box">
                    <img src="<?php echo asset('assets/images/Screenshot_14.png'); ?>" alt="" class="img-fluid">
                 </a>
              </div>

              <div>
                 <a href="https://youtu.be/-KkV39Fcop8?t=121" target="_blank" class="logo-box">
                    <img src="<?php echo asset('assets/images/citizendigital.png'); ?>" alt="" class="img-fluid" style="width:70%;">
                 </a>
              </div>

           </div>
        </div>
     </div>
  </div>
</section>
<!---------------end-------------------->

<!-----------part 2------------->

                              
                              
                              
                             
<!---------------end------------>
<!------------contact us-------->
<section>
  <div>
    <center>
      <a href="#" data-bs-toggle="modal" data-bs-target="#getMoreInfo" class="btn btn-solid color-3 btn-flat mt-5 btn-lg"><i class="fal fa-headset"></i> Contact us</a>
    </center>
  </div>
</section>


      <!---------------end-------------------->
<!------------part 3-------------->
<section class="service-section">
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <h2 class="text-center">Sign up to the B&C University Online <br>newsletter</h2>
        <p class="text-center">
          Receive updates about new courses, faculty insights, upcoming<br> events and more
        </p>
        <form class="text-center" name="">
          <input name="email" type="email" placeholder="Email" required>
          <button type="submit"><img src="<?php echo asset('assets/images/send-icon.png'); ?>" width="30px"></button>
         </form>
         <span class="text-center">Thank You For Subscribing!</span>
      </div>
    </div>
  </section>
<!-----------------follow------------->
<section class="service-section">
   <div class="container-fluid">
     <div class="container">
       <div class="row" style="background:#fff;">
         <div class="col-lg-3">
            <h3><span style="color: rgb(21, 21, 100)">&#x7C;</span>Programme type</h3><hr>
            <div class="btn-group">
               <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Online career
               </button>
               <div class="dropdown-menu">
                 <a class="dropdown-item" href="#">Action</a>
                 <a class="dropdown-item" href="#">Another action</a>
                 <a class="dropdown-item" href="#">Something else here</a>
               </div>
             </div>
         </div>
         <div class="col-lg-3">
            <h3><span style="color: rgb(21, 21, 100)">&#x7C;</span>Subject area</h3><hr>
            <div class="btn-group">
               <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Search
               </button>
               <div class="dropdown-menu">
                 <a class="dropdown-item" href="#">Action</a>
                 <a class="dropdown-item" href="#">Another action</a>
                 <a class="dropdown-item" href="#">Something else here</a>
               </div>
             </div>
         </div>
         <div class="col-lg-3">
            <h3><span style="color: rgb(21, 21, 100)">&#x7C;</span>Programme type</h3><hr>
            <div class="btn-group">
               <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Search
               </button>
               <div class="dropdown-menu">
                 <a class="dropdown-item" href="#">Action</a>
                 <a class="dropdown-item" href="#">Another action</a>
                 <a class="dropdown-item" href="#">Something else here</a>
               </div>
             </div>
         </div>
         <div class="col-lg-3" >
            <h3><span style="color: rgb(21, 21, 100)">&#x7C;</span>Search</h3><hr>
             <div class="btn-group" style="display: flex; justify-content: center;">
               <img  src="<?php echo asset('assets/images/Vectorsearch.png'); ?>" width="50px">
             </div>
         </div>
       </div>
     </div>
   </div>
</section>
<!------------get in touch------------>

<!-- banner section end -->
<section class="property-section">
  <!-- TrustBox widget - Starter -->
  <div class="trustpilot-widget" data-locale="en-GB" data-template-id="5613c9cde69ddc09340c6beb" data-businessunit-id="5f746adaaccd9d0001fcbe15" data-style-height="100%" data-style-width="100%" data-theme="light">
     <a href="https://uk.trustpilot.com/review/baroncabot.com" target="_blank" rel="noopener">Trustpilot</a>
  </div>
  <!-- End TrustBox widget -->
</section>
<!--------------------end----------->
<!---------------------part 4------------->


   <!-------------------------->
   <!------------------Courses------->

   <?php $__env->stopSection(); ?>
   <?php $__env->startSection('scripts'); ?>
   <script>
      let popup = document.getElementById("popup");

      function openPopup(){
          popup.classList.add("open-popup");
      }
      function closePopup(){
          popup.classList.remove("open-popup");
      }
  </script>
  <script>
    const scriptURL = '<SCRIPT URL>'
    const form = document.forms['submit-to-google-sheet']

    form.addEventListener('submit', e => {
      e.preventDefault()
      fetch(scriptURL, { method: 'POST', body: new FormData(form)})
        .then(response => console.log('Success!', response))
        .catch(error => console.error('Error!', error.message))
    })
  </script>
   <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/stone/Desktop/Projects/PHP/baroncabot/resources/views/pages/baronuni.blade.php ENDPATH**/ ?>