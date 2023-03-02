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
      <img src="<?php echo asset('assets/images/whoweare.jpg'); ?>" class="bg-img img-fluid" alt="">
      <div class="container">
         <div class="breadcrumb-content">
            <div>
               <h1 class="text-white">Due Diligence</h1>
               <nav aria-label="breadcrumb" class="theme-breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="<?php echo url('/'); ?>">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Due Diligence</li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>
   </section>
   <!-- breadcrumb end -->
   <section class="service-section service-2">
      <div class="container">
         <div class="row">
            <div class="col">
               <div class="title-3">

                  <h1>Our Safety Process</h1>

               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="service-section">
      <div class="container-fluid">
         <div class="row">
            <div class="col">
               <div class="container">
                  <div class="row">
                     <div class="col">
                        <div class="row property-service column-space">

                           <div class="col-xl-4 col-md-6 wow fadeInUp">
                              <div class="service-box text-center">
                                 <center>
                                    <img src="<?php echo asset('assets/images/due1.png'); ?>" alt="" class="img-fluid">
                                 </center>
                                 <h3 class="mt-3"><a href="#">Understand exactly where to invest</a></h3>
                                 <p class="due_content">The process always starts with using advanced data analytics to pick the best locations. Based on prices, growth, affordability, occupancy rates, crime and overall ROI.</p>
                              </div>
                           </div>

                           <div class="col-xl-4 col-md-6 wow fadeInUp">
                              <div class="service-box text-center">
                                 <center>
                                    <img src="<?php echo asset('assets/images/due2.png'); ?>" alt="" class="img-fluid">
                                 </center>
                                 <h3 class="mt-3"><a href="#">Source the best developments</a></h3>
                                 <p class="due_content">Not just a city, but a specific area of a city. Make sure the development is run by an experienced developer who has a long track  record (ideally over 10 years) and have a strong financial structure.</p>
                              </div>
                           </div>

                           <div class="col-xl-4 col-md-6 wow fadeInUp">
                              <div class="service-box text-center">
                                 <center>
                                    <img src="<?php echo asset('assets/images/due3.png'); ?>" alt="" class="img-fluid">
                                 </center>
                                 <h3 class="mt-3"><a href="#">112 Point Due Diligence Check</a></h3>
                                 <p class="due_content">We check and get reports on over 112 check points for every property. In addition the property is shared with UK regulated lawyers to cross check again.</p>
                              </div>
                           </div>

                           <div class="col-xl-4 col-md-6 wow fadeInUp">
                              <div class="service-box text-center">
                                 <center>
                                    <img src="<?php echo asset('assets/images/due4.png'); ?>" alt="" class="img-fluid">
                                 </center>
                                 <h3 class="mt-3"><a href="#">Fully funded means lower risk</a></h3>
                                 <p class="due_content">We work with developments which are funded privately and don't need your money. WHY? Because if its off-plan this reduces/ stops any delays (no need to sell to be able to build).</p>
                              </div>
                           </div>

                           <div class="col-xl-4 col-md-6 wow fadeInUp">
                              <div class="service-box text-center">
                                 <center>
                                    <img src="<?php echo asset('assets/images/due5.png'); ?>" alt="" class="img-fluid">
                                 </center>
                                 <h3 class="mt-3"><a href="#">Ensure mortgages for YOU</a></h3>
                                 <p class="due_content">We check every development against mortgages for clients in Europe, Africa, Asia and the US. Before we start we check that you will get lending on the property.</p>
                              </div>
                           </div>

                           <div class="col-xl-4 col-md-6 wow fadeInUp">
                              <div class="service-box text-center">
                                 <center>
                                    <img src="<?php echo asset('assets/images/due6.png'); ?>" alt="" class="img-fluid">
                                 </center>
                                 <h3 class="mt-3"><a href="#">Protections for your investment</a></h3>
                                 <p class="due_content">All our properties have a 'long stop date' meaning if highly delayed you get all your money back. All payments are sent via a lawyer who's insurance add's another layer of protection.</p>
                              </div>
                           </div>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/stone/Desktop/Projects/PHP/baroncabot/resources/views/pages/mobile/due-diligence.blade.php ENDPATH**/ ?>