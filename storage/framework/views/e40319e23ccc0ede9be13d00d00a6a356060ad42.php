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
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" />
<!------------->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
   <!-- breadcrumb start -->
   <section class="breadcrumb-section p-0">
      <img src="<?php echo asset('assets/images/5.jpg'); ?>" class="bg-img img-fluid" alt="">
      <div class="container">
         <div class="breadcrumb-content">
            <div>
               <h1 class="text-white">Boulevard  Birmingham</h1>
               <nav aria-label="breadcrumb" class="theme-breadcrumb">
                  <!-- <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="<?php echo url('/'); ?>">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Franchise</li>
                  </ol> -->
               </nav>
            </div>
         </div>
      </div>
   </section>
   <!-- breadcrumb end -->


<!---------Coming Soon-------->
<section class="provide-service bg-dark">
   <div class="container">
         <div class="row">
            <h2 style="text-align: center; color: #EAC117;">Coming Soon</h2>
            <div class="col-lg-6">
            <div class="row">
               <h3 style="text-align: center;color: white;">BOULEVARD, <br>
                     BRISTOL STREET-<br>
                     BIRMINGHAM</h2>
                </div>
                &nbsp;
                <div class="row">
              <p style="color: white;">Due to its prime location, Boulevard is set to be a flagship project for the developer,
                in the Southside district with easy access to the £1.9 billion Smithfield Market plan redevelopment and Birmingham Curzon Street HS2 station. </p>
              </div>
                </div>
            <div class="col-lg-6">
              <img src="<?php echo asset('assets/images/Baron-and-cabot-hero-02.jpg'); ?>" class="img-fluid" alt="">
            
            </div>
            &nbsp;
          <!--------------carousel----------->
          <div class="col-12 m-auto">
                <div class="owl-carousel owl-theme">
                    <div class="item mb-4">
                        <div class="card border-0 shadow">
                          <img src="<?php echo asset('assets/images/banner-5.jpg'); ?>" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="item">
                        <div class="card border-0 shadow">
                          <img src="<?php echo asset('assets/images/banner-5.jpg'); ?>" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                          <img src="<?php echo asset('assets/images/banner-5.jpg'); ?>" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                          <img src="<?php echo asset('assets/images/banner-5.jpg'); ?>" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                          <img src="<?php echo asset('assets/images/banner-5.jpg'); ?>" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                          <img src="<?php echo asset('assets/images/banner-5.jpg'); ?>" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
   </div>
</section>
<!-------------------->
<!------------infrastructure--->
<section class="provide-service bg-light">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 ">
            <div class="mapouter"><div class="gmap_canvas"><iframe width="450" height="350" id="gmap_canvas" src="https://maps.google.com/maps?q=london&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2yu.co"></a><br><style>.mapouter{position:relative;height:350px;width:450px;}</style><a href="https://embedgooglemap.2yu.co"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:510px;width:770px;}</style></div></div>
            </div>
            <div class="col-lg-6">
               <div class="provide-details">
                <!-- <h1>Opportunities</h1> -->
                    <p>Birmingham is strategically located for motorway travel with the M5, M6, M40, and M42 all interconnecting in and around the city. </p>
                    <p>Three main rail stations serve Birmingham, New Street, Snow Hill and Moor Street, together with providing a comprehensive network linking long-distance destinations across the UK.</p>
               </div>
            </div>
            &nbsp;
            <div class="center" style="text-align: center;"><p>Foreign Direct Investment to Birmingham reached £1.1 billion in 2018
Birmingham City Centre £500+ per sqft by 2022 according to both Jones Lang LaSalle and Knight Frank
Rental value growth +17% and capital growth +15% by 2024</p>
</div>
         </div>
         <center><a href="#" data-bs-toggle="modal" data-bs-target="#getMoreInfo" class="btn btn-solid color-3 btn-flat mt-5 btn-lg"><i class="fa fa-question-circle"></i>&nbsp; Inquire</a></center>
      </div>
   </section>
   <!---------------end-->
   <!-- video modal end -->
   <!------------end---->
   <!--------------form--------->
   <section class="small-section get-in-touch">
    <div class="container">
       <div class="row">
          <div class="center">
             <div class="log-in">
                <div class="mb-4 text-start text-center">
                   <h2>Global Launch 2023</h2>
                   <h6>JOIN THE WAITING LIST - Location: Birmingham, UK</h6>
                </div>
                <form class="row gx-3" action="<?php echo route('website.inquiry'); ?>" method="POST" >
                   <?php echo csrf_field(); ?>

                      <div class="form-group">
                         <input type="text" class="form-control" name="first_name" placeholder="Full Name" required="">
                      </div>

                      <div class="form-group">
                         <input type="email" class="form-control" name="email" placeholder="email address" required="">
                      </div>


                      <div class="form-group">
                         <input type="tel" name="phone_number" id="phone2" class="form-control" required>
                         <span id="valid-msg2" class="hide">✓ Valid</span>
                         <span id="error-msg2" class="hide"></span>
                      </div>

                   <div class="form-group col-md-12">
                      <textarea class="form-control" placeholder="Write here something" rows="6" name="inquiry"></textarea>
                      <input type="hidden" name="page" value="Contact us" class="form-control" required>
                   </div>
                   <?php echo NoCaptcha::renderJs(); ?>

                   <?php echo NoCaptcha::display(); ?>

                   <?php $__errorArgs = ['g-recaptcha-response'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?></div>
                   <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                   <div class="col-md-12 submit-btn">
                      <center><button type="submit" class="btn btn-warning hide" id="submitForm2">Submit Information</button></center>
                      <center><small class="text-danger hide" id="phone_valid2">Your Phone Number is invalid</small></center>
                   </div>
                   <p>By submitting your details via this online form you agree to be contacted via email/phone/SMS by Select Property Group in relation to its property investment brands. We do not share your personal details with third parties. To view our full Privacy Policy click here.</p>
                </form>
                <div class="center" style="  display: flex;
                justify-content: center;
                align-items: center;">
                  <button type="button" class="btn btn-primary btn-lg">Register Details</button>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
<!-------------------------end--->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 15,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/stone/Desktop/Projects/PHP/baroncabot/resources/views/pages/landing.blade.php ENDPATH**/ ?>