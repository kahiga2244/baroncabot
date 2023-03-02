<?php $__env->startSection('title'); ?>Facebook <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>Facebook Leads Page <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?>Facebook Leads Page <?php $__env->stopSection(); ?>
<?php $__env->startSection('url'); ?><?php echo url('/'); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('image'); ?><?php echo asset('assets/favicons/android-icon-192x192.png'); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('stylesheets'); ?>
   <style>
      .iti.iti--allow-dropdown {
         width: 260px;
      }
      form label {
         color: #586167;
         float: left;
      }
      nav{
         display: none;
      }
      ul.info-list li {
         display: block;
         font-size: 15px;
      }
   </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
   <!-- subscribe section start -->
   <section class="subscribe-bg-2 parallax-image" style="background-image: url(<?php echo asset('assets/images/rp0IWe.jpg'); ?>);">
      <div class="container mt-5">
         <div class="row mb-5 mt-5">
            <div class="col mb-3  <?php if($agent->isMobile()): ?> order-2 <?php endif; ?>">
               <div class="video-details text-left" style="text-align: left !important">
                  <ul class="info-list">
                     <li><i class="fal fa-rocket-launch"></i> Find out why UK is voted the <b>"Most transparent property market in the world"</b></li>
                     <li><i class="fal fa-rocket-launch"></i> Learn how YOU will get a UK mortgage (no matter where you live),</li>
                     <li><i class="fal fa-rocket-launch"></i> Understand what regulation protects you,</li>
                     <li><i class="fal fa-rocket-launch"></i> No need for you to have any connection to England,</li>
                     <li><i class="fal fa-rocket-launch"></i> Get returns up to 14% per annum,</li>
                     <li><i class="fal fa-rocket-launch"></i> All of your costs covered and income in pounds,</li>
                     <li><i class="fal fa-rocket-launch"></i> Currency inflation beating - protect your future TODAY.</li>
                  </ul>
                  <h5 class="text-center mt-4"><b>As Seen On</b></h5>
                  <div class="row mt-4">
                     <div class="col-md-4 mb-2 col-6">
                        <a href="https://baroncabot.com/blog/more-opportunities-for-africans-to-invest-in-property-in-the-uk/details" target="_blank">
                           <img src="<?php echo asset('assets/images/forbesmobile.jpg'); ?>" class="img-fluid">
                        </a>
                     </div>
                     <div class="col-md-4 mb-2 col-6">
                        <a href="https://baroncabot.com/blog/baron-cabot-expands-investment-opportunities-in-africa-J6Ji/details" target="_blank">
                           <img src="<?php echo asset('assets/images/bbcmobile.jpg'); ?>" class="img-fluid">
                        </a>
                     </div>
                     <div class="col-md-4 mb-2 col-6">
                        <a href="https://baroncabot.com/blog/baron-cabot-expands-investment-opportunities-in-africa/details" target="_blank">
                           <img src="<?php echo asset('assets/images/cnbcmobile.jpg'); ?>" class="img-fluid">
                        </a>
                     </div>
                     <div class="col-md-4 mb-2 col-6">
                        <a href="https://baroncabot.com/blog/news/category" target="_blank">
                           <img src="<?php echo asset('assets/images/cnnmobile.jpg'); ?>" class="img-fluid">
                        </a>
                     </div>
                     <div class="col-md-4 mb-2 col-6">
                        <a href="https://baroncabot.com/blog/news/category" target="_blank">
                           <img src="<?php echo asset('assets/images/ktnmobile.jpg'); ?>" class="img-fluid">
                        </a>
                     </div>
                     <div class="col-md-4 mb-2 col-6">
                        <a href="https://baroncabot.com/blog/news/category" target="_blank">
                           <img src="<?php echo asset('assets/images/venturesmobile.jpg'); ?>" class="img-fluid">
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col mb-3">
               <div class="video-details" <?php if(!$agent->isMobile()): ?>style="height: 725px"<?php endif; ?>>
                  <h2 class="mb-5">Fill In Your Details</h2>
                  <form class="col" method="POST" action="<?php echo route('website.inquiry'); ?>">
                     <?php echo csrf_field(); ?>
                     <div class="row">
                        <div class="col-md-6">
                           <label class="mt-3 text-left">First Name</label>
                           <input type="text" name="first_name" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                           <label class="mt-3 text-left">Last Name</label>
                           <input type="text" name="last_name" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                           <label class="mt-3 text-left">Enter Phone Number</label><br>
                           <input type="tel" name="phone_number" id="phone" class="form-control" required>
                           <span id="valid-msg" class="hide">✓ Valid</span>
                           <span id="error-msg" class="hide"></span>
                           <input type="hidden" name="page" value="<?php echo $__env->yieldContent('title'); ?>" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                           <label class="mt-3 text-left">Email</label>
                           <input type="email" name="email" class="form-control" required>
                        </div>
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
                     <div class="col-12 mt-3">
                        <center><button type="submit" class="btn btn-warning hide" id="submitForm">Submit Information</button></center>
                        <center><small class="text-danger hide" id="phone_valid">Your Phone Number is invalid</small></center>
                     </div>
                     <br><br>
                     <center>
                        <a href="https://baroncabot.com/africa" target="_blank" class="mt-5">Learn more on how to invest in UK Property Market</a>
                     </center>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- subscribe section end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/stone/Desktop/Projects/PHP/baroncabot/resources/views/pages/facebook.blade.php ENDPATH**/ ?>