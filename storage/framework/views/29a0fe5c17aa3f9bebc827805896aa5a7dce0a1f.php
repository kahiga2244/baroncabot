<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="<?php echo asset('assets/landing/v2/css/wizard.css'); ?>">
</head>
<body>
   <div class="image-container set-full-height" style="background-image: url('http://demos.creative-tim.com/material-bootstrap-wizard/assets/img/wizard-book.jpg')">
      <!--   Creative Tim Branding   -->
      <a href="http://creative-tim.com" target="_blank">
           <div class="logo-container">
              <div class="logo">
                  <img src="http://demos.creative-tim.com/material-bootstrap-wizard/assets/img/new_logo.png">
              </div>
              <div class="brand">
                  Creative Tim
              </div>
          </div>
      </a>

     <!--  Made With Material Kit  -->
     <a href="http://demos.creative-tim.com/material-kit/index.html?ref=material-bootstrap-wizard" class="made-with-mk" target="_blank">
        <div class="brand">MK</div>
        <div class="made-with">Made with <strong>Material Kit</strong></div>
     </a>

         <!--   Big container   -->
         <div class="container">
            <div class="row">
               <div class="col-sm-8 col-sm-offset-2">
                  <!-- Wizard container -->
                  <div class="wizard-container">
                     <div class="card wizard-card" data-color="red" id="wizard">
                        <form action="" method="">
                        <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->
                        <div class="wizard-header">
                           <h3 class="wizard-title">
                              Book a Room
                           </h3>
                           <h5>This information will let us know more about you.</h5>
                        </div>
                        <div class="wizard-navigation">
                           <ul>
                              <li><a href="#details" data-toggle="tab">Account</a></li>
                              <li><a href="#captain" data-toggle="tab">Room Type</a></li>
                              <li><a href="#description" data-toggle="tab">Extra Details</a></li>
                           </ul>
                        </div>
                        <div class="tab-content">
                           <div class="tab-pane" id="details">
                              <div class="row">
                                 <div class="col-sm-12">
                                    <h4 class="info-text">1). Let's get started. What UK cities are you most interested in buying in?*</h4>
                                 </div>
                                 <div class="col-sm-4">
                                    <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select Birmingham">
                                       <input type="radio" name="city" value="Code">
                                       <div class="icon">
                                          <img src="<?php echo asset('assets/images/Birmingham.jpg'); ?>" alt="" class="img-fluid check-image" style="height: 200px; width:200px">
                                       </div>
                                       <h6>Birmingham</h6>
                                    </div>
                                 </div>
                                 <div class="col-sm-4">
                                    <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select Manchester.">
                                       <input type="radio" name="city" value="Manchester">
                                       <div class="icon">
                                          <img src="<?php echo asset('assets/images/Manchester.webp'); ?>" alt="" class="img-fluid check-image" style="height: 200px; width:200px">
                                       </div>
                                       <h6>Manchester</h6>
                                    </div>
                                 </div>
                                 <div class="col-sm-4">
                                    <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select Leeds.">
                                       <input type="radio" name="city" value="Leeds">
                                       <div class="icon">
                                          <img src="<?php echo asset('assets/images/Leeds.jpg'); ?>" alt="" class="img-fluid check-image" style="height: 200px; width:200px">
                                       </div>
                                       <h6>Leeds</h6>
                                    </div>
                                 </div>
                                 <div class="col-sm-4">
                                    <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this room if you're traveling with your family.">
                                       <input type="radio" name="job" value="Code">
                                       <div class="icon">
                                          <img src="<?php echo asset('assets/images/Birmingham.jpg'); ?>" alt="" class="img-fluid check-image" style="height: 200px; width:200px">
                                       </div>
                                       <h6>Birmingham</h6>
                                    </div>
                                 </div>
                                 <div class="col-sm-4">
                                    <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this room if you're traveling with your family.">
                                       <input type="radio" name="job" value="Code">
                                       <div class="icon">
                                          <img src="<?php echo asset('assets/images/Birmingham.jpg'); ?>" alt="" class="img-fluid check-image" style="height: 200px; width:200px">
                                       </div>
                                       <h6>Birmingham</h6>
                                    </div>
                                 </div>
                                 <div class="col-sm-4">
                                    <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this room if you're traveling with your family.">
                                       <input type="radio" name="job" value="Code">
                                       <div class="icon">
                                          <img src="<?php echo asset('assets/images/Birmingham.jpg'); ?>" alt="" class="img-fluid check-image" style="height: 200px; width:200px">
                                       </div>
                                       <h6>Birmingham</h6>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane" id="captain">
                              <h4 class="info-text">2). Have you invested in buy to let property before?</h4>
                              <div class="row">
                                 <div class="col-sm-10 col-sm-offset-1">
                                    <div class="form-group">
                                       <label class="">Yes
                                          <input type="radio" name="invested_before" value="Yes" class="required">
                                          <span class="checkmark"></span>
                                       </label>
                                       <label class="container_radio version_2">No
                                          <input type="radio" name="invested_before" value="No" class="required">
                                          <span class="checkmark"></span>
                                       </label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane" id="description">
                              <div class="row">
                                 <h4 class="info-text">3). What size properties are you interested in?</h4>
                                 <div class="form-group row">
                                    <div class="col-md-6">
                                       <label class="container_radio version_2">Studio
                                          <input type="radio" name="unit_type" value="Studio" class="required">
                                          <span class="checkmark"></span>
                                       </label>
                                    </div>
                                    <div class="col-md-6">
                                       <label class="container_radio version_2">1 Bedroom
                                          <input type="radio" name="unit_type" value="1 Bedroom" class="required">
                                          <span class="checkmark"></span>
                                       </label>
                                    </div>
                                    <div class="col-md-6">
                                       <label class="container_radio version_2">2 Bedrooms
                                          <input type="radio" name="unit_type" value="2 Bedrooms" class="required">
                                          <span class="checkmark"></span>
                                       </label>
                                    </div>
                                    <div class="col-md-6">
                                       <label class="container_radio version_2">3 Bedrooms
                                          <input type="radio" name="unit_type" value="3 Bedrooms" class="required">
                                          <span class="checkmark"></span>
                                       </label>
                                    </div>
                                    <div class="col-md-6">
                                       <label class="container_radio version_2">4 Bedrooms
                                          <input type="radio" name="unit_type" value="4 Bedrooms" class="required">
                                          <span class="checkmark"></span>
                                       </label>
                                    </div>
                                    <div class="col-md-6">
                                       <label class="container_radio version_2">5+ Bedrooms
                                          <input type="radio" name="unit_type" value="5+ Bedrooms" class="required">
                                          <span class="checkmark"></span>
                                       </label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane" id="budget">
                              <div class="row">
                                 <h4 class="info-text">4). What is your estimated budget?</h4>
                                 <div class="form-group row">
                                    <div class="col-md-6">
                                       <label class="container_radio version_2">£0 - £100,000
                                          <input type="radio" name="budget" value="£0 - £100,000" class="required">
                                          <span class="checkmark"></span>
                                       </label>
                                    </div>
                                    <div class="col-md-6">
                                       <label class="container_radio version_2">£100,000 - £200,000
                                          <input type="radio" name="budget" value="£100,000 - £200,000" class="required">
                                          <span class="checkmark"></span>
                                       </label>
                                    </div>
                                    <div class="col-md-6">
                                       <label class="container_radio version_2">£200,000 - £300,000
                                          <input type="radio" name="budget" value="£200,000 - £300,000" class="required">
                                          <span class="checkmark"></span>
                                       </label>
                                    </div>
                                    <div class="col-md-6">
                                       <label class="container_radio version_2">£300,000 - £400,000
                                          <input type="radio" name="budget" value="£300,000 - £400,000" class="required">
                                          <span class="checkmark"></span>
                                       </label>
                                    </div>
                                    <div class="col-md-6">
                                       <label class="container_radio version_2">£400,000 - £500,000
                                          <input type="radio" name="budget" value="£400,000 - £500,000" class="required">
                                          <span class="checkmark"></span>
                                       </label>
                                    </div>
                                    <div class="col-md-6">
                                       <label class="container_radio version_2">£500,000+
                                          <input type="radio" name="budget" value="£500,000+" class="required">
                                          <span class="checkmark"></span>
                                       </label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane" id="looking">
                              <div class="row">
                                 <h4 class="info-text">5). When are you looking to buy?</h4>
                                 <div class="form-group row">
                                    <div class="col-md-12">
                                       <label class="container_radio version_2">ASAP
                                          <input type="radio" name="when_to_buy" value="ASAP" class="required">
                                          <span class="checkmark"></span>
                                       </label>
                                    </div>
                                    <div class="col-md-12">
                                       <label class="container_radio version_2">This month
                                          <input type="radio" name="when_to_buy" value="this month" class="required">
                                          <span class="checkmark"></span>
                                       </label>
                                    </div>
                                    <div class="col-md-12">
                                       <label class="container_radio version_2">In the next 3 months
                                          <input type="radio" name="when_to_buy" value="In the next 3 months" class="required">
                                          <span class="checkmark"></span>
                                       </label>
                                    </div>
                                    <div class="col-md-12">
                                       <label class="container_radio version_2">Later this year
                                          <input type="radio" name="when_to_buy" value="Later this year" class="required">
                                          <span class="checkmark"></span>
                                       </label>
                                    </div>
                                    <div class="col-md-12">
                                       <label class="container_radio version_2">Next year
                                          <input type="radio" name="when_to_buy" value="Next year" class="required">
                                          <span class="checkmark"></span>
                                       </label>
                                    </div>
                                    <div class="col-md-12">
                                       <label class="container_radio version_2">I'm Just looking at the moment
                                          <input type="radio" name="when_to_buy" value="I'm Just looking at the moment" class="required">
                                          <span class="checkmark"></span>
                                       </label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane" id="email">
                              <div class="row">
                                 <h4 class="info-text">6). Great. Where shall we send your personalised list of properties? *</h4>
                                 <div class="form-group">
                                    <label for="minimum_hours_conctract">Enter email address</label>
                                    <input type="email" name="email" class="form-control required">
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane" id="first">
                              <div class="row">
                                 <h4 class="info-text">7). What's your first name? *</h4>
                                 <div class="form-group">
                                    <label for="minimum_hours_conctract">Enter first name</label>
                                    <input type="text" name="first_name" class="form-control required">
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane" id="last">
                              <div class="row">
                                 <h4 class="info-text">8). And your last name? *</h4>
                                 <div class="form-group">
                                    <label for="minimum_hours_conctract">Enter last name</label>
                                    <input type="text" name="last_name" class="form-control required">
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane" id="phone">
                              <div class="row">
                                 <h4 class="info-text">9). Finally _____, what's your contact number?*</h4>
                                 <div class="form-group">
                                    <input type="tel" name="phone_number" id="phone2" class="form-control" required>
                                    <span id="valid-msg2" class="hide">✓ Valid</span>
                                    <span id="error-msg2" class="hide"></span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="wizard-footer">
                           <div class="pull-right">
                              <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Next' />
                              <input type='button' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish' value='Finish' />
                           </div>
                           <div class="pull-left">
                              <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />

                              <div class="footer-checkbox">
                                 <div class="col-sm-12">
                                    <div class="checkbox">
                                       <label>
                                          <input type="checkbox" name="optionsCheckboxes">
                                       </label>
                                       Subscribe to our newsletter
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="clearfix"></div>
                        </div>
                     </form>
                  </div>
                  </div> <!-- wizard container -->
               </div>
            </div> <!-- row -->
         </div> <!--  big container -->

         <div class="footer">
            <div class="container text-center">
               Made with <i class="fa fa-heart heart"></i> by <a href="#" target="_blank">Baron & Cabot</a>. Free download <a href="http://www.creative-tim.com/product/material-bootstrap-wizard" target="_blank">here.</a>
            </div>
         </div>
   </div>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="<?php echo asset('assets/landing/v2/js/wizard.js'); ?>"></script>
</body>
</html>
<?php /**PATH /home/stone/Desktop/Projects/PHP/baroncabot/resources/views/landings/hold.blade.php ENDPATH**/ ?>