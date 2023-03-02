<?php

namespace App\Http\Livewire;

use App\Models\Blog_category;
use App\Models\Blogs;
use App\Models\Category as ModelsCategory;
use Livewire\Component;

class Category extends Component
{
   public $category,$search;

   public function render()
   {
      $cat = ModelsCategory::where('url',$this->category)->first();

      $query = Blog_category::join('blogs','blogs.id','=','blog_category.blog_id')
                  ->where('category_id',$cat->id)
                  ->where('status',31);

                  if($this->search){
                     $query->where('blogs.content','like','%'.$this->search.'%');
                  }

      $blogs = $query->orderby('blogs.created_at','desc')->get();

      $categories = ModelsCategory::where('status',15)->orderby('id','desc')->get();

      return view('livewire.category', compact('blogs','categories'));
   }
}
