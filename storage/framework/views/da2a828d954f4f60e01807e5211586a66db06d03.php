<?php $__env->startSection('title','Projects'); ?>
<?php $__env->startSection('content'); ?>
   <!-- breadcrumb start -->
   <section class="breadcrumb-section p-0">
      <img src="<?php echo asset('assets/images/inner-background.jpg'); ?>" class="bg-img img-fluid" alt="">
      <div class="container">
         <div class="breadcrumb-content">
            <div>
               <h1 class="text-white">Our Projects</h1>
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
   <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('projects', ['location' => $location])->html();
} elseif ($_instance->childHasBeenRendered('Pkbz3R5')) {
    $componentId = $_instance->getRenderedChildComponentId('Pkbz3R5');
    $componentTag = $_instance->getRenderedChildComponentTagName('Pkbz3R5');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Pkbz3R5');
} else {
    $response = \Livewire\Livewire::mount('projects', ['location' => $location]);
    $html = $response->html();
    $_instance->logRenderedChild('Pkbz3R5', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
  <!-- property grid end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/stone/Desktop/Projects/PHP/baroncabot/resources/views/pages/projects2.blade.php ENDPATH**/ ?>