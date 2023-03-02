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
               <h1 class="text-white"><?php echo e($data->countryName); ?>  Property Market News </h1>
               <nav aria-label="breadcrumb" class="theme-breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="<?php echo url('/'); ?>">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">insights</li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>
   </section>
   <!-- breadcrumb end -->

   <!-- blog section start-->
   <section class="ratio_landscape blog-list-section">
      <div class="container">
         <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('blog')->html();
} elseif ($_instance->childHasBeenRendered('IfgGr4f')) {
    $componentId = $_instance->getRenderedChildComponentId('IfgGr4f');
    $componentTag = $_instance->getRenderedChildComponentTagName('IfgGr4f');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('IfgGr4f');
} else {
    $response = \Livewire\Livewire::mount('blog');
    $html = $response->html();
    $_instance->logRenderedChild('IfgGr4f', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
      </div>
   </section>
   <!-- blog section end-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/stone/Desktop/Projects/PHP/baroncabot/resources/views/pages/insights.blade.php ENDPATH**/ ?>