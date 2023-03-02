<section class="property-section">
   <div class="container">
      <div class="row ratio_63">
         <div class="col-xl-3 col-lg-4 mb-3">
            <div class="left-sidebar">
               <div class="filter-cards">
                  <div class="advance-card">
                     <div class="back-btn d-lg-none d-block">
                           Back
                     </div>
                     <h5 class="mb-0 advance-title">Advance search </h5>
                  </div>
                  <div class="advance-card">
                     <h6>Property Location</h6>
                     <div class="row gx-2">
                        <div class="col-12">
                           <div class="form-group">
                              <select wire:model="location" class="form-control">
                                 <option value="">All Properties</option>
                                 <option value="Birmingham">Birmingham</option>
                                 <option value="Manchester">Manchester</option>
                                 <option value="Leeds">Leeds</option>
                                 <option value="Liverpool">Liverpool</option>
                                 <option value="Cambridge">Cambridge</option>
                                 <option value="Coventry">Coventry</option>
                                 <option value="Nottingham">Nottingham</option>
                                 <option value="London">London</option>
                                 <option value="Bracknell">Bracknell</option>
                              </select>
                           </div>
                        </div>
                     </div>
                  </div>
                  
               </div>
            </div>
            <?php if($agent->isMobile()): ?>
               <div class="form-group">
                  <h2>Property Location</h2>
                  <select wire:model="location" class="form-control">
                     <option value="">All Properties</option>
                     <option value="Birmingham">Birmingham</option>
                     <option value="Manchester">Manchester</option>
                     <option value="Leeds">Leeds</option>
                     <option value="Liverpool">Liverpool</option>
                     <option value="Cambridge">Cambridge</option>
                     <option value="Coventry">Coventry</option>
                     <option value="Nottingham">Nottingham</option>
                     <option value="London">London</option>
                     <option value="Bracknell">Bracknell</option>
                  </select>
               </div>
            <?php endif; ?>
         </div>
         <div class="col-xl-9 col-lg-8 property-grid-3">
            <div class="filter-panel">
               <div class="top-panel">
                  <div>
                     <h2>Properties Listing | <i class="fal fa-map-marker-alt"></i> <?php echo $this->location; ?></h2>
                  </div>
               </div>
            </div>
            <div class="property-wrapper-grid">
               <div class="property-2 row column-sm zoom-gallery property-label property-grid">
                  <?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <div class="col-xl-4 col-md-6 wow fadeInUp">
                        <div class="property-box">
                           <div class="property-image">
                              <div class="property-slider">
                                 <a href="<?php echo route('project.details',$property->url); ?>">
                                    <?php
                                       $image = Property::cover_image($property->id)->getData();
                                    ?>
                                    <?php if($image->check == 1): ?>
                                       <img src="<?php echo Helpers::backend(); ?>/media/products/<?php echo $image->cover->file_name; ?>" class="bg-img" alt="" style="height: 256px">
                                    <?php else: ?>
                                       <img src="" alt="">
                                    <?php endif; ?>
                                 </a>
                              </div>
                              
                           </div>
                           <div class="property-details" style="min-height: 251px;">
                              <span class="font-roboto"><?php echo $property->location; ?></span>
                              <a href="<?php echo route('project.details',$property->url); ?>">
                                 <h3><?php echo $property->product_name; ?></h3>
                              </a>
                              <h6>£<?php echo number_format($property->price); ?>*</h6>
                              <h5><b>Completion :</b> <span class="text-primary"><?php echo $property->completion; ?></span></h5>
                              
                              
                              <div class="property-btn d-flex">
                                 
                                 <button type="button"  onclick="document.location='<?php echo route('project.details',$property->url); ?>'" class="btn btn-dashed btn-pill  btn-block color-2 mt-3">Details</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </div>
            </div>
            
         </div>
      </div>
   </div>
</section>
<?php /**PATH /home/stone/Desktop/Projects/PHP/baroncabot/resources/views/livewire/projects.blade.php ENDPATH**/ ?>