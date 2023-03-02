<?php $__env->startSection('title'); ?><?php echo $blog->title; ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?><?php echo $blog->meta_description; ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?><?php echo $blog->meta_tags; ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
   <!-- breadcrumb start -->
   <section class="breadcrumb-section p-0">
      <img src="<?php echo asset('assets/images/inner-background.jpg'); ?>" class="bg-img img-fluid" alt="">
      <div class="container">
         <div class="breadcrumb-content">
            <div>
               <h1 class="text-white"><?php echo $blog->title; ?></h1>
               <nav aria-label="breadcrumb" class="theme-breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="<?php echo url('/'); ?>">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Blog</li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>
   </section>
   <!-- breadcrumb end -->

   <!-- blog details section start-->
   <section class="ratio_40">
      <div class="container">
         <div class="row">
            <div class="col-xl-9 col-lg-8">
               <div class="blog-single-detail theme-card">
                  <center>
                     <?php if($blog->thumbnail): ?>
                        <img src="<?php echo Helpers::backend(); ?>/media/posts/<?php echo $blog->thumbnail; ?>" class="img-responsive" alt="" style="width:100%">
                     <?php endif; ?>
                  </center>
                  <div class="blog-title">
                     <ul class="post-detail">
                        <li><?php echo date('F jS, Y', strtotime($blog->created_at)); ?></li>
                        
                     </ul>
                     <h3><?php echo $blog->title; ?></h3>
                  </div>
                  <div class="details-property">
                     <div class="row">
                        <?php echo $blog->content; ?>

                     </div>
                  </div>
               </div>
            </div>
            <?php echo $__env->make('partials._insights_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         </div>
      </div>
   </section>
   <!-- blog details section end-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/stone/Desktop/Projects/PHP/baroncabot/resources/views/pages/insights_details.blade.php ENDPATH**/ ?>