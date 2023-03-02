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
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('stylesheets'); ?>
<style>

.card .card-title {
  font-weight: 700;
  font-size: 1.5em;
}
.card .btn {
  border-radius: 2em;
  background-color: #002748;
  color: #ffffff;
  padding: 0.5em 1.5em;
}
.card .btn:hover {
  background-color:  #002748;
  color: #ffffff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}
</style>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>



   <!-- breadcrumb start -->
   <section class="breadcrumb-section p-0" style="min-height: 450px;">
    <img src="<?php echo asset('assets/images/seminar.png'); ?>" class="bg-img img-fluid" alt="">
    <div class="container" style="margin-top: 5%">
       <div class="breadcrumb-content">
        <div class="row">
          <div class="col justify-content-center">
            <h2>Thinking of Investing in the UK property?</h2>

         <p style="color: white;">
          Meet the Experts On 18th February 2023 at Eko Hotel in Lagos starting at 10 AM who will share their insights and strategies for success.
         </p>

         <h4 style="color: white;">Register now to secure your spot and be a part of this not-to-be-missed event.</h4>

          </div>
         

       

          </div>
        </div>
       </div>
      </div>
    </div>
 </section>
 <br>
 <!---------------------register------------->
 <section class="reservation"  style="background-color: #002748">
    <div class="container">
      <div class="row">
        <div class="col d-flex justify-content-center">
          <div class="card text-center" style="width: 25rem;">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-7">
                  <h6>EARLY BIRD REGISTRATION</h6>
                </div>

                <div class="col-sm-5">
                  <h4 style="color:#FB9B0A;">FREE</h4>
                </div>
              </div>
              <div class="row">
                <div class="col-sm">
                <img src="<?php echo asset('assets/svg/clock.svg'); ?>" class="" alt="">
                </div>
                <div class="col-md">10:AM</div>
              </div>
              <br>
              <div class="row">
                <div class="col-sm">
                <img src="<?php echo asset('assets/svg/calendar-check.svg'); ?>" class="" alt="">
                </div>
                <div class="col-md">18.02.2023</div>
              </div>
              <br>
              <div class="row">
                <div class="col-sm">
                <img src="<?php echo asset('assets/svg/geo-alt.svg'); ?>" class="" alt="">
                </div>
                <div class="col-md"><h6>EKO HOTEL LAGOS</h6> </div>
              </div>
              <br>
              <div class="row" style="margin-top: auto;">
                <a href="#register" class="btn btn ">REGISTER NOW</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 </section>
<!-------------intro------------>
<section class="bg-light">
  <div class="container">
     <div class="row">
      <h2 class="text-center mb-5">Our Expert Speakers</h2>
        <div class="col-6">
          <div class="card">
            <img src="<?php echo asset('assets/images/6efad6257b4c14fb.jpg'); ?>" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title"style="color: #FB9B0A">Mark Pearson</h5>
              <h7> </h7>
              <p class="card-text">Founder and Managing  Partner, BARON & CABOT</p>
            </div>
          </div>
        </div>
        <div class="col-6">
            <div class="card">
              <img src="<?php echo asset('assets/images/James2.png'); ?>" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title"style="color: #FB9B0A">James Walsh</h5>
                <p class="card-text">Global Head of Property,BARON & CABOT</p>
              </div>
            </div>
          </div>

        </div>
        <br>
        <div class="row">
          <p>Baron & Cabot, an international property investment company which launched a base in Nigeria aims to help investors in Nigeria venture in the UK in a simple and effective way.</p>
          <p>This Saturday ,come ready to get the insights and knowledge of investing from one of the best property investors in the world.</p>
        </div>
     </div>
  </div>
</section>
<section class="small-section bg-light-blue arrow-gradient">
  <div class="container">
     <div class="row">
        <div class="col">
           <div class="title-2 text-white mb-5">
              <h2 class="text-dark">As seen on</h2>
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

<section class="property-section">
  <!-- TrustBox widget - Starter -->
  <div class="trustpilot-widget" data-locale="en-GB" data-template-id="5613c9cde69ddc09340c6beb" data-businessunit-id="5f746adaaccd9d0001fcbe15" data-style-height="100%" data-style-width="100%" data-theme="light">
     <a href="https://uk.trustpilot.com/review/baroncabot.com" target="_blank" rel="noopener">Trustpilot</a>
  </div>
  <!-- End TrustBox widget -->
</section>
<!------------end--------------->

<section class="small-section get-in-touch"  style="
background-color: #002748;" id="register">
  <div class="container py-3">
      <div class="row">
          <div class="col-12 col-sm-8 col-md-6 mx-auto">
              <div class="card">
                  <div class="card-body">
                      <div class="card-title">
                        <h3  style="color: #FB9B0A; text-align: center;">REGISTER TO RESERVE A SPOT</h3>
                          <h6 style="text-align: center;">Location:Lagos, Nigeria</h6>
                      </div>
                      <hr>
                      <?php if(count($errors) > 0): ?>
                            <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <ul>
                              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <li><?php echo e($error); ?></li>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            </div>
                          <?php endif; ?>
                          <?php if($message = Session::get('success')): ?>
                          <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                                  <strong><?php echo e($message); ?></strong>
                          </div>
                      <?php endif; ?>
                      <form action="<?php echo e(url ('send-email')); ?>" method="post" novalidate="novalidate">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group has-success">
                            <label for="cc-name" class="control-label">First Name</label>
                            <input name="name" type="text" class="form-control" required>
                            <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                        </div>
                        <div class="form-group has-success">
                            <label for="cc-name" class="control-label">Email Address</label>
                            <input name="email" type="email" class="form-control" required>
                            <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Phone Number</label>
                            <input type="tel" name="phone" id="phone" class="form-control" required>
                            <span id="valid-msg" class="hide">✓ Valid</span>
                            <span id="error-msg" class="hide"></span>
                            <input type="hidden" name="page" value="<?php echo $__env->yieldContent('title'); ?>" class="form-control" required>
                        </div>
                          
                          <div>
                              <center><button type="submit" class="btn btn-lg btn-success btn-block" id="submitForm"> <i class="fa fa-lock fa-lg"></i>&nbsp; REGISTER NOW</button></center>
                              <center><small class="text-danger hide" id="phone_valid">Your Phone Number is invalid</small></center>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!----------------------end------>
<!------------agenda---------->
<section class="bg-light">
  <div class="container">
     <div class="row">
        <div class="col-lg-4 text-center"  style="background-color:#002748">
                <h1 style="color:aliceblue;">What will be <br>the Agenda?</h1>
                <p style="color: white;">As a leading property investment company in the UK, we are dedicated to helping our clients make informed investment decisions and maximize their returns.</p>
                <div class="center" style="  display: flex;
                justify-content: center;
                align-items: center;margin-bottom: 5%;">
                  <a href="#register" class="btn btn btn-light btn-sm">REGISTER NOW</a>
                </div>
        </div>
        <div class="col-lg-8">
          <div class="row">
            <div class="col-sm-6" >
              <div class="card text-center">
                <div class="card-body">
                  <img src="<?php echo asset('assets/images/arrow_up_wtih_chart.png'); ?>" class="" alt="" style="width: 73px;">
                  <p class="card-text">Getting a mortgage from a UK bank </p>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card text-center">
                <div class="card-body">
                  <img src="<?php echo asset('assets/images/due2.png'); ?>" class="" alt="" style="width: 115px;">
                  <p class="card-text">
                    Best places to invest in the UK
                    </p>
                </div>
              </div>
            </div>
            &nbsp;
            <div></div>
            <div class="col d-flex justify-content-center">
              <div class="card  text-center" >
                <div class="card-body">
                  <img src="<?php echo asset('assets/images/Checklist.png'); ?>" class="" alt="" style="width: 75px;">
                  <p class="card-text">How to protect yourself using UK solicitors</p>

              </div>
            </div>
          </div>
          </div>
        </div>
     </div>
  </div>
</section>
<!------------end------------->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/stone/Desktop/Projects/PHP/baroncabot/resources/views/pages/sign-up.blade.php ENDPATH**/ ?>