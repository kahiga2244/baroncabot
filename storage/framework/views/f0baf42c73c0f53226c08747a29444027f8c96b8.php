<?php $__env->startSection('title','404'); ?>
<?php $__env->startSection('content'); ?>
   <!-- section start -->
   <section class="error-section small-section">
      <div class="container">
         <div class="row">
            <div class="col text-center not-found">
               <img src="<?php echo asset('assets/images/404.svg'); ?>" class="img-fluid" alt="">
               <h2>Whoops! something went wrong ?</h2>
               <p class="font-roboto">we are sorry but the page you are looking for doesn't exist or has been removed. please check or search again.</p>
               <div class="btns">
                  <a href="<?php echo url('/'); ?>" class="btn btn-gradient color-4">go to home page</a>
                  <a href="<?php echo url('contact-us'); ?>" class="btn btn-dashed color-4 ms-2">Report problem</a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- section end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/stone/Desktop/Projects/PHP/baroncabot/resources/views/errors/404.blade.php ENDPATH**/ ?>