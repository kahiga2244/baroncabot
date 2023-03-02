<?php $__env->startSection('title'); ?><?php echo $category->name; ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

   <!-- breadcrumb start -->
   <section class="breadcrumb-section p-0">
      <img src="<?php echo asset('assets/images/inner-background.jpg'); ?>" class="bg-img img-fluid" alt="">
      <div class="container">
         <div class="breadcrumb-content">
            <div>
               <h1 class="text-white"><?php echo $category->name; ?> </h1>
               <nav aria-label="breadcrumb" class="theme-breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="<?php echo url('/'); ?>">Home</a></li>
                     <li class="breadcrumb-item">Category</li>
                     <li class="breadcrumb-item active" aria-current="page"><?php echo $category->name; ?></li>
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
    $html = \Livewire\Livewire::mount('category', ['category' => $category->url])->html();
} elseif ($_instance->childHasBeenRendered('JM65hJn')) {
    $componentId = $_instance->getRenderedChildComponentId('JM65hJn');
    $componentTag = $_instance->getRenderedChildComponentTagName('JM65hJn');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('JM65hJn');
} else {
    $response = \Livewire\Livewire::mount('category', ['category' => $category->url]);
    $html = $response->html();
    $_instance->logRenderedChild('JM65hJn', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
      </div>
   </section>
   <!-- blog section end-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/stone/Desktop/Projects/PHP/baroncabot/resources/views/pages/blog_category.blade.php ENDPATH**/ ?>