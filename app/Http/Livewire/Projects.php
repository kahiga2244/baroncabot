<?php

namespace App\Http\Livewire;
use Jenssegers\Agent\Agent;
use App\Models\Property;
use Livewire\Component;

class Projects extends Component
{
   public $location;

   public function render()
   {
      $query = Property::where('publish','Yes')->orderby('id','desc');
               if($this->location){
                  $query->where('location',$this->location);
               }
      $properties = $query->get();
      $agent = new Agent;

      return view('livewire.projects', compact('properties','agent'));
   }
}
