<?php $__env->startSection('title'); ?><?php echo $property->product_name; ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('stylesheets'); ?>
   <style>
       .select2-container {
            z-index: 9999 !important;
         }
   </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
   <!-- slider section start -->
   <section class="p-0 ratio3_2">
      <div class="single-property-slider">
         <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div>
               <a data-fancybox="light-masonry" href="<?php echo Helpers::backend(); ?>/media/products/<?php echo $image->file_name; ?>">
                  <div>
                     <img src="<?php echo Helpers::backend(); ?>/media/products/<?php echo $image->file_name; ?>" class="bg-img" alt="">
                  </div>
               </a>
            </div>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
   </section>
   <!-- slider section end -->
   <!-- single property header start -->
   <section class="without-top property-main small-section">
      <div class="single-property-section">
         <div class="container">
            <h1 class="text-center mb-3 mt-0"><?php echo $property->product_name; ?></h1>
            <div class="single-title">
               <div class="col ">
                  <h2 class="text-center">
                     <span class="top-info">£<?php echo number_format($property->price); ?></span><br>
                     Starting Price
                  </h2>
               </div>
               <div class="col">
                  <h2 class="text-center">
                     <span class="top-info"> <?php echo $property->unit_choices; ?></span><br>
                     Unit Choices
                  </h2>
               </div>
               <div class="col">
                  <h2 class="text-center">
                     <span class="top-info"><?php echo $property->completion; ?></span><br>
                     Completion
                  </h2>
               </div>
               <div class="col">
                  <h2 class="text-center">
                     <span class="top-info"><?php echo $property->location; ?></span><br>
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
                           <li class="nav-item"><a class="nav-link <?php echo e(Nav::isRoute('project.details')); ?>" href="<?php echo route('project.details',$property->url); ?>">Details</a></li>
                           
                           
                           

                           
                           <?php if($checkCashFlow == 1): ?>
                              <?php if($forecast->rental_growth_year_1 != "" && $forecast->rental_capital_appreciation_10 != ""): ?>
                                 <li class="nav-item">
                                    <a class="nav-link <?php echo e(Nav::isRoute('project.roi')); ?>" data-bs-toggle="modal" data-bs-target="#roi" href="#">Return On Investment</a>
                                 </li>
                              <?php endif; ?>
                           <?php endif; ?>
                        </ul>
                        <div class=" tab-content" id="top-tabContent">
                           <?php if(request()->route()->getName() == 'project.details'): ?>
                              <div class="tab-pane fade show active about page-section">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <?php echo $property->description; ?>

                                    </div>
                                 </div>
                              </div>
                           <?php endif; ?>

                           
                           
                           
                           <?php if($property->map): ?>
                              <div class="tab-pane fade page-section" id="location-map">
                                 <h4 class="content-title">location</h4>
                                 <?php echo $property->map; ?>

                              </div>
                           <?php endif; ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-4">
               <a href="#" class="btn btn-lg  btn-block btn-solid btn-flat color-3 mb-3" data-bs-toggle="modal" data-bs-target="#getMoreInfo"><i class="fa fa-eye"></i> Get More Info</a>
               
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
            <form action="<?php echo route('project.roi.calculate.first'); ?>" method="POST">
               <?php echo csrf_field(); ?>
               <div class="modal-body">
                  <h4 class="text-center mb-3">Before we can give you a predicted ROI we need to know a few things about you</h4>
                  <div class="row mt-3">
                     <div class="col-md-6 mb-3">
                        <label for="">Where do you live ?</label>
                        <select name="country" class="form-control select2" required>
                           <option value="">Choose country</option>
                           <?php $__currentLoopData = $rates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo $rate->id; ?>"><?php echo $rate->country; ?> </b></option>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                     </div>
                     <div class="col-md-6 mb-3">
                        <label for="">Which unit would you like to get ?</label>
                        <select name="unit" class="form-control select2" required>
                           <option value="">Choose</option>
                           <?php $__currentLoopData = $units; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if($unit->status != 'Sold'): ?>
                                 <option value="<?php echo $unit->id; ?>"><?php echo $unit->product_name; ?> | £<?php echo number_format($unit->price); ?> | Size <?php echo $unit->size; ?></option>
                              <?php endif; ?>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                     <input type="hidden" name="url" value="<?php echo $property->url; ?>">
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

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
   <!-- Color-picker js-->
   <script src="<?php echo asset('assets/js/color/single-property2.js'); ?>"></script>
   <script type="text/javascript">
      window.livewire.on('popModal', () => {
         $('#roi').modal('hide');
      });
   </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/stone/Desktop/Projects/PHP/baroncabot/resources/views/pages/project_details2.blade.php ENDPATH**/ ?>