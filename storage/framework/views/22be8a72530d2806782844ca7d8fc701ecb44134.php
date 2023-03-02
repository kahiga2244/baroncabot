<!DOCTYPE html>
<html lang="en">
   <?php echo $__env->make('partials._head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <body>
      <!-- Loader start -->
      
      <!-- Loader end -->

      <!-- header start -->
      <?php echo $__env->make('partials._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!--  header end -->
      <?php echo $__env->make('partials._messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->yieldContent('content'); ?>

      <!-- footer start -->
      <?php echo $__env->make('partials._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                     <form class="col" id="leadsForm" method="POST" action="<?php echo route('website.inquiry'); ?>">
                        <?php echo csrf_field(); ?>
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
                           <input type="hidden" name="page" value="<?php echo $__env->yieldContent('title'); ?>" class="form-control" required>
                        </div>

                        <div class="col">
                           <div class="form-group">
                              <label for="">Email</label>
                              <input type="email" name="email" class="form-control" debounce-disable="true" required>
                           </div>
                           <input type="hidden" name="page" value="<?php echo $__env->yieldContent('title'); ?>" class="form-control" required>
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
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <?php echo $__env->make('partials._javascripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </body>
</html>
<?php /**PATH /home/stone/Desktop/Projects/PHP/baroncabot/resources/views/layouts/site.blade.php ENDPATH**/ ?>