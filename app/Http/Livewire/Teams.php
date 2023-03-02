<?php

namespace App\Http\Livewire;

use App\Models\Teams as ModelsTeams;
use Jenssegers\Agent\Agent;
use Livewire\Component;

class Teams extends Component
{
   public $video;

   public function render()
   {
      $agent = new Agent;

      $teams = ModelsTeams::where('status','Active')->orderby('id','asc')->get();

      return view('livewire.teams', compact('teams','agent'));
   }


   //video
   public function view($id){
      $video = ModelsTeams::where('id',$id)->first();
      $this->video = $video;
   }
}
