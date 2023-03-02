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
               <h1 class="text-white">Meet The Team </h1>
               <nav aria-label="breadcrumb" class="theme-breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="<?php echo url('/'); ?>">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Team</li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>
   </section>
   <!-- breadcrumb end -->

   <!-- agent grid section start -->
   <section class="agent-section property-section">
      <div class="container">
         <div class="row ratio2_3">
            <div class="col-xl-12 col-lg-12 property-grid-3 agent-grids">
               <div class="property-wrapper-grid list-view">
                  <div class="property-2 row column-sm property-label property-grid list-view">
                     <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-12 col-xl-6 wow fadeInUp">
                           <div class="property-box" <?php if($agent->isMobile()): ?> <?php else: ?> style="min-height: 420px;" <?php endif; ?>>
                              <div class="agent-image">
                                 <div <?php if($agent->isMobile()): ?>style="height: 355px;"<?php endif; ?>>
                                    <?php if($team->profile_image): ?>
                                       <img src="<?php echo Helpers::backend(); ?>/storage/teams/<?php echo $team->profile_image; ?>" class="img-fluid bg-img" alt="">
                                    <?php else: ?>
                                       <img src="<?php echo asset('assets/images/profile_placeholder.png'); ?>" class="bg-img" alt="">
                                    <?php endif; ?>
                                    
                                    <div class="agent-overlay"></div>
                                    <div class="overlay-content">
                                       <?php if($team->linkedin != "" && $team->email != ""): ?>
                                          <ul>
                                             <li><a href="<?php echo $team->linkedin; ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                             <li><a href="<?php echo $team->email; ?>" target="_blank"><i class="fas fa-envelope"></i></a></li>
                                          </ul>
                                          <span>Connect</span>
                                       <?php endif; ?>
                                    </div>
                                 </div>
                              </div>
                              <div class="agent-content">
                                 <h3><a href="#"><?php echo $team->name; ?></a></h3>
                                 <p class="font-roboto text-danger"><?php echo $team->position; ?></p>
                                 
                                 <p><?php echo $team->bio; ?></p>
                                 
                                 <?php if($team->video_link): ?>
                                 <a href="#" data-bs-toggle="modal" data-bs-target="#video<?php echo $team->id; ?>" class="btn btn-solid btn-flat color-3 mt-3"><i class="fa fa-play"></i> Play Intro Reel</a>
                                 <?php endif; ?>
                              </div>
                           </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="video<?php echo $team->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-keyboard="false" data-bs-backdrop="static">
                           <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    
                                    <button type="button" class="btn-close" onClick="refreshPage()" data-bs-dismiss="modal" aria-label="Close"><span  aria-hidden="true">×</span></button>
                                 </div>
                                 <div class="modal-body">
                                    <video width="100%" controls>
                                       <source src="<?php echo asset('assets/video/'.$team->video_link); ?>" type="video/mp4" autostart="false">
                                       
                                    </video>
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
   <!-- agent grid section end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/stone/Desktop/Projects/PHP/baroncabot/resources/views/pages/team.blade.php ENDPATH**/ ?>