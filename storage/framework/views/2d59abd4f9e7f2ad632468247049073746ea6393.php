<div class="row">
   <div class="col-xl-9 col-lg-8">
      <div class="blog-grid row mt-0">
         <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-6">
               <div class="blog-wrap wow fadeInUp">
                  <div class="blog-image">
                     <div>
                        <?php if($blog->thumbnail): ?>
                           <img src="<?php echo Helpers::backend(); ?>/media/posts/<?php echo $blog->thumbnail; ?>" class="bg-img img-fluid" alt="">
                        <?php else: ?>
                           <img src="<?php echo asset('assets/images/placeholder.png'); ?>" class="bg-img img-fluid" alt="">
                        <?php endif; ?>
                     </div>
                     <div class="blog-label">
                        <div>
                           <h3><?php echo date('d', strtotime($blog->created_at)); ?></h3>
                           <span><?php echo date('M', strtotime($blog->created_at)); ?></span>
                        </div>
                     </div>
                  </div>
                  <div class="blog-details">
                     <div>
                        <h3><a href="<?php echo route('blog.details',$blog->url); ?>"><?php echo $blog->title; ?></a></h3>
                        <p class="font-roboto"><?php echo substr($blog->synopsis, 0,250); ?> <?php echo strlen($blog->synopsis) > 250 ? "..." : ""; ?></p>
                        <a href="<?php echo route('blog.details',$blog->url); ?>">read more</a>
                     </div>
                  </div>
               </div>
            </div>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      
   </div>
   <div class="col-xl-3 col-lg-4">
      <div class="sticky-cls blog-sidebar blog-right">
         <div class="filter-cards">
            <div class="advance-card mb-5">
               <div class="search-bar">
                  <input type="text" placeholder="Search here.." wire:model="search">
                  <i class="fas fa-search"></i>
               </div>
            </div>

            <div class="advance-card mb-5">
               <h6>Category</h6>
               <div class="category-property">
                  <ul>
                     <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                           <a href="<?php echo route('blog.category',$category->url); ?>"><i class="fas fa-arrow-right me-2"></i><?php echo $category->name; ?>

                              
                           </a>
                        </li>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul>
               </div>
            </div>

            
         </div>
      </div>
   </div>
</div>
<?php /**PATH /home/stone/Desktop/Projects/PHP/baroncabot/resources/views/livewire/blog.blade.php ENDPATH**/ ?>