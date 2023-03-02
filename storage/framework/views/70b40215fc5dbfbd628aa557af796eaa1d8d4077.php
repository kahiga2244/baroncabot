<div>
   <div class="tab-pane fade show active about page-section">
      <div class="row mb-3">
         <div class="col-md-8">

         </div>
         <div class="col-md-4">
            <a data-bs-toggle="modal" data-bs-target="#roi" href="#" class="btn btn-success btn-sm btn-block">Calculate Your ROI</a>
         </div>
      </div>

      <div class="row">
         <div class="col-md-12">

            <div class="card mb-3">
               <div class="card-header"><h3>INITIAL COSTS</h3></div>
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
                           <td>Client Reservation fee</td>
                           <td>
                              <?php if($cashflow->client_reservation_fee): ?><?php echo e(number_format($cashflow->client_reservation_fee)); ?><?php endif; ?> per Unit</td>
                        </tr>
                        <tr>
                           <td>2</td>
                           <td>Exchange deposit</td>
                           <td><?php echo e($cashflow->exchange_deposit_percentage); ?>% of purchase price (<?php echo e(number_format($cashflow->exchange_deposit)); ?>)</td>
                        </tr>
                        <tr>
                           <td>3</td>
                           <td>Legal fees</td>
                           <td><?php echo e(number_format($cashflow->legal_fees)); ?> based on TBC</td>
                        </tr>
                        <tr>
                           <td>4</td>
                           <td>Get Ground</td>
                           <td><?php echo e(number_format($cashflow->get_ground)); ?> company set up fee</td>
                        </tr>
                        <tr class="table-info">
                           <td></td>
                           <td><b>Payment on Reservation and Exchange</b></td>
                           <td><b><?php echo e(number_format($cashflow->payment_on_reservation_and_exchange)); ?> GBP</b></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>

            <div class="card mb-3">
               <div class="card-header">
                  <h3>FINAL COSTS AT COMPLETION
               </h3>
               </div>
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
                           <td>Final capital payment</td>
                           <td><?php echo e($cashflow->final_capital_payment_percentage); ?>% of the purchase price </td>
                           <td><?php echo e($cashflow->final_capital_payment); ?></td>
                        </tr>
                        <tr>
                           <td>2</td>
                           <td>Stamp duty</td>
                           <td><?php echo number_format($cashflow->stamp_duty); ?> based on the purchase price</td>
                           <td><?php echo number_format($cashflow->stamp_duty); ?></td>
                        </tr>
                        <tr>
                           <td>3</td>
                           <td>Mortgage costs</td>
                           <td><?php echo e(number_format($cashflow->mortgage_costs)); ?> <i>1.5%</i> of the loan amount</td>
                           <td><?php echo e(number_format($cashflow->mortgage_costs)); ?></td>
                        </tr>
                        <tr>
                           <td>4</td>
                           <td>Mortgage broker fee</td>
                           <td><?php echo e(number_format($cashflow->mortgage_broker_fee)); ?> based on TBC</td>
                           <td><?php echo e(number_format($cashflow->mortgage_broker_fee)); ?></td>
                        </tr>
                        <tr>
                           <td>5</td>
                           <td>Valuation fee </td>
                           <td><?php echo e(number_format($cashflow->valuation_fee)); ?> based on the purchase price</td>
                           <td><?php echo e(number_format($cashflow->valuation_fee)); ?></td>
                        </tr>
                        <tr>
                           <td>6</td>
                           <td>Furniture pack (Exc. VAT)</td>
                           <td><?php echo e(number_format($property->furniture_pack)); ?> based on unit type</td>
                           <td><?php echo e(number_format($property->furniture_pack)); ?></td>
                        </tr>
                        <tr>
                           <td>7</td>
                           <td>Land registry fees</td>
                           <td><?php echo number_format($cashflow->land_registry_fees); ?> based on UK Dpt. Of Land Reg. Req.</td>
                           <td><?php echo number_format($cashflow->land_registry_fees); ?> </td>
                        </tr>
                        <tr class="table-info">
                           <td></td>
                           <td></td>
                           <td><b>Payment On Completion</b></td>
                           <td><b><?php echo e(number_format($cashflow->payment_on_completion)); ?> GBP</b></td>
                        </tr>
                        <tr class="table-primary">
                           <td></td>
                           <td></td>
                           <td><b>Total Equity Required</b></td>
                           <td><b><?php echo e(number_format($cashflow->equity_required )); ?> GBP</b></td>
                        </tr>
                        <tr class="table-warning">
                           <td></td>
                           <td></td>
                           <td><b>Mortgage Amount(<?php echo e($cashflow->mortgage_lending_value); ?>%)</b></td>
                           <td><b><?php echo e(number_format($cashflow->mortgage_amount)); ?> GBP</b></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>

            <div class="card mb-3">
               <div class="card-header">
                  <h3>PROJECT MONTHLY NET INCOME(PRE MORTGAGE)
               </h3>
               </div>
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
                           <td><?php echo $cashflow->estimated_gross_rental_income; ?> GBP</td>
                        </tr>
                        <tr class="table-info">
                           <td></td>
                           <td><b>Gross Yield </b></td>
                           <td></td>
                           <td><?php echo number_format($cashflow->gross_yield,2); ?>%</td>
                        </tr>
                        <tr>
                           <td>1</td>
                           <td>GetGround admin fee</td>
                           <td><?php echo $cashflow->get_ground; ?> per Month</td>
                           <td><?php echo $cashflow->get_ground; ?> GBP</td>
                        </tr>
                        <tr>
                           <td>2</td>
                           <td>Estimated service charge</td>
                           <td><?php echo $cashflow->estimated_service_charge_rate; ?> psf</td>
                           <td><?php echo number_format($cashflow->estimated_service_charge); ?> GBP</td>
                        </tr>
                        <tr>
                           <td>3</td>
                           <td>Redstone management fee (Exc. VAT)</td>
                           <td><?php echo number_format($cashflow->management_fee_rate); ?> of rental income </td>
                           <td><?php echo number_format($cashflow->management_fee); ?> GBP</td>
                        </tr>
                        <tr>
                           <td>4</td>
                           <td>Ground rent</td>
                           <td><?php echo number_format($cashflow->ground_rent); ?> per month </td>
                           <td><?php echo number_format($cashflow->ground_rent); ?> GBP</td>
                        </tr>
                        <tr>
                           <td>5</td>
                           <td> Listing platform fee </td>
                           <td><?php echo number_format($cashflow->listing_fee); ?> <b><small>15%</small></b> of revenue</td>
                           <td><?php echo number_format($cashflow->listing_fee); ?> GBP</td>
                        </tr>
                        <tr>
                           <td>6</td>
                           <td>MPH management fee</td>
                           <td><?php echo number_format($cashflow->mph_fee); ?> <b><small>18%</small></b>+VAT of revenue</td>
                           <td><?php echo number_format($cashflow->mph_fee); ?> GBP</td>
                        </tr>
                        <tr class="table-warning">
                           <td></td>
                           <td></td>
                           <td><b><i>Net Monthly Expenses</i></b></td>
                           <td><?php echo number_format($cashflow->monthly_expenses); ?> GBP</td>
                        </tr>
                        <tr class="table-success">
                           <td></td>
                           <td></td>
                           <td><b><i>Monthly Income</i></b></td>
                           <td><?php echo number_format($cashflow->monthly_income); ?> GBP</td>
                        </tr>
                        <tr class="table-primary">
                           <td></td>
                           <td></td>
                           <td><b><i>Net Yield</i></b></td>
                           <td><?php echo number_format($cashflow->net_yield, 2); ?>%</td>
                        </tr>
                        <tr class="table-primary">
                           <td></td>
                           <td></td>
                           <td><b><i>Mortgage type - <?php echo e($cashflow->mortgage_type); ?></i></b></td>
                           <td>
                              <?php if($cashflow->mortgage_type == 'Interest Only'): ?>
                                 <?php echo number_format($cashflow->mortgage_repayment, 2); ?>

                              <?php else: ?>
                                 0
                              <?php endif; ?> GBP
                           </td>
                           <tr class="table-info">
                              <td></td>
                              <td></td>
                              <td><b><i>Projected Net Monthly Cash Position in Year 1</i></b></td>
                              <td><?php echo number_format($cashflow->year_1); ?> GBP</td>
                           </tr>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php /**PATH /home/stone/Desktop/Projects/PHP/baroncabot/resources/views/livewire/roi-old.blade.php ENDPATH**/ ?>