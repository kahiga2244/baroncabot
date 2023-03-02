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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
   <!-- breadcrumb start -->
   <section class="breadcrumb-section p-0">
      <img src="<?php echo asset('assets/images/inner-background.jpg'); ?>" class="bg-img img-fluid" alt="">
      <div class="container">
         <div class="breadcrumb-content">
            <div>
               <h1 class="text-white">All Projects</h1>
               <nav aria-label="breadcrumb" class="theme-breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="<?php echo url('/'); ?>">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Projects</li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>
   </section>
   <!-- breadcrumb end -->

  <!-- property grid start -->
  <section class="property-section property-list-thumbnail">
      <div class="container">
         <div class="row ratio_55">
            <div class="col-12 property-grid-slider property-grid-3">
               <div class="filter-panel">
                  <div class="top-panel">
                     <div>
                        <h2>Buy Your perfect UK Investment property</h2>
                        <span class="show-result">Showing <span>1-15 of 69</span> Listings</span>
                     </div>
                     <ul class="grid-list-filter">
                        <li>
                           <div class="filter-bottom-title">
                              <h6 class="mb-0 font-roboto">Advance search <i data-feather="align-center" class="float-end ms-2"></i></h6>
                           </div>
                        </li>
                        <li>
                           <div class="dropdown">
                              <span class="dropdown-toggle font-rubik" data-bs-toggle="dropdown"><span>Sort by
                                       Newest</span> <i class="fas fa-angle-down ms-lg-3 ms-2"></i></span>
                              <div class="dropdown-menu text-start">
                                 <a class="dropdown-item" href="javascript:void(0)">Sort by Newest</a>
                                 <a class="dropdown-item" href="javascript:void(0)">Sort by Oldest</a>
                                 <a class="dropdown-item" href="javascript:void(0)">Sory by featured</a>
                                 <a class="dropdown-item" href="javascript:void(0)">Sort by price (Low to
                                       high)</a>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="left-sidebar filter-bottom-content">
                  <h6 class="d-lg-none d-block text-end"><a href="javascript:void(0)"  class="close-filter-bottom">Close filter</a></h6>
                  <div class="row">
                     <div class="col-lg-4">
                        <div class="dropdown">
                              <span class="dropdown-toggle font-rubik" data-bs-toggle="dropdown"><span>Property
                                    Status</span> <i class="fas fa-angle-down"></i></span>
                              <div class="dropdown-menu text-start">
                                 <a class="dropdown-item" href="javascript:void(0)">Property Status</a>
                                 <a class="dropdown-item" href="javascript:void(0)">For Rent</a>
                                 <a class="dropdown-item" href="javascript:void(0)">For Sale</a>
                              </div>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="dropdown">
                              <span class="dropdown-toggle font-rubik" data-bs-toggle="dropdown"><span>Property
                                    Type</span> <i class="fas fa-angle-down"></i></span>
                              <div class="dropdown-menu text-start">
                                 <a class="dropdown-item" href="javascript:void(0)">Property Type</a>
                                 <a class="dropdown-item" href="javascript:void(0)">Apartment</a>
                                 <a class="dropdown-item" href="javascript:void(0)">Family House</a>
                                 <a class="dropdown-item" href="javascript:void(0)">Cottage</a>
                                 <a class="dropdown-item" href="javascript:void(0)">Condominium</a>
                              </div>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="dropdown">
                              <span class="dropdown-toggle font-rubik" data-bs-toggle="dropdown"><span>Property
                                    Location</span> <i class="fas fa-angle-down"></i></span>
                              <div class="dropdown-menu text-start">
                                 <a class="dropdown-item" href="javascript:void(0)">Property Location</a>
                                 <a class="dropdown-item" href="javascript:void(0)">Austria</a>
                                 <a class="dropdown-item" href="javascript:void(0)">Brazil</a>
                                 <a class="dropdown-item" href="javascript:void(0)">New york</a>
                                 <a class="dropdown-item" href="javascript:void(0)">USA</a>
                              </div>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="dropdown">
                              <span class="dropdown-toggle font-rubik" data-bs-toggle="dropdown"><span>Max
                                    Rooms</span> <i class="fas fa-angle-down"></i></span>
                              <div class="dropdown-menu text-start">
                                 <a class="dropdown-item" href="javascript:void(0)">Max Rooms</a>
                                 <a class="dropdown-item" href="javascript:void(0)">1</a>
                                 <a class="dropdown-item" href="javascript:void(0)">2</a>
                                 <a class="dropdown-item" href="javascript:void(0)">3</a>
                                 <a class="dropdown-item" href="javascript:void(0)">4</a>
                                 <a class="dropdown-item" href="javascript:void(0)">5</a>
                                 <a class="dropdown-item" href="javascript:void(0)">6</a>
                              </div>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="dropdown">
                              <span class="dropdown-toggle font-rubik" data-bs-toggle="dropdown"><span>Bed</span> <i
                                    class="fas fa-angle-down"></i></span>
                              <div class="dropdown-menu text-start">
                                 <a class="dropdown-item" href="javascript:void(0)">Bed</a>
                                 <a class="dropdown-item" href="javascript:void(0)">1</a>
                                 <a class="dropdown-item" href="javascript:void(0)">2</a>
                                 <a class="dropdown-item" href="javascript:void(0)">3</a>
                                 <a class="dropdown-item" href="javascript:void(0)">4</a>
                              </div>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="dropdown">
                              <span class="dropdown-toggle font-rubik" data-bs-toggle="dropdown"><span>Bath</span> <i
                                    class="fas fa-angle-down"></i></span>
                              <div class="dropdown-menu text-start">
                                 <a class="dropdown-item" href="javascript:void(0)">Bath</a>
                                 <a class="dropdown-item" href="javascript:void(0)">1</a>
                                 <a class="dropdown-item" href="javascript:void(0)">2</a>
                                 <a class="dropdown-item" href="javascript:void(0)">3</a>
                                 <a class="dropdown-item" href="javascript:void(0)">4</a>
                              </div>
                        </div>
                     </div>
                     <div class="col-12 text-end">
                        <a href="javascript:void(0)" class="mt-3 btn btn-gradient color-2 btn-pill">Search Property</a>
                     </div>
                  </div>
               </div>
               <div class="property-2 row column-sm property-label property-grid list-view no-sidebar">
                  <?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <div class="col-md-12 col-xl-6">
                        <div class="property-box">
                           <div class="property-image">
                              <div class="slider-for">
                                 <?php $__currentLoopData = Property::product_image($property->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div>
                                       <img src="<?php echo Helpers::backend(); ?>/media/products/<?php echo $image->file_name; ?>" class="img-fluid" alt="">
                                    </div>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </div>
                              <div class="slider-nav">
                                 <?php $__currentLoopData = Property::product_image($property->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <div>
                                    <img src="<?php echo Helpers::backend(); ?>/media/products/<?php echo $image->file_name; ?>" class="img-fluid" alt="">
                                 </div>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </div>
                              
                           </div>
                           <div class="property-details">
                              <span class="font-roboto"><?php echo $property->location; ?></span>
                              <a href="<?php echo route('project.details',$property->url); ?>">
                                 <h3><?php echo $property->product_name; ?></h3>
                              </a>
                              <h4>Starting Price <span class="text-danger"><b>£<?php echo number_format($property->price); ?>*</b></span></h4>
                              <p class="font-roboto"><?php echo substr($property->short_description, 0,200); ?> <?php echo strlen($property->short_description) > 200 ? "..." : ""; ?></p>
                              <div class="property-btn d-flex">
                                 <a href="<?php echo route('project.details',$property->url); ?>" class="btn btn-dashed btn-pill color-2">View Project</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </div>
               <nav class="theme-pagination">
                  <ul class="pagination">
                     <li class="page-item">
                        <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                           <span aria-hidden="true">«</span>
                           <span class="sr-only">Previous</span>
                        </a>
                     </li>
                     <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                     <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                     <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                     <li class="page-item">
                        <a class="page-link" href="javascript:void(0)" aria-label="Next">
                           <span aria-hidden="true">»</span>
                           <span class="sr-only">Next</span>
                        </a>
                     </li>
                  </ul>
               </nav>
            </div>
         </div>
      </div>
  </section>
  <!-- property grid end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/stone/Desktop/Projects/PHP/baroncabot/resources/views/pages/projects.blade.php ENDPATH**/ ?>