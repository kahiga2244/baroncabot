<?php $__env->startSection('title'); ?>Return on investment <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('url'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('image'); ?><?php echo asset('assets/favicons/android-icon-192x192.png'); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('stylesheets'); ?>
   <link rel="stylesheet" href="<?php echo asset('assets/css/bootstrap-side-modals.css'); ?>">
   <style>
      .list-unstyled {
         padding-left: 0;
         list-style: none;
      }
      .justify-content-between {
         justify-content: space-between!important;
      }

      .list-unstyled li {
         display: block;
         font-size: 20px;
      }
   </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
   <!-- home section start -->
   <section class="home-section layout-1 layout-6">
      <div class="home-main" style="background-image: url(<?php echo $cover; ?>);">
         <div class="container">
            <div class="row">
               <div class="col-lg-12" style="margin-bottom: -210px">
                  <h1 class="text-center"><?php echo $property->product_name; ?>,<?php echo $property->location; ?></h1>
               </div>
               <div class="col-lg-6">
                  <div class="container">
                     <div class="home-left">
                        <div>
                           <div class="home-slider-1 arrow-light slick-shadow">
                              <div>
                                 <div class="home-content">
                                    <h1 class="text-center">Before we can give you a predicted ROI we need to know a few things about you</h1>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="home-search-6">
                     <div class="vertical-search">
                        <div class="left-sidebar">
                           <form class="row gx-3" method="POST" action="<?php echo route('project.roi.calculate'); ?>">
                              <?php echo csrf_field(); ?>
                              <div class="col-md-6 mb-3">
                                 <label for="" class="text-white">Where do you live ?</label>
                                 <select name="country" class="form-control select2" required>
                                    <option value="">Choose country</option>
                                    <?php $__currentLoopData = $rates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <option value="<?php echo $rate->id; ?>"><?php echo $rate->country; ?> </b></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 </select>
                              </div>
                              <div class="col-md-6 mb-3">
                                 <label for="" class="text-white">Which unit would you like to get ?</label>
                                 <select name="unit" class="form-control select2" required>
                                    <option value="">Choose</option>
                                    <?php $__currentLoopData = $units; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <?php if($unit->status != 'Sold'): ?>
                                          <option value="<?php echo $unit->id; ?>"><?php echo $unit->product_name; ?> | ??<?php echo number_format($unit->price); ?> | Size <?php echo $unit->size; ?></option>
                                       <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 </select>
                              </div>
                              <div class="col-md-6 mb-3">
                                 <label for="" class="text-white">Do you want to buy in a company ?</label>
                                 <select name="company_buy" class="form-control" required>
                                    <option value="No">No</option>
                                    <option value="Yes">Yes</option>
                                    <option value="Not sure">Not sure</option>
                                 </select>
                              </div>
                              <div class="col-md-6 mb-3">
                                 <label for="" class="text-white">Will you live in the property ?</label>
                                 <select name="live_in" class="form-control" required>
                                    <option value="No">No</option>
                                    <option value="Yes">Yes</option>
                                 </select>
                              </div>
                              <div class="col-md-6 mb-3">
                                 <label for="" class="text-white">Will you use the property as an AirBnb or long term rent </label>
                                 <select name="lease_terms" class="form-control" required>
                                    <option value="Long term rent">Long term rent</option>
                                    <option value="AirBnb">AirBnb</option>
                                 </select>
                              </div>
                              
                              <div class="col-md-6 mb-3">
                                 <label for="" class="text-white">Cash purchase or mortgage</label>
                                 <select name="purchase_type" class="form-control" required>
                                    <option value="Cash">Cash</option>
                                    <option value="Mortgage">Mortgage</option>
                                 </select>
                              </div>
                              <input type="hidden" name="url" value="<?php echo $url; ?>">
                              <input type="hidden" name="session" value="<?php echo $session; ?>">
                              <div class="col-lg-12">
                                 <center><button type="submit" class="btn btn-gradient color-6 mt-3">Calculate ROI</button></center>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>  
   <!-- home section end -->

   <!-- property section start -->
   <section class="property-section bg-light" style="height: 80vh">
      <div class="container">
         <div class="row ratio_55">
            <div class="col">
               <div class="title-1">
                  <h2>YOUR CONDITIONS</h2>
               </div>
               <table class="table table-striped">
                  <thead>
                     <th width="1%">#</th>
                     <th>Condition</th>
                     <th>Value</th>
                  </thead>
                  <tbody>
                     <tr>
                        <td>1</td>
                        <td>Where do you live ?</td>
                        <td class="table-info"><b><?php echo $roi->country; ?></b></td>
                     </tr>
                     <tr>
                        <td>2</td>
                        <td>Mortgage Rate</td>
                        <td class="table-info"><b><?php echo $roi->mortgage_rate; ?>%</b></td>
                     </tr>
                     <tr>
                        <td>3</td>
                        <td>Which unit would you like to get ?</td>
                        <td class="table-info">
                           <?php if($roi->unitID): ?>
                           <?php
                              $prop = Property::property_details($roi->unitID);
                           ?>
                           <b>
                              UNIT <?php echo $prop->product_name; ?> | ??<?php echo number_format($prop->price); ?> | Size <?php echo $prop->size; ?>

                           </b>
                           <?php endif; ?>
                        </td>
                     </tr>
                     <tr>
                        <td>4</td>
                        <td>Do you want to buy in a company ?</td>
                        <td class="table-info"><b><?php echo $roi->company_buy; ?></b></td>
                     </tr>
                     <tr>
                        <td>5</td>
                        <td>Will you live in the property ?</td>
                        <td class="table-info"><b><?php echo $roi->live_in; ?></b></td>
                     </tr>
                     <tr>
                        <td>6</td>
                        <td>Will you use the property as an AirBnb or long term rent</td>
                        <td class="table-info"><b><?php echo $roi->lease_terms; ?></b></td>
                     </tr>
                     <tr>
                        <td>7</td>
                        <td>purchase or mortgage</td>
                        <td class="table-info"><b><?php echo $roi->purchase_type; ?></b></td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </section>

   <!-- property section start -->
   <section class="property-section bg-white" id="Summary">
      <div class="container">
         <div class="row ratio_55">
            <div class="col">
               <div class="title-1">
                  <h2>SUMMARY</h2>
               </div>
               <div class="row">
                  <div class="col-md-4">
                  </div>
                  <div class="col-md-8">
                     <table class="table table-striped">
                        <thead>
                           <th colspan="4"><center><h3>SNAPSHOT</h3></center></th>
                        </thead>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-4">
               <div class="row">
                  <div class="col-md-12 mb-2">
                     <div class="card overflow-hidden">
                        <div class="card-body">
                           <i class="position-absolute top-0 end-0 mt-4 me-3 fas fa-pound-sign fa-4x"></i>
                           <div class="mb-2 text-uppercase">5 Years Projected ROI</div>
                           <div>
                              <?php
                                 if($roi->equity_required){
                                    $year5Roi = ($year5 / $roi->equity_required) * 100;
                                 }else{
                                    $year5Roi = 0;
                                 }
                              ?>
                              <span class="h4">??<?php echo number_format($year5); ?></span>

                              <span class="small text-muted"><i class="fa fa-level-up"></i> <?php echo number_format($year5Roi,2); ?>%</span>
                           </div>
                           <small class="text-muted">Projected ROI</small>
                        </div>
                        <div class="progress" style="height: 4px;">
                           <div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="13" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12 mb-2">
                     <div class="card overflow-hidden">
                        <div class="card-body">
                           <i class="position-absolute top-0 end-0 mt-4 me-3 fas fa-pound-sign fa-4x"></i>
                           <div class="mb-2 text-uppercase">10 Years Projected ROI</div>
                           <div>
                              <?php
                                 if($roi->equity_required){
                                    $year10Roi = ($year10 / $roi->equity_required) * 100;
                                 }else{
                                    $year10Roi = 0;
                                 }
                              ?>
                              <span class="h4">??<?php echo number_format($year10); ?></span>
                              <span class="small text-success"><i class="fa fa-level-up"></i> <?php echo number_format($year10Roi,2); ?>%</span>
                           </div>
                           <small class="text-muted">Projected ROI</small>
                        </div>
                        <div class="progress" style="height: 4px;">
                           <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="13" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <ul class="list-unstyled">
                  <li class="mb-3 mt-3">
                     <div class="d-flex justify-content-between">
                        <span>Payment on Exchange</span>
                        <span>??<?php echo e(number_format($roi->payment_on_reservation_and_exchange)); ?></span>
                     </div>
                     <div class="progress" style="height: 5px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 100%%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </li>
                  <li class="mb-3 mt-3">
                     <div class="d-flex justify-content-between">
                        <span>Further deposit</span>
                        <span>??0</span>
                     </div>
                     <div class="progress" style="height: 5px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 100%;" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </li>
                  <li class="mb-3 mt-3">
                     <div class="d-flex justify-content-between">
                        <span>Payment on property completion</span>
                        <span>??<?php echo e(number_format($roi->payment_on_completion)); ?></span>
                     </div>
                     <div class="progress" style="height: 5px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 100%;" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </li>
                  <li class="mb-3 mt-3">
                     <div class="d-flex justify-content-between">
                        <span>Total Equity Required</span>
                        <span>??<?php echo e(number_format($roi->equity_required )); ?></span>
                     </div>
                     <div class="progress" style="height: 5px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="col-md-4">
               <ul class="list-unstyled">
                  <li class="mb-3 mt-3">
                     <div class="d-flex justify-content-between">
                        <span>Mortgage principle</span>
                        <span>??<?php echo e(number_format($roi->mortgage_amount)); ?></span>
                     </div>
                     <div class="progress" style="height: 5px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 100%%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </li>
                  <li class="mb-3 mt-3">
                     <div class="d-flex justify-content-between">
                        <span>Monthly income</span>
                        <span>??<?php echo number_format($roi->monthly_income); ?></span>
                     </div>
                     <div class="progress" style="height: 5px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 100%;" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </li>
                  <li class="mb-3 mt-3">
                     <div class="d-flex justify-content-between">
                        <span>Mortgage type - <?php echo e($roi->mortgage_type); ?></span>
                        <span>??<?php if($roi->mortgage_type == 'Interest Only'): ?><?php echo number_format($roi->mortgage_repayment); ?><?php else: ?> 0 <?php endif; ?></span>
                     </div>
                     <div class="progress" style="height: 5px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 100%;" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </li>
                  <li class="mb-3 mt-3">
                     <div class="d-flex justify-content-between">
                        <span>Projected monthly cash pos.</span>
                        <span class="text-bold">??<?php echo number_format($roi->monthly_income - $roi->mortgage_repayment); ?></span>
                     </div>
                     <div class="progress" style="height: 5px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="col-md-12 mt-5 mb-5" style="height: 400px">
               <h3 class="text-center mt-5">Property Value - Year End VS Market capital escalation</h3>
               <div id="chart-container"></div>
            </div>
            
         </div>
      </div>
   </section>

   <!-- property section end -->
   <section class="property-section bg-light" id="Summary">
      <div class="container">
         <div class="faq-questions">
            <div id="accordion" class="accordion">
               <div class="card">
                  <div class="card-header">
                  <a class="card-link" data-bs-toggle="collapse" href="#initial" aria-expanded="true">
                     INITIAL COSTS
                  </a>
                  </div>
                  <div id="initial" class="collapse show" data-bs-parent="#accordion">
                     <div class="card-body">
                        <table class="table table-striped">
                           <thead>
                              <th width="1%">#</th>
                              <th>Item</th>
                              <th>Amount</th>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>1</td>
                                 <td><a href="#"  data-bs-toggle="modal" data-bs-target="#ClientReservationFee">Client Reservation fee <i class="fas fa-info-circle"></i></a></td>
                                 <td>
                                    <?php if($roi->client_reservation_fee): ?><?php echo e(number_format($roi->client_reservation_fee)); ?><?php endif; ?> per Unit</td>
                              </tr>
                              <tr>
                                 <td>2</td>
                                 <td><a href="#"  data-bs-toggle="modal" data-bs-target="#right_modal_sm">Exchange deposit <i class="fas fa-info-circle"></i></a></td>
                                 <td><?php echo e($roi->exchange_deposit_percentage); ?>% of purchase price (<?php echo e(number_format($roi->exchange_deposit)); ?>)</td>
                              </tr>
                              <tr>
                                 <td>3</td>
                                 <td><a href="#"  data-bs-toggle="modal" data-bs-target="#LegalFees">Legal fees <i class="fas fa-info-circle"></i></a></td>
                                 <td><?php echo e(number_format($roi->legal_fees)); ?> based on TBC</td>
                              </tr>
                              <tr>
                                 <td>4</td>
                                 <td><a href="#"  data-bs-toggle="modal" data-bs-target="#get-ground"><i>Company costs <i class="fas fa-info-circle"></i></i></a></td>
                                 <td><?php echo e(number_format($roi->get_ground)); ?> company set up fee</td>
                              </tr>
                              <tr class="table-info">
                                 <td></td>
                                 <td><b>Payment on Reservation and Exchange</b></td>
                                 <td><b><?php echo e(number_format($roi->payment_on_reservation_and_exchange)); ?> ??</b></td>
                              </tr>
                           </tbody>
                        </table>
                        
                     </div>
                  </div>

                  <!-- Modal -->
                  <div class="modal fade" id="initialCost" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Initial Cost Values</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                           </div>
                           <form action="<?php echo route('project.roi.changes'); ?>" method="POST">
                              <?php echo csrf_field(); ?>
                              <div class="modal-body">
                                 <div class="form-group">
                                    <label for="">Company costs</label>
                                    <select name="get_ground" class="form-control" required>
                                       <option value="">Choose</option>
                                       <option value="0">No</option>
                                       <option value="499">Non-uk</option>
                                       <option value="149">UK</option>
                                    </select>
                                 </div>
                                 <input type="hidden" name="section" value="Initial Cost Values">
                                 <input type="hidden" name="property_url" value="<?php echo $url; ?>" required>
                                 <center><button type="submit" class="btn btn-primary">Update changes</button></center>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>

               </div>

               <div class="card">
                  <div class="card-header">
                     <a class="collapsed card-link" data-bs-toggle="collapse" href="#final"> FINAL COSTS AT COMPLETION</a>
                  </div>

                  <div id="final" class="collapse" data-bs-parent="#accordion">
                     <div class="card-body">
                        <table class="table table-striped">
                           <thead>
                              <th width="1%">#</th>
                              <th>Item</th>
                              <th></th>
                              <th>Total</th>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>1</td>
                                 <td><a href="#"  data-bs-toggle="modal" data-bs-target="#finalcapital">Final capital payment <i class="fas fa-info-circle"></i></a></td>
                                 <td><?php echo e($roi->final_capital_payment_percentage); ?>% of the purchase price </td>
                                 <td><?php echo e(number_format($roi->final_capital_payment)); ?></td>
                              </tr>
                              <tr>
                                 <td>2</td>
                                 <td><a href="#"  data-bs-toggle="modal" data-bs-target="#stampduty">Stamp duty <i class="fas fa-info-circle"></i></a></td>
                                 <td><?php echo number_format($roi->stamp_duty); ?> based on the purchase price</td>
                                 <td><?php echo number_format($roi->stamp_duty); ?></td>
                              </tr>
                              <tr>
                                 <td>3</td>
                                 <td><a href="#"  data-bs-toggle="modal" data-bs-target="#mortgagecosts">Mortgage costs <i class="fas fa-info-circle"></i></a></td>
                                 <td><?php echo e(number_format($roi->mortgage_costs)); ?> <i>1.5%</i> of the loan amount</td>
                                 <td><?php echo e(number_format($roi->mortgage_costs)); ?></td>
                              </tr>
                              <tr>
                                 <td>4</td>
                                 <td><a href="#"  data-bs-toggle="modal" data-bs-target="#MortgageBrokerFee">Mortgage broker fee <i class="fas fa-info-circle"></i></a></td>
                                 <td><?php echo e(number_format($roi->mortgage_broker_fee)); ?> based on TBC</td>
                                 <td><?php echo e(number_format($roi->mortgage_broker_fee)); ?></td>
                              </tr>
                              <tr>
                                 <td>5</td>
                                 <td><a href="#"  data-bs-toggle="modal" data-bs-target="#Valuationfee">Valuation fee <i class="fas fa-info-circle"></i></a></td>
                                 <td><?php echo e(number_format($roi->valuation_fee)); ?> based on the purchase price</td>
                                 <td><?php echo e(number_format($roi->valuation_fee)); ?></td>
                              </tr>
                              <tr>
                                 <td>6</td>
                                 <td><a href="#"  data-bs-toggle="modal" data-bs-target="#FurniturePack">Furniture pack (Exc. VAT) <i class="fas fa-info-circle"></i></a></td>
                                 <td><?php echo e(number_format($property->furniture_pack)); ?> based on unit type</td>
                                 <td><?php echo e(number_format($property->furniture_pack)); ?></td>
                              </tr>
                              <tr>
                                 <td>7</td>
                                 <td><a href="#"  data-bs-toggle="modal" data-bs-target="#LandRegistry">Land registry fees <i class="fas fa-info-circle"></i></a></td>
                                 <td><?php echo number_format($roi->land_registry_fees); ?> based on UK Dpt. Of Land Reg. Req.</td>
                                 <td><?php echo number_format($roi->land_registry_fees); ?> </td>
                              </tr>
                              <tr class="table-info">
                                 <td></td>
                                 <td></td>
                                 <td><b>Payment On Completion</b></td>
                                 <td><b><?php echo e(number_format($roi->payment_on_completion)); ?> ??</b></td>
                              </tr>
                              <tr class="table-primary">
                                 <td></td>
                                 <td></td>
                                 <td><b>Total Equity Required</b></td>
                                 <td><b><?php echo e(number_format($roi->equity_required )); ?> ??</b></td>
                              </tr>
                              <tr class="table-warning">
                                 <td></td>
                                 <td></td>
                                 <td><b>Mortgage Amount(<?php echo e($roi->mortgage_lending_value); ?>%)</b></td>
                                 <td><b><?php echo e(number_format($roi->mortgage_amount)); ?> ??</b></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>

               <div class="card">
                  <div class="card-header">
                  <a class="collapsed card-link" data-bs-toggle="collapse" href="#collapseTwo">PROJECT MONTHLY NET INCOME(PRE MORTGAGE)</a>
                  </div>
                  <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                     <div class="card-body">
                        <table class="table table-striped">
                           <thead>
                              <th width="1%">#</th>
                              <th>Item</th>
                              <th></th>
                              <th>Total</th>
                           </thead>
                           <tbody>
                              <tr>
                                 <td></td>
                                 <td><b>Estimated Gross Rental Income</b></td>
                                 <td></td>
                                 <td><?php echo $roi->estimated_gross_rental_income; ?> ??</td>
                              </tr>
                              <tr class="table-info">
                                 <td></td>
                                 <td><b>Gross Yield </b></td>
                                 <td></td>
                                 <td><?php echo number_format($roi->gross_yield,2); ?>%</td>
                              </tr>
                              <tr>
                                 <td>1</td>
                                 <td>GetGround admin fee</td>
                                 <td><?php echo $roi->get_ground; ?> per Month</td>
                                 <td><?php echo $roi->get_ground; ?> ??</td>
                              </tr>
                              <tr>
                                 <td>2</td>
                                 <td>Estimated service charge</td>
                                 <td><?php echo $roi->estimated_service_charge_rate; ?> psf</td>
                                 <td><?php echo number_format($roi->estimated_service_charge); ?> ??</td>
                              </tr>
                              <tr>
                                 <td>3</td>
                                 <td>Redstone management fee (Exc. VAT)</td>
                                 <td><?php echo number_format($roi->management_fee_rate); ?>% of rental income </td>
                                 <td><?php echo number_format($roi->management_fee); ?> ??</td>
                              </tr>
                              <tr>
                                 <td>4</td>
                                 <td>Ground rent</td>
                                 <td><?php echo number_format($roi->ground_rent); ?> per month </td>
                                 <td><?php echo number_format($roi->ground_rent); ?> ??</td>
                              </tr>
                              <?php if($roi->lease_terms == 'AirBnb'): ?>
                                 <tr>
                                    <td>5</td>
                                    <td> Listing platform fee </td>
                                    <td><?php echo number_format($roi->listing_fee); ?> <b><small>15%</small></b> of revenue</td>
                                    <td><?php echo number_format($roi->listing_fee); ?> ??</td>
                                 </tr>
                                 <tr>
                                    <td>6</td>
                                    <td>MPH management fee</td>
                                    <td><?php echo number_format($roi->mph_fee); ?> <b><small>18%</small></b>+VAT of revenue</td>
                                    <td><?php echo number_format($roi->mph_fee); ?> ??</td>
                                 </tr>
                              <?php endif; ?>
                              <tr class="table-warning">
                                 <td></td>
                                 <td></td>
                                 <td><b><i>Net Monthly Expenses</i></b></td>
                                 <td><?php echo number_format($roi->monthly_expenses); ?> ??</td>
                              </tr>
                              <tr class="table-success">
                                 <td></td>
                                 <td></td>
                                 <td><b><i>Monthly Income</i></b></td>
                                 <td><?php echo number_format($roi->monthly_income); ?> ??</td>
                              </tr>
                              <tr class="table-primary">
                                 <td></td>
                                 <td></td>
                                 <td><b><i>Net Yield</i></b></td>
                                 <td><?php echo number_format($roi->net_yield, 2); ?>%</td>
                              </tr>
                              <tr class="table-primary">
                                 <td></td>
                                 <td></td>
                                 <td><b><i>Mortgage type - <?php echo e($roi->mortgage_type); ?></i></b></td>
                                 <td>
                                    <?php echo number_format($roi->mortgage_repayment, 2); ?> ??
                                 </td>
                                 <tr class="table-info">
                                    <td></td>
                                    <td></td>
                                    <td><b><i>Projected Net Monthly Cash Position in Year 1</i></b></td>
                                    <td><?php echo number_format($roi->monthly_income - $roi->mortgage_repayment); ?> ??</td>
                                 </tr>
                              </tr>
                           </tbody>
                        </table>
                        
                     </div>
                  </div>

                  <!-- Modal -->
                  <div class="modal fade" id="projectMonthly" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Project Monthly net income</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                           </div>
                           <div class="modal-body">
                              <form action="<?php echo route('project.roi.changes'); ?>" method="POST">
                                 <?php echo csrf_field(); ?>
                                 <input type="hidden" name="section" value="Project Monthly net income">
                                 <input type="hidden" name="property_url" value="<?php echo $url; ?>" required>
                                 <div class="form-group">
                                    <label for="">Where do you live ?</label>
                                    <select name="country" class="form-control select2" required>
                                       <?php if($roi->country): ?>
                                          <option value="<?php echo $roi->mortgage_rate; ?>"><?php echo $roi->country; ?></option>
                                       <?php else: ?>
                                          <option value="">Choose country</option>
                                       <?php endif; ?>
                                       <?php $__currentLoopData = $rates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <option value="<?php echo $rate->id; ?>"><?php echo $rate->country; ?> </b></option>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                 </div>
                                 <div class="form-group">
                                    <label>Change unit</label>
                                    <select name="unit" class="form-control select2" required>
                                       <?php if($roi->unitID): ?>
                                          <option value="<?php echo $roi->unitID; ?>"><?php echo $roi->unitID; ?></option>
                                       <?php else: ?>
                                          <option value="">Choose</option>
                                       <?php endif; ?>
                                       <?php $__currentLoopData = $units; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <option value="<?php echo $unit->id; ?>"><?php echo $unit->product_name; ?> | ??<?php echo number_format($unit->price); ?> | Size <?php echo $unit->size; ?></option>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <input type="hidden" name="property_url" value="<?php echo $url; ?>" required>
                                 </div>
                                 <div class="form-group">
                                    <label for="">Mortgage Type</label>
                                    <select name="mortgage_type" class="form-control">
                                       <?php if($roi->mortgage_type): ?>
                                          <option value="<?php echo $roi->mortgage_type; ?>"><?php echo $roi->mortgage_type; ?></option>
                                       <?php else: ?>
                                          <option value="">Choose</option>
                                       <?php endif; ?>
                                       <option value="Interest Only">Interest Only</option>
                                       <option value="Principle & Interest">Principle & Interest</option>
                                       <option value="None">None</option>
                                    </select>
                                 </div>
                                 <div class="form-group">
                                    <label for="">Estimated gross rental income</label>
                                    <input type="number" name="estimated_gross_rental_income" class="form-control" value="<?php echo $roi->estimated_gross_rental_income; ?>">
                                 </div>
                                 <div class="form-group">
                                    <label for="">Get Ground</label>
                                    <select name="get_ground" class="form-control">
                                       <?php if($roi->estimated_gross_rental_income): ?>
                                          <option value="<?php echo $roi->get_ground; ?>"><?php echo $roi->get_ground; ?></option>
                                       <?php else: ?>
                                          <option value="">Choose</option>
                                       <?php endif; ?>
                                       <option value="0">No</option>
                                       <option value="499">Non-uk</option>
                                       <option value="149">UK</option>
                                    </select>
                                 </div>

                                 
                                 
                                 <button type="submit" class="btn btn-primary">Save changes</button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               

               <div class="card">
                  <div class="card-header">
                     <a class="collapsed card-link" data-bs-toggle="collapse" href="#PropertyValue">ANNUAL NET CAPITAL APPRECIATION</a>
                  </div>
                  <div id="PropertyValue" class="collapse" data-bs-parent="#accordion">
                     <div class="card-body">
                        <table class="table table-bordered table-striped table-responsive">
                           <thead>
                              <th></th>
                              <th>Year 1</th>
                              <th>Year 2</th>
                              <th>Year 3</th>
                              <th>Year 4</th>
                              <th>Year 5</th>
                              <th>Year 6</th>
                              <th>Year 7</th>
                              <th>Year 8</th>
                              <th>Year 9</th>
                              <th>Year 10</th>
                           </thead>
                           <tbody>
                              <tr>
                                 <td><b>Property Value</b></td>
                                 <td><?php echo number_format($roi->property_value_year_1); ?></td>
                                 <td><?php echo number_format($roi->property_value_year_2); ?></td>
                                 <td><?php echo number_format($roi->property_value_year_3); ?></td>
                                 <td><?php echo number_format($roi->property_value_year_4); ?></td>
                                 <td><?php echo number_format($roi->property_value_year_5); ?></td>
                                 <td><?php echo number_format($roi->property_value_year_6); ?></td>
                                 <td><?php echo number_format($roi->property_value_year_7); ?></td>
                                 <td><?php echo number_format($roi->property_value_year_8); ?></td>
                                 <td><?php echo number_format($roi->property_value_year_9); ?></td>
                                 <td><?php echo number_format($roi->property_value_year_10); ?></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>

               <div class="card">
                  <div class="card-header">
                     <a class="collapsed card-link" data-bs-toggle="collapse" href="#incomeCapital">INCOME & CAPITAL APPRECIATION</a>
                  </div>
                  <div id="incomeCapital" class="collapse" data-bs-parent="#accordion">
                     <div class="card-body">
                        <table class="table table-bordered table-striped table-responsive">
                           <thead>
                              <th>Years</th>
                              <th>1</th>
                              <th>2</th>
                              <th>3</th>
                              <th>4</th>
                              <th>5</th>
                              <th>6</th>
                              <th>7</th>
                              <th>8</th>
                              <th>9</th>
                              <th>10</th>
                           </thead>
                           <tbody>
                              
                              <tr style="display: none">
                                 <td><b>Market rent escalation</b></td>
                                 <td><?php echo number_format($roi->rent_escalation_1,2); ?></td>
                                 <td><?php echo number_format($roi->rent_escalation_2,2); ?></td>
                                 <td><?php echo number_format($roi->rent_escalation_3,2); ?></td>
                                 <td><?php echo number_format($roi->rent_escalation_4,2); ?></td>
                                 <td><?php echo number_format($roi->rent_escalation_5,2); ?></td>
                                 <td><?php echo number_format($roi->rent_escalation_6,2); ?></td>
                                 <td><?php echo number_format($roi->rent_escalation_7,2); ?></td>
                                 <td><?php echo number_format($roi->rent_escalation_8,2); ?></td>
                                 <td><?php echo number_format($roi->rent_escalation_9,2); ?></td>
                                 <td><?php echo number_format($roi->rent_escalation_10,2); ?></td>
                              </tr>

                              
                              <tr>
                                 <td><b>Rental Income</b></td>
                                 <td><?php echo number_format($roi->rental_income_1); ?></td>
                                 <td><?php echo number_format($roi->rental_income_2); ?></td>
                                 <td><?php echo number_format($roi->rental_income_3); ?></td>
                                 <td><?php echo number_format($roi->rental_income_4); ?></td>
                                 <td><?php echo number_format($roi->rental_income_5); ?></td>
                                 <td><?php echo number_format($roi->rental_income_6); ?></td>
                                 <td><?php echo number_format($roi->rental_income_7); ?></td>
                                 <td><?php echo number_format($roi->rental_income_8); ?></td>
                                 <td><?php echo number_format($roi->rental_income_9); ?></td>
                                 <td><?php echo number_format($roi->rental_income_10); ?></td>
                              </tr>

                              
                              <tr style="display: none">
                                 <td><b>Market capital escalation</b></td>
                                 <td>
                                    <?php
                                       $psf1 = $unitProp->price_per_sqf;
                                       $escalation1 = $psf1 * ((100+$forecast->rental_capital_appreciation_1)/100);
                                    ?>
                                    <?php echo number_format($escalation1,2); ?>

                                 </td>
                                 <td>
                                    <?php
                                       $psf2 = $escalation1;
                                       $escalation2 = $psf2 * ((100+$forecast->rental_capital_appreciation_2)/100);
                                    ?>
                                    <?php echo number_format($escalation2,2); ?>

                                 </td>
                                 <td>
                                    <?php
                                       $psf3 = $escalation2;
                                       $escalation3 = $psf3 * ((100+$forecast->rental_capital_appreciation_3)/100);
                                    ?>
                                    <?php echo number_format($escalation3,2); ?>

                                 </td>
                                 <td>
                                    <?php
                                       $psf4 = $escalation3;
                                       $escalation4 = $psf4 * ((100+$forecast->rental_capital_appreciation_4)/100);
                                    ?>
                                    <?php echo number_format($escalation4,2); ?>

                                 </td>
                                 <td>
                                    <?php
                                       $psf5 = $escalation4;
                                       $escalation5 = $psf5 * ((100+$forecast->rental_capital_appreciation_5)/100);
                                    ?>
                                    <?php echo number_format($escalation5,2); ?>

                                 </td>
                                 <td>
                                    <?php
                                       $psf6 = $escalation5;
                                       $escalation6 = $psf6 * ((100+$forecast->rental_capital_appreciation_6)/100);
                                    ?>
                                    <?php echo number_format($escalation6,2); ?>

                                 </td>
                                 <td>
                                    <?php
                                       $psf7 = $escalation6;
                                       $escalation7 = $psf7 * ((100+$forecast->rental_capital_appreciation_7)/100);
                                    ?>
                                    <?php echo number_format($escalation7,2); ?>

                                 </td>
                                 <td>
                                    <?php
                                       $psf8 = $escalation7;
                                       $escalation8 = $psf8 * ((100+$forecast->rental_capital_appreciation_8)/100);
                                    ?>
                                    <?php echo number_format($escalation8,2); ?>

                                 </td>
                                 <td>
                                    <?php
                                       $psf9 = $escalation8;
                                       $escalation9 = $psf9 * ((100+$forecast->rental_capital_appreciation_9)/100);
                                    ?>
                                    <?php echo number_format($escalation9,2); ?>

                                 </td>
                                 <td>
                                    <?php
                                       $psf10 = $escalation9;
                                       $escalation10 = $psf10 * ((100+$forecast->rental_capital_appreciation_10)/100);
                                    ?>
                                    <?php echo number_format($escalation10,2); ?>

                                 </td>

                                 <?php
                                    $escalationValue = array(
                                       intval($escalation1),
                                       intval($escalation2),
                                       intval($escalation3),
                                       intval($escalation4),
                                       intval($escalation5),
                                       intval($escalation6),
                                       intval($escalation7),
                                       intval($escalation8),
                                       intval($escalation9),
                                       intval($escalation10)
                                    );
                                 ?>

                              </tr>

                              
                              <tr>
                                 <td><b>Property Value - Year Beginning</b></td>
                                 <td>
                                    <?php echo number_format($unitProp->price); ?>

                                 </td>
                                 <td>
                                    <?php echo number_format($roi->year_1); ?>

                                 </td>
                                 <td>
                                    <?php echo number_format($roi->year_3); ?>

                                 </td>
                                 <td>
                                    <?php echo number_format($roi->year_4); ?>

                                 </td>
                                 <td>
                                    <?php echo number_format($roi->year_5); ?>

                                 </td>
                                 <td>
                                    <?php echo number_format($roi->year_6); ?>

                                 </td>
                                 <td>
                                    <?php echo number_format($roi->year_7); ?>

                                 </td>
                                 <td>
                                    <?php echo number_format($roi->year_8); ?>

                                 </td>
                                 <td>
                                    <?php echo number_format($roi->year_9); ?>

                                 </td>
                                 <td>
                                    <?php echo number_format($roi->year_10); ?>

                                 </td>
                              </tr>

                              
                              <tr style="display: none">
                                 <td><b>Capital Appreciation</b></td>
                                 <td>
                                    <?php
                                       $capValue1 = ($escalation1 * $unitProp->size) - $unitProp->price;
                                    ?>
                                    <?php echo number_format($capValue1); ?>

                                 </td>
                                 <td>
                                    <?php
                                       $capValue2 = ($escalation2 * $unitProp->size) - $roi->year_1;
                                    ?>
                                    <?php echo number_format($capValue2); ?>

                                 </td>
                                 <td>
                                    <?php
                                       $capValue3 = ($escalation3 * $unitProp->size) - $roi->year_2;
                                    ?>
                                    <?php echo number_format($capValue3); ?>

                                 </td>
                                 <td>
                                    <?php
                                       $capValue4 = ($escalation4 * $unitProp->size) - $roi->year_3;
                                    ?>
                                    <?php echo number_format($capValue4); ?>

                                 </td>
                                 <td>
                                    <?php
                                       $capValue5 = ($escalation5 * $unitProp->size) - $roi->year_4;
                                    ?>
                                    <?php echo number_format($capValue5); ?>

                                 </td>
                                 <td>
                                    <?php
                                       $capValue6 = ($escalation6 * $unitProp->size) - $roi->year_5;
                                    ?>
                                    <?php echo number_format($capValue6); ?>

                                 </td>
                                 <td>
                                    <?php
                                       $capValue7 = ($escalation7 * $unitProp->size) - $roi->year_6;
                                    ?>
                                    <?php echo number_format($capValue7); ?>

                                 </td>
                                 <td>
                                    <?php
                                       $capValue8 = ($escalation8 * $unitProp->size) - $roi->year_7;
                                    ?>
                                    <?php echo number_format($capValue8); ?>

                                 </td>
                                 <td>
                                    <?php
                                       $capValue9 = ($escalation9 * $unitProp->size) - $roi->year_8;
                                    ?>
                                    <?php echo number_format($capValue9); ?>

                                 </td>
                                 <td>
                                    <?php
                                       $capValue10 = ($escalation10 * $unitProp->size) - $roi->year_9;
                                    ?>
                                    <?php echo number_format($capValue10); ?>

                                 </td>
                                 <?php
                                    $capitalAppreciationValue = array(
                                       intval($capValue1),
                                       intval($capValue2),
                                       intval($capValue3),
                                       intval($capValue4),
                                       intval($capValue5),
                                       intval($capValue6),
                                       intval($capValue7),
                                       intval($capValue8),
                                       intval($capValue9),
                                       intval($capValue10)
                                    );
                                 ?>
                              </tr>

                              
                              <tr>
                                 <td><b>Property Value - Year End</b></td>
                                 <td>
                                    <?php echo number_format($roi->annual_1); ?>

                                 </td>
                                 <td>
                                    <?php echo number_format($roi->annual_2); ?>

                                 </td>
                                 <td>
                                    <?php echo number_format($roi->annual_3); ?>

                                 </td>
                                 <td>
                                    <?php echo number_format($roi->annual_4); ?>

                                 </td>
                                 <td>
                                    <?php echo number_format($roi->annual_5); ?>

                                 </td>
                                 <td>
                                    <?php echo number_format($roi->annual_6); ?>

                                 </td>
                                 <td>
                                    <?php echo number_format($roi->annual_7); ?>

                                 </td>
                                 <td>
                                    <?php echo number_format($roi->annual_8); ?>

                                 </td>
                                 <td>
                                    <?php echo number_format($roi->annual_9); ?>

                                 </td>
                                 <td>
                                    <?php echo number_format($roi->annual_10); ?>

                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>

               

               
            </div>
         </div>
      </div>
   </section>

   <section class="property-section bg-light" id="Summary">
      <div class="container">
         <center>
            <h4>Cash flow link for sharing</h4>
            <a href=""><?php echo route('project.roi',$url); ?>?session=<?php echo e($session); ?></a>
         </center>
      </div>
   </section>

   <div class="modal right fade" id="right_modal_sm" tabindex="-1" role="dialog" aria-bs-labelledby="right_modal_sm">
      <div class="modal-dialog modal-sm" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Exchange deposit</h5>
               <button type="button" class="close" data-bs-dismiss="modal" aria-bs-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
            <p>This is the amount you pay to your solicitors and which is passed to the developer. This amount is minus the reservation fee. So if its 20% deposit, it is 20% minus the ??5,000. The deposit is 20% as it needs to be high enough that both parties are happy that the commitment has been made. In more expensive properties this deposit is lower. </p>
            </div>
            <div class="modal-footer modal-footer-fixed">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
         </div>
      </div>
   </div>

   <div class="modal right fade" id="get-ground" tabindex="-1" role="dialog" aria-bs-labelledby="right_modal_sm">
      <div class="modal-dialog modal-sm" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Company costs</h5>
               <button type="button" class="close" data-bs-dismiss="modal" aria-bs-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
            <p>These costs only take place IF you decide to put the property in a company name rather than your own name. Unsure of whether you should? Chat to our staff about the plus and minus of doing so</p>
            </div>
            <div class="modal-footer modal-footer-fixed">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
         </div>
      </div>
   </div>

   <div class="modal right fade" id="finalcapital" tabindex="-1" role="dialog" aria-bs-labelledby="right_modal_sm">
      <div class="modal-dialog modal-sm" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Final capital payment</h5>
            </div>
            <div class="modal-body">
            <p>This is based on what your mortgage provider requires as a deposit. Most people will need to put down 20% to 40% on a buy to let mortgage. The more expensive the property, and lower risk client the lower deposit needed. If the bank need more than the deposit already paid this section shows the difference. This is only paid when the property is finished.</p>
            </div>
            <div class="modal-footer modal-footer-fixed">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
         </div>
      </div>
   </div>

   <div class="modal right fade" id="ClientReservationFee" tabindex="-1" role="dialog" aria-bs-labelledby="right_modal_sm">
      <div class="modal-dialog modal-sm" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Client Reservation Fee</h5>
            </div>
            <div class="modal-body">
            <p>This is a none refundable fee which allows us to hold the unit while the legal process takes place. When this is paid the developer also pays their solicitors to interact with yours. This keeps your property from being taken by another investor during this period</p>
            </div>
            <div class="modal-footer modal-footer-fixed">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
         </div>
      </div>
   </div>

   <div class="modal right fade" id="LegalFees" tabindex="-1" role="dialog" aria-bs-labelledby="right_modal_sm">
      <div class="modal-dialog modal-sm" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Legal fees (Inc. VAT)</h5>
            </div>
            <div class="modal-body">
            <p>These are an assumed fee. If you request more work to be done it can increase. Solicitors are there to protect you. They are completely independent from us and we have no control over them. This process can involve a lot of compliance, the market needs this to keep everyone safe, and keep the UK as the number 1 most transparent market in the world.</p>
            </div>
            <div class="modal-footer modal-footer-fixed">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
         </div>
      </div>
   </div>

   <div class="modal right fade" id="stampduty" tabindex="-1" role="dialog" aria-bs-labelledby="right_modal_sm">
      <div class="modal-dialog modal-sm" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Stamp duty</h5>
            </div>
            <div class="modal-body">
            <p>This is a tax for all home buyers in UK. It ranges depending on if you are living in the property (cheaper) or if you are a landlord. </p>
            </div>
            <div class="modal-footer modal-footer-fixed">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
         </div>
      </div>
   </div>

   <div class="modal right fade" id="mortgagecosts" tabindex="-1" role="dialog" aria-bs-labelledby="right_modal_sm">
      <div class="modal-dialog modal-sm" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Mortgage costs </h5>
            </div>
            <div class="modal-body">
            <p>These are additional costs we expect you to incur when the mortgage is take out. This is charged by the lender so we have no control over these. Sometimes they are added to the mortgage amount, but we add this in either way so we can estimate the real ROI. </p>
            </div>
            <div class="modal-footer modal-footer-fixed">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
         </div>
      </div>
   </div>

   <div class="modal right fade" id="MortgageBrokerFee" tabindex="-1" role="dialog" aria-bs-labelledby="right_modal_sm">
      <div class="modal-dialog modal-sm" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Mortgage broker fee</h5>
            </div>
            <div class="modal-body">
            <p>If you need to use a mortgage broker to lower your mortgage costs they will charge a fee.</p>
            </div>
            <div class="modal-footer modal-footer-fixed">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
         </div>
      </div>
   </div>

   <div class="modal right fade" id="Valuationfee" tabindex="-1" role="dialog" aria-bs-labelledby="right_modal_sm">
      <div class="modal-dialog modal-sm" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Valuation fee </h5>
            </div>
            <div class="modal-body">
            <p>This is what the mortgage company require when the property is completed.</p>
            </div>
            <div class="modal-footer modal-footer-fixed">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
         </div>
      </div>
   </div>

   <div class="modal right fade" id="FurniturePack" tabindex="-1" role="dialog" aria-bs-labelledby="right_modal_sm">
      <div class="modal-dialog modal-sm" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Furniture pack (Exc. VAT)</h5>
            </div>
            <div class="modal-body">
            <p>If you choose to furnish the property this is where the cost will go. Normally there is different levels of furniture pack depending on what you would like in the property. Remember most properties already come with 'white goods' such as oven, fridge, freezer etc.</p>
            </div>
            <div class="modal-footer modal-footer-fixed">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
         </div>
      </div>
   </div>

   <div class="modal right fade" id="Parking" tabindex="-1" role="dialog" aria-bs-labelledby="right_modal_sm">
      <div class="modal-dialog modal-sm" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Parking</h5>
            </div>
            <div class="modal-body">
            <p>If there is parking the price is added here.</p>
            </div>
            <div class="modal-footer modal-footer-fixed">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
         </div>
      </div>
   </div>

   <div class="modal right fade" id="LandRegistry" tabindex="-1" role="dialog" aria-bs-labelledby="right_modal_sm">
      <div class="modal-dialog modal-sm" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Land registry fee</h5>
            </div>
            <div class="modal-body">
            <p>All properties in England are digitally registered under your name. This means no one can ever be confused about the ownership of your property and UK solicitors can check this online.</p>
            </div>
            <div class="modal-footer modal-footer-fixed">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
         </div>
      </div>
   </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
   <script src="<?php echo asset('assets/js/highcharts/highcharts.js'); ?>"></script>

   <script>
      var yearEnd       = <?php echo json_encode($propertyValueYearEnd); ?>

      var escalationValue = <?php echo json_encode($escalationValue); ?>


		Highcharts.chart('chart-container',{
			title:{
				//text:'Monthly ROI vs Yearly ROI'
			},
			xAxis:{
				categories:['Year 1','Year 2','Year 3','Year 4','Year 5','Year 6','Year 7','Year 8','Year 9','Year 10']
			},
         yAxis: [
            //--- Primary yAxis
            {
               title: {
                  text: 'Property Value - Year Beginning'
               }
            },

            //--- Secondary yAxis
            {
               title: {
                  text: 'Market capital escalation'
               },
               opposite: true
            }
         ],

			legend:{
				layouts:'Vertical',
				align:'right',
				verticalAlign:'middle'
			},
			plotOptions:{
				series:{
					allowPointSelect:true
				}
			},
			series:[{
            type:'column',
				name:'Property Value - Year Beginning',
            yAxis: 0,
				data: yearEnd,
			},{
            name:'Market capital escalation',
            yAxis: 1,
            data: escalationValue
         }
         ],
			responsive:{
				rules:[
					{
						condition:{
							maxWidth:500
						},
						chartOptions:{
							legend:{
								layout:'horizontal',
								align:'center',
								verticalAlign:'bottom'
							}
						}
					}
				]
			}
		})
   </script>
   <script>
      var capitalAppreciationValue       = <?php echo json_encode($capitalAppreciationValue); ?>

		Highcharts.chart('chart-container2',{
			title:{
				//text:'Capital Appreciation'
			},
			xAxis:{
				categories:['Year 1','Year 2','Year 3','Year 4','Year 5','Year 6','Year 7','Year 8','Year 9','Year 10']
			},
         yAxis: [
            //--- Primary yAxis
            {
               title: {
                  text: 'Capital Appreciation'
               }
            },
         ],

			legend:{
				layouts:'Vertical',
				align:'right',
				verticalAlign:'middle'
			},
			plotOptions:{
				series:{
					allowPointSelect:true
				}
			},
			series:[{
            type:'column',
				name:'Capital Appreciation',
            yAxis: 0,
				data: capitalAppreciationValue,
			}],
			responsive:{
				rules:[
					{
						condition:{
							maxWidth:500
						},
						chartOptions:{
							legend:{
								layout:'horizontal',
								align:'center',
								verticalAlign:'bottom'
							}
						}
					}
				]
			}
		})
   </script>
   <script>
      $(document).ready(function(){
         $("html, body").animate({
            scrollTop: $('#Summary').offset().top
         }, 1000);
      });
   </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/stone/Desktop/Projects/PHP/baroncabot/resources/views/pages/roi.blade.php ENDPATH**/ ?>