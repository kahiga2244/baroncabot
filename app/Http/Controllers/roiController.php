<?php

namespace App\Http\Controllers;
use App\Charts\Roichart;
use App\Charts\RoichartYear;
use Illuminate\Http\Request;
use App\Helpers\Property as HelpersProperty;
use App\Imports\facebook;
use App\Models\Blog_category;
use App\Models\Blogs;
use App\Models\Cash_flow;
use App\Models\Category;
use App\Models\Inquiry;
use App\Models\Page;
use App\Models\Property;
use App\Models\Property_media;
use App\Models\Slider;
use App\Models\Teams;
use App\Models\Template;
use App\Models\Country;
use App\Models\forecasts;
use MathPHP\Finance;
use App\Models\Rate;
use App\Models\Roi;
use Newsletter;
use Location;
use Jenssegers\Agent\Agent;
use Session;
use Asciisd\Zoho\Facades\ZohoManager;
use Helpers;
use DB;
use Excel;
use PDF;

class roiController extends Controller
{
   //roi
   public function roi(Request $request, $url){

      if($request->sessionID){
         $session = $request->sessionID;
      }else{
         $session = Session::getId();
      }

      $property = Property::where('url',$url)->first();
      $cashflow = Cash_flow::where('property_id',$property->id)->first();

      $forecast = forecasts::where('property_id',$property->id)->first();

      $roi = Roi::where('session',$session)->where('property_id',$property->id)->first();

      $unitProp = Property::where('id',$roi->unitID)->first();

      $unitID = $roi->unitID;

      $units = Property::where('parentID',$property->id)->get();
      $rates = Rate::get();

      $image = HelpersProperty::cover_image($property->id)->getData();
      $cover = Helpers::backend().'/media/products/'.$image->cover->file_name;

      return view('pages.roi_new', compact('property','units','rates','cover','roi','url','forecast','unitProp','unitID','session','cashflow'));
   }

   //calculate_roi
   public function calculate_roi(Request $request){

      $property = Property::where('url',$request->url)->first();

      //check Session
      $check = Roi::where('session',$request->session)->where('property_id',$property->id)->count();

      if($check == 1){
         $country = Rate::find($request->country);

         $roi = Roi::where('session',$request->session)->first();
         $roi->country       = $country->country;
         $roi->mortgage_rate = $country->total;
         $roi->company_buy   = $request->company_buy;
         $roi->live_in       = $request->live_in;
         $roi->lease_terms   = $request->lease_terms;
         $roi->purchase_type = $request->purchase_type;
         $roi->unitID        = $request->unit;

         $roi->save();

         Session::flash('success','ROI calculated successfully');

         return redirect()->back();

      }else{
         return redirect()->route('project.roi.setup',$request->url);
      }
   }

   //calculate 2
   public function calculate_first(Request $request){
      $url      = $request->url;
      $property = Property::where('url',$url)->first();
      $cashflow = Cash_flow::where('property_id',$property->id)->first();
      $country  = Rate::find($request->country);
      $unit     = Property::find($request->unit);

      //check Session
      $check = Roi::where('session',Session::getId())->where('property_id',$property->id)->count();

      //roi
      if($check == 1){
         $roi =  Roi::where('session',Session::getId())->where('property_id',$property->id)->first();
      }else{
         $roi = new Roi;
         $roi->session                     = Session::getId();
      }
      $country = Rate::find($request->country);

      $unit =  Property::find($request->unit);

      $roi->country       = $country->country;
      $roi->mortgage_rate = $country->total;
      $roi->company_buy   = $request->company_buy;
      $roi->live_in       = $request->live_in;
      $roi->lease_terms   = $request->lease_terms;
      $roi->purchase_type = $request->purchase_type;
      $roi->unitID        = $request->unit;
      $roi->property_id   = $property->id;

      $roi->save();

      Session()->put('cashflow',[
         'price' => $unit->price,
         'size'  => $unit->size,
         'rate'  => $country->total,
         'unit'  => $request->unit,
      ]);

      return redirect()->route('project.roi',$url);
   }
}
