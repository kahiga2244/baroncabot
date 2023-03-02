<div class="col-xl-3 col-lg-4">
   <div class="sticky-cls blog-sidebar blog-right">
      <div class="filter-cards">
         

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
<?php /**PATH /home/stone/Desktop/Projects/PHP/baroncabot/resources/views/partials/_insights_bar.blade.php ENDPATH**/ ?>