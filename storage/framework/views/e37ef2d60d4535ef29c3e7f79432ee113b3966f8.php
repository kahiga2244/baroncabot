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
<?php $__env->startSection('stylesheets'); ?>
   <style>
      .bg-comman-2::before {
         position: absolute;
         content: "";
         top: 0;
         left: 0;
         width: 100%;
         height: 390px;
         /* background-image: url(../images/5.jpg); */
      }
      /*for */
      @import  url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

/* *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

body{
  display: flex;
  height: 100vh;
  justify-content: center;
  align-items: center;
  padding: 10px;

} */
.container1{
  max-width: 700px;
  width: 100%;
  background: #002D62;
  padding: 25px 30px;
  border-radius: 5px;
  text-color: white;

}
.container1 .title{
  font-size: 25px;
  font-weight: 500;
  text-align: center;

}
.container1 .title::before{
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
}
.container1 form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}
form .user-details .input-box{
  margin: 30px 0 15px 0;
  width: calc(100% / 2 - 20px);
  color: #FFD700;


}
.user-details .input-box .details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
input {
  font-size: 13px;
  height: 25px;
  padding: 10px 10px 10px 5px;
  display: block;
  width: 300px;
  border: none;
  outline: none;
  border-bottom: 1px solid #B1B1B1;
  color: #FFD700;
  background: rgba(0,0,0,0);
  opacity: 0.5;
  transition: 0.2s ease;
}

input:focus {
  outline: none;
  opacity: 1;
}
@media  screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
   </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

   <!-- home section start -->
   
   <!-- home section end -->

   <!-- home section start -->
   <section class="home-section layout-5" <?php if($agent->isMobile()): ?> style="background-image: url(<?php echo asset('assets/images/home-mobile.jpg'); ?>);" <?php endif; ?>>
      <div class="container-fluid">
         <div class="row">
            <div class="col-xl-8 col-md-11">
               <div class="home-main">
                  <div class="home-content">
                     <div>
                        <h1>Property You Can Bank On</h1>
                        <div class="row">
                           <div class="col-xl-8">
                              <p style="font-size: 15px;">Find your UK investment with the <br><span style="color:#FFD700">'5-Star Trust rated'</span> UK Market Leaders.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-----------------form------>
            
            <!-----------end---->
         </div>
      </div>

      
   </section>

   <!-- home section end -->
<!-----As seen on------------>
   <section class="small-section bg-light-blue arrow-gradient">
      <div class="container">
         <div class="row">
            <div class="col">
               <div class="title-2 text-white mb-5">
                  <h2 class="text-dark">As seen on</h2>
               </div>
               <div class="slide-3 brand-slider">
                  
                  <div>
                     <a href="https://baroncabot.com/blog/baron-cabot-in-bbc/details" target="_blank" class="logo-box">
                        <img src="<?php echo asset('assets/images/BBC_News.svg.svg'); ?>" alt="" class="img-fluid" style="width:40%;">
                     </a>
                  </div>
                  <div>
                     <a href="https://venturesafrica.com/apostories/baron-cabot-expands-investment-opportunities-in-africa/" target="_blank" class="logo-box">
                        <img src="<?php echo asset('assets/images/Screenshot_13.png'); ?>" alt="" class="img-fluid">
                     </a>
                  </div>
                  <div>
                     <a href="https://baroncabot.com/blog/baron-cabot-expands-investment-opportunities-in-africa/details" target="_blank" class="logo-box">
                        <img src="<?php echo asset('assets/images/200px-CNBC_logo.svg.png'); ?>" alt="" class="img-fluid" style="width:50%;">
                     </a>
                  </div>
                  <div>
                     <a href="https://www.forbesafrica.com/brand-voice/2022/04/08/more-opportunities-for-africans-to-invest-in-property-in-the-uk/" target="_blank" class="logo-box">
                        <img src="<?php echo asset('assets/images/Forbes_logo.png'); ?>" alt="" class="img-fluid">
                     </a>
                  </div>
                  <div>
                     <a href="" class="logo-box" target="_blank">
                        
                        <svg class="cnn-badge-icon" style="outline:0;width:40%" viewBox="0 0 240 240" fill="#CC0000" xmlns="https://www.w3.org/2000/svg" aria-hidden="true"><rect x="0" y="0" width="100%" height="100%" fill="#fff"></rect><path d="M.31-.07v240h240V-.07ZM86.54,135.29V92.51c0-16.1,20.81-23.83,31.82-5.12.8,1.35,18.14,31.22,18.14,31.22V92.51c0-16.1,20.8-23.83,31.81-5.12.8,1.35,18.14,31.22,18.14,31.22V76.79h10.38V147a2.11,2.11,0,0,1-1.51,2.14c-1.1.3-2.26-.38-3.11-1.82-.17-.28-9-15.46-17.48-30.13L159.17,90.4c-2.18-3.7-5.43-4.35-7.74-3.72a6.23,6.23,0,0,0-4.55,6.13V147a2.12,2.12,0,0,1-1.51,2.14c-1.11.3-2.27-.38-3.11-1.82-.15-.25-8.34-14.36-16.25-28-10.08-17.38-16.7-28.78-16.8-28.95-2.18-3.71-5.44-4.35-7.77-3.72a6.24,6.24,0,0,0-4.56,6.13v53.05a2.9,2.9,0,0,1-2.72,2.71H67.23a28.64,28.64,0,0,1,0-57.28h14v10.36H67.35a18.28,18.28,0,1,0,0,36.56H83.68A2.84,2.84,0,0,0,86.54,135.29Zm124.77,12.05c0,16.1-20.81,23.83-31.82,5.13-.79-1.35-18.14-31.23-18.14-31.23v26.1c0,16.1-20.8,23.83-31.81,5.13-.8-1.35-18.14-31.23-18.14-31.23v24.61c0,11.17-6.63,17.22-17,17.22H67.25a43.14,43.14,0,0,1,0-86.28h14V87.15h-14a32.78,32.78,0,1,0,0,65.56H94.16a7,7,0,0,0,6.86-6.85V92.81a2.1,2.1,0,0,1,1.51-2.13c1.1-.3,2.26.38,3.11,1.82l16.79,28.93c9.76,16.83,16.17,27.88,16.25,28,2.19,3.7,5.45,4.35,7.78,3.71A6.22,6.22,0,0,0,151,147V92.82a2.11,2.11,0,0,1,1.49-2.14c1.09-.3,2.24.38,3.08,1.82l15.56,26.81,17.49,30.15c1.71,2.9,4.09,3.93,6.16,3.93a6,6,0,0,0,1.61-.22A6.23,6.23,0,0,0,201,147V76.79h10.34Z" transform="translate(-0.31 0.07)"></path></svg>
                     </a>
                  </div>
                  <div>
                     <a href="https://www.youtube.com/watch?v=NaBGAVin3QQ" target="_blank" class="logo-box">
                        <img src="<?php echo asset('assets/images/Screenshot_14.png'); ?>" alt="" class="img-fluid">
                     </a>
                  </div>

                  <div>
                     <a href="https://youtu.be/-KkV39Fcop8?t=121" target="_blank" class="logo-box">
                        <img src="<?php echo asset('assets/images/citizendigital.png'); ?>" alt="" class="img-fluid" style="width:70%;">
                     </a>
                  </div>

               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- home section end -->
   <section class="property-section mb-2" style="margin-bottom: -90px">
      <!-- TrustBox widget - Starter -->
      <div class="trustpilot-widget" data-locale="en-GB" data-template-id="5613c9cde69ddc09340c6beb" data-businessunit-id="5f746adaaccd9d0001fcbe15" data-style-height="100%" data-style-width="100%" data-theme="light">
         <a href="https://uk.trustpilot.com/review/baroncabot.com" target="_blank" rel="noopener">Trustpilot</a>
      </div>
      <!-- End TrustBox widget -->
   </section>

   

   

   <!-- feature section start -->
   <section class="feature-section slick-between  mb-5">
      <div class="container-fluid">
         <div class="row">
            <div class="col">
               <div class="title-2 text-white mb-5">
                  <h2 class="text-dark">Featured Cities</h2>
               </div>
               <div class="feature-2 dot-gradient">
                  <a href="<?php echo route('page','projects'); ?>?location=Birmingham">
                     <div>
                        <div class="feature-box">
                           <img src="<?php echo asset('assets/images/Birmingham.jpg'); ?>" class="img-fluid" alt="" style="height: 330px">
                           <div class="feature-bottom">
                              <h3>Birmingham</h3>
                              
                           </div>
                        </div>
                     </div>
                  </a>
                  <a href="<?php echo route('page','projects'); ?>?location=Manchester">
                     <div>
                        <div class="feature-box">
                           <img src="<?php echo asset('assets/images/Manchester.webp'); ?>" class="img-fluid" alt="" style="height: 330px">
                           <div class="feature-bottom">
                              <h3>Manchester</h3>
                              
                           </div>
                        </div>
                     </div>
                  </a>
                  <a href="<?php echo route('page','projects'); ?>?location=Leeds">
                     <div>
                        <div class="feature-box">
                           <img src="<?php echo asset('assets/images/Leeds.jpg'); ?>" class="img-fluid" alt="" style="height: 330px">
                           <div class="feature-bottom">
                              <h3>Leeds</h3>
                              
                           </div>
                        </div>
                     </div>
                  </a>
                  <a href="<?php echo route('page','projects'); ?>?location=Liverpool">
                     <div>
                        <div class="feature-box">
                           <img src="<?php echo asset('assets/images/Liverpool.jpg'); ?>" class="img-fluid" alt="" style="height: 330px">
                           <div class="feature-bottom">
                              <div>
                                 <h3>Liverpool</h3>
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                  </a>
                  <a href="<?php echo route('page','projects'); ?>?location=Nottingham">
                     <div>
                        <div class="feature-box">
                           <img src="<?php echo asset('assets/images/Nottingham.jpg'); ?>" class="img-fluid" alt="" style="height: 330px">
                           <div class="feature-bottom">
                              <div>
                                 <h3>Nottingham</h3>
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                  </a>
                  <a href="<?php echo route('page','projects'); ?>?location=London">
                     <div>
                        <div class="feature-box">
                           <img src="<?php echo asset('assets/images/london.jpg'); ?>" class="img-fluid" alt="" style="height: 330px">
                           <div class="feature-bottom">
                              <div>
                                 <h3>London</h3>
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                  </a>
                  <a href="<?php echo route('page','projects'); ?>?location=Bracknell">
                     <div>
                        <div class="feature-box">
                           <img src="<?php echo asset('assets/images/bracknell.jpg'); ?>" class="img-fluid" alt="Bracknell" style="height: 330px">
                           <div class="feature-bottom">
                              <div>
                                 <h3>London commuter towns</h3>
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
         <center><a href="#" data-bs-toggle="modal" data-bs-target="#getMoreInfo" class="btn btn-solid color-3 btn-flat mt-5 btn-lg"><i class="fal fa-headset"></i> Contact us</a></center>
      </div>
   </section>
   <!-- feature section end -->

   <!-- property section tab start -->
   <section class="property-section bg-comman-2">
      <div class="container">
         <div class="row ratio_55">
            <div class="col">
               <div class="title-2 text-white">
                  <p></p>
                  <h2>What can Baron & Cabot do for you ?</h2>
                  <p>Leaders in UK Property Investments</p>
               </div>
               <ul id="tabs" class="nav nav-tabs">
                  <li class="nav-item"><a href="" data-bs-target="#morden" data-bs-toggle="tab" class="nav-link">Our Services</a></li>
               </ul>
               <div id="tabsContent" class="tab-content">
                  <div id="morden" class="tab-pane fade active show">
                     <div class="property-2 row column-space zoom-gallery">
                        <div class="col-xl-4 col-md-6">
                           <div class="property-box">
                              <div class="property-image">
                                 <a href="<?php echo route('page','services'); ?>">
                                    <img src="<?php echo asset('assets/images/asdasdqwedas.jpg'); ?>" class="bg-img" alt="">
                                 </a>
                              </div>
                              <div class="property-details">
                                 <a href="<?php echo route('page','services'); ?>">
                                    <h3>Property Sourcing</h3>
                                 </a>
                                 <p>Largest volume of UK investment properties. As we are fully independent we are able to provide you with over 4,000 property investments.</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                           <div class="property-box">
                              <div class="property-image">
                                 <a href="<?php echo route('page','services'); ?>">
                                    <img src="<?php echo asset('assets/images/trust2.jpg'); ?>" class="bg-img" alt="Proven trust">
                                 </a>
                              </div>
                              <div class="property-details">
                                 <a href="<?php echo route('page','services'); ?>"><h3>Proven TRUST record</h3></a>
                                 <p class="font-roboto">Our previous investments speak for themselves, and so do our clients. Full background check on B&C provided in our first meeting.</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                           <div class="property-box">
                              <div class="property-image">
                                 <a href="<?php echo route('page','services'); ?>">
                                    <img src="<?php echo asset('assets/images/xxxsssee.jpg'); ?>" class="bg-img" alt="">
                                 </a>
                              </div>
                              <div class="property-details">
                                 <a href="<?php echo route('page','services'); ?>">
                                    <h3>Research development</h3>
                                 </a>
                                 <p class="font-roboto">Baron & Cabot only company with trained UK surveyors and data analysts, meaning you get the highest returns.<br><br></p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <center><a href="#" data-bs-toggle="modal" data-bs-target="#getMoreInfo" class="btn btn-solid color-3 btn-flat mt-5 btn-lg"><i class="fal fa-headset"></i> Contact us</a></center>
         </div>
      </div>
   </section>
   <!-- property section tab end -->

   <!-- feature section start -->
   <section class="feature-section layout9">
      <div class="container">
         <div class="row">
            <div class="col">
               <div class="title-1 text-white">
                  <h2>Property Portfolio</h2>
                  <hr>
               </div>
               <div class="feature-1 arrow-light">
                  <?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <div>
                        <div class="feature-wrapper">
                           <div class="row">
                              <div class="col-xl-4 col-lg-3">
                                 <div class="feature-left">
                                    <div class="property-details">
                                       <span class="font-roboto"> <?php echo $property->location; ?></span>
                                       <a href="<?php echo route('project.details',$property->url); ?>">
                                          <h3 class="d-flex">
                                             <?php echo $property->product_name; ?>

                                             
                                          </h3>
                                       </a>
                                       <h4  class="color-6">£<?php echo number_format($property->price); ?>*</h4>
                                       <p class="font-roboto"><?php echo substr($property->short_description, 0,200); ?> <?php echo strlen($property->short_description) > 200 ? "..." : ""; ?></p>
                                       

                                       <div class="property-btn">
                                          <a href="<?php echo route('project.details',$property->url); ?>" class="btn btn-dashed btn-pill color-6" tabindex="0">Details</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xl-8 col-lg-9 order-md">
                                 <div class="feature-image">
                                    <?php
                                       $data = Property::cover_image($property->id)->getData();
                                    ?>
                                    <?php if($data->check == 1): ?>
                                       <img src="<?php echo Helpers::backend(); ?>/media/products/<?php echo $data->cover->file_name; ?>" class="bg-img" alt="">
                                    <?php else: ?>
                                       <img src="https://g6g2u3ceklawnicrdmbeordv-wpengine.netdna-ssl.com/wp-content/uploads/2022/05/42.jpg') !!}" class="bg-img" alt="">
                                    <?php endif; ?>
                                    <h4 class="text-uppercase"><?php echo $property->status; ?></h4>
                                    
                                    
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="about-main mb-5">
      <div class="container">
         <div class="row">
            <div class="col">
               <div class="title-1 color-6">
                  <h2>Property You Can Bank On </h2>
                  <p>Bringing together years of experience, consistently investing in property that is growing above the market average in the UK.</p>
                  <hr>
               </div>
               <div class="user-about mt-0">
                  <div class="row">
                     <div class="col-xl-6 col-lg-6">
                        <center>
                        <img src="<?php echo asset('assets/images/PYCBO.png'); ?>" class="img-fluid" alt="bank" style="width:25%">
                        </center>
                     </div>
                     <div class="col-xl-6 col-lg-6">
                        <div class="about-content">
                           <p class="mb-4 mt-3">So why do global clients use us and stay with us for future investments?</p>
                           <p>We make the process transparent and completely simple, from your initial meeting teaching you the fundamentals of property investment, how to be consistently investing on your own, through to sharing the best areas of the UK to look at.
                           </p>
                           <p>You don’t need to rush as we want you to understand the basics first so that you have full confidence in every investment with us. </p>
                           <p>Together we will help you with a mortgage, regardless of the country you live in, everything from tax, to tenant management, bank accounts to build warranties we cover for you.</p>
                           <p>This is the reason that over <b>half of our properties are sold to existing clients or their referrals.</b></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <center><a href="#" data-bs-toggle="modal" data-bs-target="#getMoreInfo" class="btn btn-solid color-3 btn-flat mt-5 btn-lg"><i class="fal fa-headset"></i> Contact us</a></center>
         </div>
      </div>
   </section>

   <!-- feature section end -->
   <?php if($agent->isMobile()): ?>
      <!-- property section tab start -->
      <section class="property-section mb-5" style="height:400px;background: url(<?php echo asset('assets/images/bbccover.png'); ?>)">
         <div class="container">
            <div class="row ratio_55 mt-5">
               <div class="col mt-5">
                  <center><a data-bs-toggle="modal" data-bs-target="#video" class="btn btn-solid btn-flat color-3 mt-4"><i data-feather="play"></i>Play Video</a></center>
               </div>
            </div>
         </div>
      </section>
      <center><a href="<?php echo route('blog.category','news'); ?>" class="btn btn-gradient btn-sm color-4">View More</a></center>
      <br><br>
   <!-- property section tab end -->

   <?php else: ?>
      <!-- video section start -->
      <section class="video-section">
         <div class="container-fluid">
            <div class="row">
               <div class="col-xl-5 col-lg-8">
                  <div class="video-details" style="min-height: 300px">
                     <span class="label label-light label-flat color-4">#News</span>
                     <h2>Media</h2>
                     
                        <a href="<?php echo route('blog.category','news'); ?>" class="btn btn-gradient btn-lg color-4">View More</a>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-4">
                  <div class="play-icon">
                     <div class="icon-video">
                        <span class="heart-animation"></span>
                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#video">
                           <i class="fas fa-play"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   <?php endif; ?>

   <!-- video section end -->
   <div class="modal fade" id="video" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-keyboard="false" data-bs-backdrop="static">
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               
               <button type="button" class="btn-close" onClick="refreshPage()" data-bs-dismiss="modal" aria-label="Close"><span  aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
               <video width="100%" controls>
                  <source src="<?php echo asset('assets/video/bbc.mp4'); ?>" type="video/mp4" autostart="false">
                  
               </video>
            </div>
         </div>
      </div>
   </div>
   <!-- video modal end -->

   <section class="property-section">
      <!-- TrustBox widget - Starter -->
      <div class="trustpilot-widget" data-locale="en-GB" data-template-id="5613c9cde69ddc09340c6beb" data-businessunit-id="5f746adaaccd9d0001fcbe15" data-style-height="100%" data-style-width="100%" data-theme="light">
         <a href="https://uk.trustpilot.com/review/baroncabot.com" target="_blank" rel="noopener">Trustpilot</a>
      </div>
      <!-- End TrustBox widget -->
   </section>

   <!-- brand section start -->
   <section class="small-section bg-light-blue arrow-gradient">
      <div class="container">
         <div class="row">
            <div class="col">
               <div class="slide-3 brand-slider">
                  
                  <div>
                     <a href="https://baroncabot.com/blog/baron-cabot-in-bbc/details" target="_blank" class="logo-box">
                        <img src="<?php echo asset('assets/images/BBC_News.svg.svg'); ?>" alt="" class="img-fluid" style="width:40%;">
                     </a>
                  </div>
                  <div>
                     <a href="https://venturesafrica.com/apostories/baron-cabot-expands-investment-opportunities-in-africa/" target="_blank" class="logo-box">
                        <img src="<?php echo asset('assets/images/Screenshot_13.png'); ?>" alt="" class="img-fluid">
                     </a>
                  </div>
                  <div>
                     <a href="https://baroncabot.com/blog/baron-cabot-expands-investment-opportunities-in-africa/details" target="_blank" class="logo-box">
                        <img src="<?php echo asset('assets/images/200px-CNBC_logo.svg.png'); ?>" alt="" class="img-fluid" style="width:50%;">
                     </a>
                  </div>
                  <div>
                     <a href="https://www.forbesafrica.com/brand-voice/2022/04/08/more-opportunities-for-africans-to-invest-in-property-in-the-uk/" target="_blank" class="logo-box">
                        <img src="<?php echo asset('assets/images/Forbes_logo.png'); ?>" alt="" class="img-fluid">
                     </a>
                  </div>
                  <div>
                     <a href="" class="logo-box" target="_blank">
                        
                        <svg class="cnn-badge-icon" style="outline:0;width:40%" viewBox="0 0 240 240" fill="#CC0000" xmlns="https://www.w3.org/2000/svg" aria-hidden="true"><rect x="0" y="0" width="100%" height="100%" fill="#fff"></rect><path d="M.31-.07v240h240V-.07ZM86.54,135.29V92.51c0-16.1,20.81-23.83,31.82-5.12.8,1.35,18.14,31.22,18.14,31.22V92.51c0-16.1,20.8-23.83,31.81-5.12.8,1.35,18.14,31.22,18.14,31.22V76.79h10.38V147a2.11,2.11,0,0,1-1.51,2.14c-1.1.3-2.26-.38-3.11-1.82-.17-.28-9-15.46-17.48-30.13L159.17,90.4c-2.18-3.7-5.43-4.35-7.74-3.72a6.23,6.23,0,0,0-4.55,6.13V147a2.12,2.12,0,0,1-1.51,2.14c-1.11.3-2.27-.38-3.11-1.82-.15-.25-8.34-14.36-16.25-28-10.08-17.38-16.7-28.78-16.8-28.95-2.18-3.71-5.44-4.35-7.77-3.72a6.24,6.24,0,0,0-4.56,6.13v53.05a2.9,2.9,0,0,1-2.72,2.71H67.23a28.64,28.64,0,0,1,0-57.28h14v10.36H67.35a18.28,18.28,0,1,0,0,36.56H83.68A2.84,2.84,0,0,0,86.54,135.29Zm124.77,12.05c0,16.1-20.81,23.83-31.82,5.13-.79-1.35-18.14-31.23-18.14-31.23v26.1c0,16.1-20.8,23.83-31.81,5.13-.8-1.35-18.14-31.23-18.14-31.23v24.61c0,11.17-6.63,17.22-17,17.22H67.25a43.14,43.14,0,0,1,0-86.28h14V87.15h-14a32.78,32.78,0,1,0,0,65.56H94.16a7,7,0,0,0,6.86-6.85V92.81a2.1,2.1,0,0,1,1.51-2.13c1.1-.3,2.26.38,3.11,1.82l16.79,28.93c9.76,16.83,16.17,27.88,16.25,28,2.19,3.7,5.45,4.35,7.78,3.71A6.22,6.22,0,0,0,151,147V92.82a2.11,2.11,0,0,1,1.49-2.14c1.09-.3,2.24.38,3.08,1.82l15.56,26.81,17.49,30.15c1.71,2.9,4.09,3.93,6.16,3.93a6,6,0,0,0,1.61-.22A6.23,6.23,0,0,0,201,147V76.79h10.34Z" transform="translate(-0.31 0.07)"></path></svg>
                     </a>
                  </div>
                  <div>
                     <a href="https://www.youtube.com/watch?v=NaBGAVin3QQ" target="_blank" class="logo-box">
                        <img src="<?php echo asset('assets/images/Screenshot_14.png'); ?>" alt="" class="img-fluid">
                     </a>
                  </div>

                  <div>
                     <a href="https://youtu.be/-KkV39Fcop8?t=121" target="_blank" class="logo-box">
                        <img src="<?php echo asset('assets/images/citizendigital.png'); ?>" alt="" class="img-fluid" style="width:70%;">
                     </a>
                  </div>

               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- brand section end -->

   <section class="about-section slick-between ratio_square">
      <div class="container">
         <div class="row">
            <div class="col">
               <div class="title-1">
                  <h2>Meet our Experts</h2>
                  <hr>
               </div>
               <div class="about-2 about-wrap">
                  <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <div>
                        <div class="about-content">
                           <div class="about-image">
                              <div>
                                 <?php if($team->profile_image): ?>
                                    <img src="<?php echo Helpers::backend(); ?>/storage/teams/<?php echo $team->profile_image; ?>" class="img-fluid bg-img" alt="">
                                 <?php else: ?>
                                    <img src="#" class="img-fluid bg-img" alt="">
                                 <?php endif; ?>
                              </div>
                              <div class="about-overlay"></div>
                              <div class="overlay-content">
                                 <ul>
                                    <li><a href="<?php echo $team->linkedin; ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="<?php echo $team->linkedin; ?>" target="_blank"><i class="fas fa-envelope"></i></a></li>
                                 </ul>
                                 <span>Connect</span>
                              </div>
                           </div>
                           <div class="our-details">
                              <center>
                                 <h3><?php echo $team->name; ?></h3>
                                 <span class="font-roboto"><?php echo $team->position; ?></span><br>
                                 <a data-bs-toggle="modal" data-bs-target="#video<?php echo $team->id; ?>" class="btn btn-solid btn-flat color-3 mt-3"><i data-feather="play"></i>Play Intro Reel</a>
                              </center>
                           </div>
                        </div>
                     </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </div>
            </div>
            <center><a href="#" data-bs-toggle="modal" data-bs-target="#getMoreInfo" class="btn btn-solid color-3 btn-flat mt-5 btn-lg"><i class="fal fa-headset"></i> Contact us</a></center>
         </div>
      </div>
      <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
   </section>
   <!-- about 2 end -->

   <!-- blog section start-->
   <section class="ratio2_1 simple-blog">
      <div class="container">
         <div class="row">
            <div class="col">
               <div class="title-1">
                  <h2>Our Marketing <span>Insights</span></h2>
                  <hr>
               </div>
               <div class="blog-2">
                  <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <div>
                        <div class="blog-wrap color-7 wow fadeInUp">
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
                              <h3><a href="<?php echo route('blog.details',$blog->url); ?>"><?php echo $blog->title; ?></a></h3>
                              <p class="font-roboto"><?php echo substr($blog->synopsis, 0,180); ?> <?php echo strlen($blog->synopsis) > 180 ? "..." : ""; ?></p>
                              <a href="<?php echo route('blog.details',$blog->url); ?>">read more</a>
                           </div>
                        </div>
                     </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- blog section end-->

   <!-- section start -->
   <section class="faq-section log-in bg-light">
      <div class="container">
         <div class="row">
            <div class="title-1">
               <h2>Frequently ask question</h2>
               <hr>
            </div>
            <div class="col-lg-6 order-lg-1">
               <div class="faq-questions">
                  <div id="accordion" class="accordion">
                     <div class="card">
                        <div class="card-header">
                        <a class="card-link" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true">
                           Why should I use a company like you and not direct to developer?
                        </a>
                        </div>
                        <div id="collapseOne" class="collapse" data-bs-parent="#accordion">
                           <div class="card-body">
                              <p>Baron & Cabot have the benefit of being able to offer full market coverage to advise to our clients the best development for you without being restricted to particular developers.</p>
                              <p>In addition to full market cover as we tend to purchase large volumes in each development we are able to negotiate for you using the volume of the company (as an when this is possible).</p>
                              <p>Finally, developers are generally not client focussing and require companies like us to go to the market. As such most developers will be unable to offer discounts which we can negotiate, this is because they cannot be seen to be undercutting the market.</p>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header">
                        <a class="collapsed card-link" data-bs-toggle="collapse" href="#collapseTwo"> How do I know my money is protected?</a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                        <div class="card-body">
                           <p>One of the great questions is protection on your investment. While no investment (in anything) is completely without risk, there are many ways we help protect you.</p>
                           <p>Speak to our staff about the due diligence conducted on each development and developer, all is available for you when needed.</p>
                           <p>In addition it’s likely that part or all of your money is protected with insurnace and other additional protection.</p>
                           <p>Each project is different so please feel free to request this information.</p>
                        </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header">
                        <a class="collapsed card-link" data-bs-toggle="collapse" href="#collapseThree">
                           Why do you advise speaking to me before sharing projects?
                        </a>
                        </div>
                        <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                           <div class="card-body">
                              <p>At Baron & Cabot we have in excess of 11,000 investment properties we have access to. We also have many projects which cannot be advertised due to being owned by our clients who are not actively selling but would be open to offers, or it may be properties we are due to release soon or may even be small developements we will sell to existing clients as there is no need to do a lot of marketing (as they will sell immidiately).</p>
                              <p>By speaking to you our staff are trained in delivering not just the most suitable or best development, but also the most suitable unit in the development for you to consider.</p>
                              <p>Understanding your needs, price points and other factors significantly improves productivity for you our new client, and our staff, remove any calls or emails about properties which would not suit and make you more likely to find the ideal investment and buy through us which works for us both.</p>
                              <p>We are here to work with you as a busienss partner and ideally this starts with getting some understanding of your needs.</p>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header">
                           <a class="card-link" data-bs-toggle="collapse" href="#collapseFour"> Do you help me find a mortgage? </a>
                        </div>
                        <div id="collapseFour" class="collapse" data-bs-parent="#accordion">
                           <div class="card-body">
                              <p>Yes we do!</p>
                              <p>No matter where you live in the world, no matter what currency you earn in, and even if you are retired we can help you!</p>
                              <p>Speak to our specialists who will get you an actual rate and get you in contact with the lender.</p>
                              <p>Rates are between 1.5% and 6% with up to 30 year terms. Rates depend on the country you live in, and your own financial circumstances.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="faq-questions">
                  <div id="accordion" class="accordion">
                     <div class="card">
                        <div class="card-header">
                           <a class="collapsed card-link" data-bs-toggle="collapse" href="#collapseFive">How much should I expect to put down on a BTL mortgage?</a>
                        </div>
                        <div id="collapseFive" class="collapse" data-bs-parent="#accordion">
                           <div class="card-body">
                              <p>Please request advice on the loan to value on a buy to let mortgage. While most would say 25% or 30% total deposit for a mortgage each situation can be unique.</p>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header">
                           <a class="collapsed card-link" data-bs-toggle="collapse" href="#collapseSix">
                              Do you help rent the property?
                           </a>
                        </div>
                        <div id="collapseSix" class="collapse" data-bs-parent="#accordion">
                           <div class="card-body">
                              <p>At Baron & Cabot we pride ourselves in a full service for investors. As many of our investors are not UK based, and most of the remainder do not want to be hands on with the investment we offer a 360 process from sourcing, mortgage, currency exchange, legal support and managemnt of the property.</p>
                              <p>Often we will use 3rd party support to ensure the best possible price for our investors.</p>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header">
                           <a class="collapsed card-link" data-bs-toggle="collapse" href="#collapseSix">
                              Why are Baron & Cabot different to other brokers?
                           </a>
                        </div>
                        <div id="collapseSix" class="collapse" data-bs-parent="#accordion">
                           <div class="card-body">
                              <p>In our opinion we care more, we really focus on ‘confidence through clarity’.</p>
                              <p>We do the due diligence on developments which we will share with you. We will never carry a development which does not pass this criteria.</p>
                              <p>While there are some briliant companies in our market there are also some very lazy ones. If you have seen a development you like which we have not discussed with you, let us know, it may have failed our due diligence.</p>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header">
                           <a class="collapsed card-link" data-bs-toggle="collapse" href="#collapseSix">
                              How can I check that you are safe to invest with?
                           </a>
                        </div>
                        <div id="collapseSix" class="collapse" data-bs-parent="#accordion">
                           <div class="card-body">
                              <p>If you have any doubt’s what so ever speak to one of our staff. This is a normal concern and one we have a lot of resources for.</p>
                              <p>If you are an international client we will often work with a local bank of yours who you can speak to and ask about how many mortgages we have done together.</p>
                              <p>Alternatively, we have independent solicitors who can help, or even solicitors in your own country who can work with us to supply due diligence.</p>
                              <p>Finally, we have almost certainly worked with people in your city who we can also arrange a call with.  </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <center><a href="#" data-bs-toggle="modal" data-bs-target="#getMoreInfo" class="btn btn-solid color-3 btn-flat mt-5 btn-lg"><i class="fal fa-headset"></i> Contact us</a></center>
      </div>
   </section>
   <!-- section end -->
   <!------whatsapp--------->
   <!-- <div id="myDiv" style=" position: absolute;
    width: 100px;
    margin-top: 768px;
    height: 768px;"></div> -->
   <!----->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<scripts>
$(function() {
    $('#WAButton').floatingWhatsApp({
      phone: '1231231231', //WhatsApp Business phone number International format-
      //Get it with Toky at https://toky.co/en/features/whatsapp.
      headerTitle: 'Chat with us on WhatsApp!', //Popup Title
      popupMessage: 'Hello, how can we help you?', //Popup Message
      showPopup: true, //Enables popup display
      buttonImage: '<img src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/whatsapp.svg" />', //Button Image
      //headerColor: 'crimson', //Custom header color
      //backgroundColor: 'crimson', //Custom background button color
      position: "right"
    });
  });

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/stone/Desktop/Projects/PHP/baroncabot/resources/views/pages/home.blade.php ENDPATH**/ ?>