<?php

namespace App\Http\Livewire;

use App\Models\Cash_flow;
use App\Models\Property;
use App\Models\Rate;
use Livewire\Component;

class Roi extends Component
{
   public $propertyID,$mortgageRate,$mortgage_rate,$unit;

   public function render()
   {
      $property = Property::find($this->propertyID);
      $units = Property::where('parentID',$this->propertyID)->get();
      $cashflow = Cash_flow::where('property_id',$this->propertyID)->first();
      $rates = Rate::get();

      return view('livewire.roi', compact('cashflow','units','rates','property'));
   }

   public function calculate(){
      $this->validate([
         'mortgage_rate' => 'required',
      ]);



      //mortgage_rate
      $rate = Rate::find($this->mortgage_rate);


      $this->mortgageRate = session()->get('cashflow')['rate'];

      $updateValues = Cash_flow::where('property_id',$this->propertyID)->first();

      //$this->client_reservation_fee
      $property = Property::where('product_information.id',$this->propertyID)->first();

      if($updateValues->exchange_deposit_percentage > 0 && session()->get('cashflow')['price'] > 0){
         $price = session()->get('cashflow')['price'];
         $percentage = $updateValues->exchange_deposit_percentage/100;
         $exchangeDeposit = ($percentage * $price) - $property->reservation_fee;
         $updateValues->exchange_deposit = $exchangeDeposit;
      }else{
         $updateValues->exchange_deposit = 0;
      }
      $updateValues->save();

      //Payment on Reservation and Exchange
      $update2 = Cash_flow::where('property_id',$this->propertyID)->first();
      //$update2->unitID = $this->unit;
      $update2->payment_on_reservation_and_exchange = $update2->client_reservation_fee + $update2->exchange_deposit + $update2->legal_fees + $update2->get_ground;
      $update2->save();

      $this->emit('popModal');
   }
}
