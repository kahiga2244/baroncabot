 <!-- agent grid section start -->
 <section class="agent-section property-section">
   <div class="container">
      <div class="row ratio2_3">
         <div class="col-xl-12 col-lg-12 property-grid-3 agent-grids">
            <div class="property-wrapper-grid list-view">
               <div class="property-2 row column-sm property-label property-grid list-view">
                  <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <div class="col-md-12 col-xl-6 wow fadeInUp">
                        <div class="property-box">
                           <div class="agent-image">
                              <div <?php if($agent->isMobile()): ?>style="height: 355px;"<?php endif; ?>>
                                 <?php if($team->profile_image): ?>
                                    <img src="<?php echo Helpers::backend(); ?>/storage/teams/<?php echo $team->profile_image; ?>" class="img-fluid bg-img" alt="">
                                 <?php else: ?>
                                    <img src="<?php echo asset('assets/images/profile_placeholder.png'); ?>" class="bg-img" alt="">
                                 <?php endif; ?>
                                 
                                 <div class="agent-overlay"></div>
                                 <div class="overlay-content">
                                    <ul>
                                       <li><a href="<?php echo $team->linkedin; ?>" target="_blank"><img src="<?php echo asset('assets/images/about/icon-1.png'); ?>" alt=""></a>
                                       </li>
                                       <li><a href="<?php echo $team->twitter; ?>" target="_blank"><img src="<?php echo asset('assets/images/about/icon-2.png'); ?>" alt=""></a>
                                       </li>
                                       <li><a href="<?php echo $team->facebook; ?>" target="_blank"><img src="<?php echo asset('assets/images/about/icon-3.png'); ?>" alt=""></a>
                                       </li>
                                    </ul>
                                    <span>Connect</span>
                                 </div>
                              </div>
                           </div>
                           <div class="agent-content">
                              <h3><a href="#"><?php echo $team->name; ?></a></h3>
                              <p class="font-roboto text-danger"><?php echo $team->position; ?></p>
                              <p><?php echo substr($team->bio, 0,218); ?> <?php echo strlen($team->bio) > 218 ? "..." : ""; ?></p>
                              
                              <a href="#" class="btn btn-solid btn-flat color-3 mt-3" data-bs-toggle="modal" data-bs-target="#video<?php echo $team->id; ?>" wire:click="view(<?php echo e($team->id); ?>)"><i class="fa fa-play"></i> Play Intro Reel</a>
                           </div>
                        </div>
                     </div>

                     <div wire:ignore.self class="modal fade video-modal" id="video<?php echo $team->id; ?>" aria-labelledby="exampleModalLabel" data-bs-keyboard="false" data-bs-backdrop="static">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-body">
                                 <button type="button" onClick="refreshPage()"><span  aria-hidden="true">×</span></button>
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
<?php /**PATH /home/stone/Desktop/Projects/PHP/baroncabot/resources/views/livewire/teams.blade.php ENDPATH**/ ?>