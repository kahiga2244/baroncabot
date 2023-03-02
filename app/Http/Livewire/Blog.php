<?php

namespace App\Http\Livewire;

use App\Models\Blogs;
use App\Models\Category;
use Livewire\Component;

class Blog extends Component
{
   public $search;

   public function render()
   {
      $query = Blogs::where('status',31);
               if($this->search){
                  $query->where('content','like','%'.$this->search.'%');
               }
      $blogs = $query->orderby('created_at','desc')->get();
      $categories = Category::where('status',15)->orderby('id','desc')->get();

      return view('livewire.blog', compact('blogs','categories'));
   }
}
