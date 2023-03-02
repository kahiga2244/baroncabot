<?php

namespace App\Http\Controllers;

use App\Models\Blog_category;
use App\Models\Property;
use Asciisd\Zoho\Facades\ZohoManager;
use Jenssegers\Agent\Agent;
use Session;
use Helpers;

class landingPageController extends Controller
{
   //lead1
   public function leads1(){
      $agent = new Agent;
      return view('landings.lead1', compact('agent'));
   }

   //lead2
   public function leads2(){
      $agent = new Agent;
      $properties = Property::orderby('id','desc')->where('publish','Yes')->limit(3)->get();
      $blogs = Blog_category::join('blogs','blogs.id','=','blog_category.blog_id')
                     ->where('category_id',2)
                     ->where('status',31)
                     ->orderby('blogs.created_at','desc')
                     ->limit(3)
                     ->get();

      return view('landings.lead2', compact('agent','blogs','properties'));
   }
}
