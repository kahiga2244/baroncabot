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
                                          <option value="<?php echo $unit->id; ?>"><?php echo $unit->product_name; ?> | £<?php echo number_format($unit->price); ?> | Size <?php echo $unit->size; ?></option>
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
                              UNIT <?php echo $prop->product_name; ?> | £<?php echo number_format($prop->price); ?> | Size <?php echo $prop->size; ?>

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
            <?php
               //units
               $unitInfo = Property::property_info($unitID)->getData();

               //exchange deposit
               $price = $unitProp->price;
               $percentage = $cashflow->exchange_deposit_percentage/100;


               $exchangeDeposit = ($percentage * $price) - $cashflow->client_reservation_fee;

               //balance forward
               $bf = ($unitInfo->property->price * ($cashflow->mortgage_lending_value/100));

               //Financial payment for a loan or annuity with compound interest
               $rate          = ($roi->mortgage_rate/100) / 12; // 3.5% interest paid at the end of every month
               $periods       = 25 * 12;    // 30-year mortgage
               $present_value = $bf;   // Mortgage note of $265,000.00
               $future_value  = 0;
               $beginning     = false; // Adjust the payment to the beginning or end of the period
               $period        = 1;     // First payment period

               if($cashflow->mortgage_type == 'Interest Only'){
                  $ipmt = MathPHP\Finance::ipmt($rate, $period, $periods, $present_value, $future_value, $beginning);
               }else{
                  $ipmtValue = MathPHP\Finance::ipmt($rate, $period, $periods, $present_value, $future_value, $beginning);
                  $pmt       = MathPHP\Finance::pmt($rate, $periods, $present_value, $future_value, $beginning);

                  $ipmt = $ipmtValue + $pmt;
               }

               //Market rent escalation
               $initialEscalation   = $unitInfo->property->rent_per_month / $unitInfo->property->size;
               $initialEscalation2  = $initialEscalation  * ((100+$forecast->rental_growth_year_2)/100);
               $initialEscalation3  = $initialEscalation2 * ((100+$forecast->rental_growth_year_3)/100);
               $initialEscalation4  = $initialEscalation3 * ((100+$forecast->rental_growth_year_4)/100);
               $initialEscalation5  = $initialEscalation4 * ((100+$forecast->rental_growth_year_5)/100);
               $initialEscalation6  = $initialEscalation5 * ((100+$forecast->rental_growth_year_6)/100);
               $initialEscalation7  = $initialEscalation6 * ((100+$forecast->rental_growth_year_7)/100);
               $initialEscalation8  = $initialEscalation7 * ((100+$forecast->rental_growth_year_8)/100);
               $initialEscalation9  = $initialEscalation8 * ((100+$forecast->rental_growth_year_9)/100);
               $initialEscalation10 = $initialEscalation9 * ((100+$forecast->rental_growth_year_10)/100);

               //Rental Income
               $rent1  = $initialEscalation   * ($unitInfo->property->size * 12);
               $rent2  = $initialEscalation2  * ($unitInfo->property->size * 12);
               $rent3  = $initialEscalation3  * ($unitInfo->property->size * 12);
               $rent4  = $initialEscalation4  * ($unitInfo->property->size * 12);
               $rent5  = $initialEscalation5  * ($unitInfo->property->size * 12);
               $rent6  = $initialEscalation6  * ($unitInfo->property->size * 12);
               $rent7  = $initialEscalation7  * ($unitInfo->property->size * 12);
               $rent8  = $initialEscalation8  * ($unitInfo->property->size * 12);
               $rent9  = $initialEscalation9  * ($unitInfo->property->size * 12);
               $rent10 = $initialEscalation10 * ($unitInfo->property->size * 12);

               //Market capital escalation
               $psf1 = $unitInfo->property->price_per_sqf;
               $escalation1  = $psf1 * ((100+$forecast->rental_capital_appreciation_1)/100);
               $escalation2  = $escalation1 * ((100+$forecast->rental_capital_appreciation_2)/100);
               $escalation3  = $escalation2 * ((100+$forecast->rental_capital_appreciation_3)/100);
               $escalation4  = $escalation3 * ((100+$forecast->rental_capital_appreciation_4)/100);
               $escalation5  = $escalation4 * ((100+$forecast->rental_capital_appreciation_5)/100);
               $escalation6  = $escalation5 * ((100+$forecast->rental_capital_appreciation_6)/100);
               $escalation7  = $escalation6 * ((100+$forecast->rental_capital_appreciation_7)/100);
               $escalation8  = $escalation7 * ((100+$forecast->rental_capital_appreciation_8)/100);
               $escalation9  = $escalation8 * ((100+$forecast->rental_capital_appreciation_9)/100);
               $escalation10 = $escalation9 * ((100+$forecast->rental_capital_appreciation_10)/100);

               //Property Value - Year End
               $capValue1 = ($escalation1 * $unitInfo->property->size) - $unitInfo->property->price;
               $yearEnd1 = $capValue1 + $unitInfo->property->price;

               $capValue2 = ($escalation2 * $unitInfo->property->size) - $yearEnd1;
               $yearEnd2 = $capValue2 + $yearEnd1;

               $capValue3 = ($escalation3 * $unitInfo->property->size) - $yearEnd2;
               $yearEnd3 = $capValue3 + $yearEnd2;

               $capValue4 = ($escalation4 * $unitInfo->property->size) - $yearEnd3;
               $yearEnd4 = $capValue4 + $yearEnd3;

               $capValue5 = ($escalation5 * $unitInfo->property->size) - $yearEnd4;
               $yearEnd5 = $capValue5 + $yearEnd4;

               $capValue6 = ($escalation6 * $unitInfo->property->size) - $yearEnd5;
               $yearEnd6 = $capValue6 + $yearEnd5;

               $capValue7 = ($escalation7 * $unitInfo->property->size) - $yearEnd6;
               $yearEnd7 = $capValue7 + $yearEnd6;

               $capValue8 = ($escalation8 * $unitInfo->property->size) - $yearEnd7;
               $yearEnd8 = $capValue8 + $yearEnd7;

               $capValue9 = ($escalation9 * $unitInfo->property->size) - $yearEnd8;
               $yearEnd9 = $capValue9 + $yearEnd8;

               $capValue10 = ($escalation10 * $unitInfo->property->size) - $yearEnd9;
               $yearEnd10 = $capValue10 + $yearEnd9;

               $serviceCharge = ($cashflow->estimated_service_charge_rate * $unitInfo->property->size) / 12;

               //GetGround admin fee
               if($cashflow->get_ground == 0){
                  $groundAdminFee = 0;
               }else{
                  $groundAdminFee = 20;
               }

               $estimatedGrossRentalIncome =  $rent1/12;

               //Redstone management fee
               $fee = ($cashflow->management_fee_rate/100) * $estimatedGrossRentalIncome;

               if($property->listing_fee == 'Yes'){
                  $listingFee = $estimatedGrossRentalIncome * 0.15;
               }else{
                  $listingFee = 0;
               }

               //mphfee
               if($property->mph_fee == 'Yes'){
                  $mphFee = ($estimatedGrossRentalIncome * 0.18) * 1.2;
               }else{
                  $mphFee = 0;
               }

               $mphFee = 0;

               $expense = $groundAdminFee + $serviceCharge + $fee + $cashflow->ground_rent + $listingFee + $mphFee;

               //
               $grossYield = (($estimatedGrossRentalIncome * 12) / $unitInfo->property->price) * 100;


               //net monthly cash position year 1
               $year1 = abs($ipmt) - (($rent1/12) - $expense );
               $year2 = abs($ipmt) - (($rent2/12) - $expense );
               $year3 = abs($ipmt) - (($rent3/12) - $expense );
               $year4 = abs($ipmt) - (($rent4/12) - $expense );
               $year5 = abs($ipmt) - (($rent5/12) - $expense );
               $year6 = abs($ipmt) - (($rent6/12) - $expense );
               $year7 = abs($ipmt) - (($rent7/12) - $expense );
               $year8 = abs($ipmt) - (($rent8/12) - $expense );
               $year9 = abs($ipmt) - (($rent9/12) - $expense );
               $year10 = abs($ipmt) - (($rent10/12) - $expense );


               //ANNUAL NET CAPITAL APPRECIATION
               $value1  = ($unitInfo->property->price * ($forecast->rental_capital_appreciation_1/100)) + $unitInfo->property->price;
               $value2  = ($unitInfo->property->price * ($forecast->rental_capital_appreciation_2/100)) + $value1;
               $value3  = ($unitInfo->property->price * ($forecast->rental_capital_appreciation_3/100)) + $value2;
               $value4  = ($unitInfo->property->price * ($forecast->rental_capital_appreciation_4/100)) + $value3;
               $value5  = ($unitInfo->property->price * ($forecast->rental_capital_appreciation_5/100)) + $value4;
               $value6  = ($unitInfo->property->price * ($forecast->rental_capital_appreciation_6/100)) + $value5;
               $value7  = ($unitInfo->property->price * ($forecast->rental_capital_appreciation_7/100)) + $value6;
               $value8  = ($unitInfo->property->price * ($forecast->rental_capital_appreciation_8/100)) + $value7;
               $value9  = ($unitInfo->property->price * ($forecast->rental_capital_appreciation_9/100)) + $value8;
               $value10 = ($unitInfo->property->price * ($forecast->rental_capital_appreciation_10/100)) + $value9;

               //Monthly Income
               $monthlyIncome = $estimatedGrossRentalIncome - $expense;

               //Payment On Reservation And Exchange
               $PaymentOnReservationAndExchange = $property->reservation_fee + $cashflow->legal_fees + $exchangeDeposit;

               //capitalPayment
               $capitalPayment = (100 - $cashflow->mortgage_lending_value) - $cashflow->exchange_deposit_percentage;
               $finalCapitalPayment = ($capitalPayment/100) * $unitInfo->property->price;

               if($property->mortgage_type == 'None'){
                  $mortgageAmount = 0;
                  $mortgageCosts = 0;
               }else{
                  $amount = ($unitInfo->property->price * ($cashflow->mortgage_lending_value/100));
                  $mortgageAmount = $amount;
                  $mortgageCosts = ($amount * (1.5/100));
               }
               $stampDuty = $cashflow->stamp_duty;

               //Payment On Completion
               $PaymentOnCompletion =  $finalCapitalPayment +  $stampDuty + $mortgageCosts + $cashflow->mortgage_broker_fee + $cashflow->valuation_fee + $property->furniture_pack + $cashflow->land_registry_fees;

               //property Value Year End
               $propertyValueYearEnd = array(
                     intval($yearEnd1),
                     intval($yearEnd2),
                     intval($yearEnd3),
                     intval($yearEnd4),
                     intval($yearEnd5),
                     intval($yearEnd6),
                     intval($yearEnd7),
                     intval($yearEnd8),
                     intval($yearEnd9),
                     intval($yearEnd10)
                  );

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


               $totalEquityRequired = $PaymentOnCompletion + $PaymentOnReservationAndExchange;


               //year 5 roi
               $sum5 = $year1 + $year2 + $year3 + $year4 + $year5;

               $roi5 = (ceil($value5) - ($sum5 * 12)) - $unitInfo->property->price;

               //year 10 roi
               $sum10 = $year6 + $year7 + $year8 + $year9 + $year10;

               $roi10 = (ceil($value10) - (($sum5 + $sum10) * 12)) - $unitInfo->property->price;

            ?>
            <div class="col-md-4">
               <div class="row">
                  <div class="col-md-12 mb-2">
                     <div class="card overflow-hidden">
                        <div class="card-body">
                           <i class="position-absolute top-0 end-0 mt-4 me-3 fas fa-pound-sign fa-4x"></i>
                           <div class="mb-2 text-uppercase">5 Years Projected ROI</div>
                           <div>
                              <?php
                                 if($totalEquityRequired){
                                    $year5Roi = ($roi5 / $totalEquityRequired) * 100;
                                 }else{
                                    $year5Roi = 0;
                                 }
                              ?>
                              <span class="h4">£<?php echo number_format($roi5); ?></span>

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
                                 if($totalEquityRequired){
                                    $year10Roi = ($roi10 / $totalEquityRequired) * 100;
                                 }else{
                                    $year10Roi = 0;
                                 }
                              ?>
                              <span class="h4">£<?php echo number_format($roi10); ?></span>
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
                        <span>£<?php echo number_format($PaymentOnReservationAndExchange); ?></span>
                     </div>
                     <div class="progress" style="height: 5px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 100%%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </li>
                  <li class="mb-3 mt-3">
                     <div class="d-flex justify-content-between">
                        <span>Further deposit</span>
                        <span>£0</span>
                     </div>
                     <div class="progress" style="height: 5px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 100%;" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </li>
                  <li class="mb-3 mt-3">
                     <div class="d-flex justify-content-between">
                        <span>Payment on property completion</span>
                        <span>£<?php echo number_format($PaymentOnCompletion); ?></span>
                     </div>
                     <div class="progress" style="height: 5px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 100%;" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </li>
                  <li class="mb-3 mt-3">
                     <div class="d-flex justify-content-between">
                        <span>Total Equity Required</span>
                        <span>£<?php echo e(number_format($totalEquityRequired)); ?></span>
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
                        <span>£<?php echo e(number_format($mortgageAmount)); ?></span>
                     </div>
                     <div class="progress" style="height: 5px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 100%%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </li>
                  <li class="mb-3 mt-3">
                     <div class="d-flex justify-content-between">
                        <span>Monthly income</span>
                        <span>£<?php echo number_format($monthlyIncome); ?></span>
                     </div>
                     <div class="progress" style="height: 5px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 100%;" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </li>
                  <li class="mb-3 mt-3">
                     <div class="d-flex justify-content-between">
                        <span>Mortgage type - <?php echo e($cashflow->mortgage_type); ?></span>
                        <span>
                           £<?php if($cashflow->mortgage_type == 'Interest Only'): ?><?php echo number_format(abs($ipmt)); ?><?php else: ?> 0 <?php endif; ?>
                        </span>
                     </div>
                     <div class="progress" style="height: 5px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 100%;" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </li>
                  <li class="mb-3 mt-3">
                     <div class="d-flex justify-content-between">
                        <span>Projected monthly cash pos.</span>
                        <span class="text-bold">£<?php echo number_format(abs(abs($ipmt) - $monthlyIncome )); ?></span>
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
                                 <td>£<?php echo number_format($property->reservation_fee); ?> per Unit</td>
                              </tr>
                              <tr>
                                 <td>2</td>
                                 <td><a href="#"  data-bs-toggle="modal" data-bs-target="#right_modal_sm">Exchange deposit <i class="fas fa-info-circle"></i></a></td>
                                 <td> <?php echo $cashflow->exchange_deposit_percentage; ?>% of purchase price (£<?php echo number_format($exchangeDeposit); ?>)</td>
                              </tr>
                              <tr>
                                 <td>3</td>
                                 <td><a href="#"  data-bs-toggle="modal" data-bs-target="#LegalFees">Legal fees  (Inc. VAT) <i class="fas fa-info-circle"></i></a></td>
                                 <td>£<?php echo number_format($cashflow->legal_fees); ?> based on TBC</td>
                              </tr>
                              <tr>
                                 <td>4</td>
                                 <td><a href="#"  data-bs-toggle="modal" data-bs-target="#get-ground"><i>Company costs <i class="fas fa-info-circle"></i></i></a></td>
                                 <td>£0 company set up fee</td>
                              </tr>
                              <tr class="table-info">
                                 <td></td>
                                 <td><b>Payment on Reservation and Exchange</b></td>
                                 <td><b>£<?php echo number_format($PaymentOnReservationAndExchange); ?></b></td>
                              </tr>
                           </tbody>
                        </table>
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
                                 <td><?php echo e($capitalPayment); ?>% of the purchase price </td>
                                 <td>£<?php echo e(number_format($finalCapitalPayment)); ?></td>
                              </tr>
                              <tr>
                                 <td>2</td>
                                 <td><a href="#"  data-bs-toggle="modal" data-bs-target="#stampduty">Stamp duty <i class="fas fa-info-circle"></i></a></td>
                                 <td>£<?php echo number_format($stampDuty); ?> based on the purchase price</td>
                                 <td>£<?php echo number_format($stampDuty); ?></td>
                              </tr>
                              <tr>
                                 <td>3</td>
                                 <td><a href="#"  data-bs-toggle="modal" data-bs-target="#mortgagecosts">Mortgage costs <i class="fas fa-info-circle"></i></a></td>
                                 <td><?php echo e(number_format($mortgageCosts)); ?> <i>1.5%</i> of the loan amount</td>
                                 <td>£<?php echo e(number_format($mortgageCosts)); ?></td>
                              </tr>
                              <tr>
                                 <td>4</td>
                                 <td><a href="#"  data-bs-toggle="modal" data-bs-target="#MortgageBrokerFee">Mortgage broker fee <i class="fas fa-info-circle"></i></a></td>
                                 <td>£<?php echo e(number_format($cashflow->mortgage_broker_fee)); ?> based on TBC</td>
                                 <td>£<?php echo e(number_format($cashflow->mortgage_broker_fee)); ?></td>
                              </tr>
                              <tr>
                                 <td>5</td>
                                 <td><a href="#"  data-bs-toggle="modal" data-bs-target="#Valuationfee">Valuation fee <i class="fas fa-info-circle"></i></a></td>
                                 <td>£<?php echo e(number_format($cashflow->valuation_fee)); ?> based on the purchase price</td>
                                 <td>£<?php echo e(number_format($cashflow->valuation_fee)); ?></td>
                              </tr>
                              <tr>
                                 <td>6</td>
                                 <td><a href="#"  data-bs-toggle="modal" data-bs-target="#FurniturePack">Furniture pack (Exc. VAT) <i class="fas fa-info-circle"></i></a></td>
                                 <td>£<?php echo e(number_format($property->furniture_pack)); ?> based on unit type</td>
                                 <td>£<?php echo e(number_format($property->furniture_pack)); ?></td>
                              </tr>
                              <tr>
                                 <td>7</td>
                                 <td><a href="#"  data-bs-toggle="modal" data-bs-target="#LandRegistry">Land registry fees <i class="fas fa-info-circle"></i></a></td>
                                 <td>£<?php echo number_format($cashflow->land_registry_fees); ?> based on UK Dpt. Of Land Reg. Req.</td>
                                 <td>£<?php echo number_format($cashflow->land_registry_fees); ?> </td>
                              </tr>
                              <tr class="table-info">
                                 <td></td>
                                 <td></td>
                                 <td><b>Payment On Completion</b></td>
                                 <td><b>£<?php echo e(number_format($PaymentOnCompletion)); ?></b></td>
                              </tr>
                              <tr class="table-primary">
                                 <td></td>
                                 <td></td>
                                 <td><b>Total Equity Required</b></td>
                                 <td><b>£<?php echo e(number_format($PaymentOnCompletion + $PaymentOnReservationAndExchange)); ?></b></td>
                              </tr>
                              <tr class="table-warning">
                                 <td></td>
                                 <td></td>
                                 <td><b>Mortgage Amount(<?php echo e($cashflow->mortgage_lending_value); ?>%)</b></td>
                                 <td><b>£<?php echo e(number_format($mortgageAmount)); ?></b></td>
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
                                 <td>£<?php echo number_format($estimatedGrossRentalIncome); ?></td>
                              </tr>
                              <tr class="table-info">
                                 <td></td>
                                 <td><b>Gross Yield </b></td>
                                 <td></td>
                                 <td><?php echo number_format($grossYield,2); ?>%</td>
                              </tr>
                              <tr>
                                 <td>1</td>
                                 <td>Get Ground admin fee</td>
                                 <td><?php echo $cashflow->get_ground; ?> per Month</td>
                                 <td>£<?php echo $cashflow->get_ground; ?></td>
                              </tr>
                              <tr>
                                 <td>2</td>
                                 <td>Estimated service charge</td>
                                 <td><?php echo number_format($cashflow->estimated_service_charge_rate); ?> psf</td>
                                 <td>£<?php echo number_format($serviceCharge); ?></td>
                              </tr>
                              <tr>
                                 <td>3</td>
                                 <td>Redstone management fee (Exc. VAT)</td>
                                 <td><?php echo number_format($cashflow->management_fee_rate); ?> of rental income </td>
                                 <td>£<?php echo number_format($cashflow->management_fee); ?></td>
                              </tr>
                              <tr>
                                 <td>4</td>
                                 <td>Ground rent</td>
                                 <td><?php echo number_format($cashflow->ground_rent); ?> per month </td>
                                 <td>£<?php echo number_format($cashflow->ground_rent); ?></td>
                              </tr>
                              <tr>
                                 <td>5</td>
                                 <td> Listing platform fee </td>
                                 <td>£<?php echo number_format($listingFee); ?> <b><small>15%</small></b> of revenue</td>
                                 <td>£<?php echo number_format($listingFee); ?></td>
                              </tr>
                              <tr>
                                 <td>6</td>
                                 <td>MPH management fee</td>
                                 <td>£<?php echo number_format($mphFee); ?> <b><small>18%</small></b>+VAT of revenue</td>
                                 <td>£<?php echo number_format($mphFee); ?></td>
                              </tr>
                              <tr class="table-warning">
                                 <td></td>
                                 <td></td>
                                 <td><b><i>Net Monthly Expenses</i></b></td>
                                 <td>£<?php echo number_format($expense); ?></td>
                              </tr>
                              <tr class="table-success">
                                 <td></td>
                                 <td></td>
                                 <td><b><i>Monthly Income</i></b></td>
                                 <td>£<?php echo number_format($monthlyIncome); ?></td>
                              </tr>
                              <tr class="table-primary">
                                 <td></td>
                                 <td></td>
                                 <td><b><i>Net Yield</i></b></td>
                                 <td><?php echo number_format((($monthlyIncome * 12) / $unitInfo->property->price) * 100, 2); ?>%</td>
                              </tr>
                              <tr class="table-primary">
                                 <td></td>
                                 <td></td>
                                 <td><b><i>Mortgage type - <?php echo e($cashflow->mortgage_type); ?></i></b></td>
                                 <td>£<?php if($cashflow->mortgage_type == 'Interest Only'): ?><?php echo number_format(abs($ipmt)); ?><?php else: ?> 0 <?php endif; ?>
                                 </td>
                                 <tr class="table-info">
                                    <td></td>
                                    <td></td>
                                    <td><b><i>Projected Net Monthly Cash Position in Year 1</i></b></td>
                                    <td>£<?php echo number_format(abs(abs($ipmt) - $monthlyIncome )); ?></td>
                                 </tr>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>

               <div class="card">
                  <div class="card-header">
                     <a class="collapsed card-link" data-bs-toggle="collapse" href="#incomeCapital"> ANNUAL NET MONTHLY CASH POSITION</a>
                  </div>
                  <div id="incomeCapital" class="collapse" data-bs-parent="#accordion">
                     <div class="card-body">
                        <table class="table table-bordered table-striped table-responsive">
                           <thead>
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
                              <td>£<?php echo number_format(abs($year1)); ?></td>
                              <td>£<?php echo number_format(abs($year2)); ?></td>
                              <td>£<?php echo number_format(abs($year3)); ?></td>
                              <td>£<?php echo number_format(abs($year4)); ?></td>
                              <td>£<?php echo number_format(abs($year5)); ?></td>
                              <td>£<?php echo number_format(abs($year6)); ?></td>
                              <td>£<?php echo number_format(abs($year7)); ?></td>
                              <td>£<?php echo number_format(abs($year8)); ?></td>
                              <td>£<?php echo number_format(abs($year9)); ?></td>
                              <td>£<?php echo number_format(abs($year10)); ?></td>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>

               <div class="card">
                  <div class="card-header">
                     <a class="collapsed card-link" data-bs-toggle="collapse" href="#incomeCapital2"> ANNUAL NET CAPITAL APPRECIATION</a>
                  </div>
                  <div id="incomeCapital2" class="collapse" data-bs-parent="#accordion">
                     <div class="card-body">
                        <table class="table table-bordered table-striped table-responsive">
                           <thead>
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
                              <td>£<?php echo number_format(abs($value1)); ?></td>
                              <td>£<?php echo number_format(abs($value2)); ?></td>
                              <td>£<?php echo number_format(abs($value3)); ?></td>
                              <td>£<?php echo number_format(abs($value4)); ?></td>
                              <td>£<?php echo number_format(abs($value5)); ?></td>
                              <td>£<?php echo number_format(abs($value6)); ?></td>
                              <td>£<?php echo number_format(abs($value7)); ?></td>
                              <td>£<?php echo number_format(abs($value8)); ?></td>
                              <td>£<?php echo number_format(abs($value9)); ?></td>
                              <td>£<?php echo number_format(abs($value10)); ?></td>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>

            </div>
         </div>
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
            <p>This is the amount you pay to your solicitors and which is passed to the developer. This amount is minus the reservation fee. So if its 20% deposit, it is 20% minus the £5,000. The deposit is 20% as it needs to be high enough that both parties are happy that the commitment has been made. In more expensive properties this deposit is lower. </p>
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

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/stone/Desktop/Projects/PHP/baroncabot/resources/views/pages/roi_new.blade.php ENDPATH**/ ?>