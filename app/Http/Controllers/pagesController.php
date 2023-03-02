<?php

namespace App\Http\Controllers;

use App\Charts\Roichart;
use App\Charts\RoichartYear;
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
use App\Models\Rate;
use App\Models\Roi;
use Newsletter;
use Location;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use Session;
use Asciisd\Zoho\Facades\ZohoManager;
use Helpers;
use DB;
use Excel;
use PDF;

class pagesController extends Controller
{
   //home page
   public function home(Request $request){

      if($request->utm_source){
         Session()->put('utm',[
            'source'    => $request->utm_source,
            'medium'    => $request->utm_medium,
            'campaign'  => $request->utm_campaign,
            'content'   => $request->utm_content,
            'term'      => $request->utm_term,
            'matchtype' => $request->utm_matchtype,
         ]);
      }

      $page = Page::where('url','home')->first();
      $teams = Teams::where('status','Active')->orderby('rank','asc')->get();
      $properties = Property::orderby('id','desc')->where('publish','Yes')->limit(6)->get();
      $blogs = Blog_category::join('blogs','blogs.id','=','blog_category.blog_id')
                     ->where('category_id',2)
                     ->where('status',31)
                     ->orderby('blogs.created_at','desc')
                     ->limit(3)
                     ->get();
      $sliders = Slider::where('status',15)->orderby('id','desc')->get();
      $agent = new Agent;

      return view('pages.home', compact('teams','properties','blogs','sliders','agent','page'));
   }

   //page
   public function page(Request $request, $url){
      if($request->utm_source){
         Session()->put('utm',[
            'source'    => $request->utm_source,
            'medium'    => $request->utm_medium,
            'campaign'  => $request->utm_campaign,
            'content'   => $request->utm_content,
            'term'      => $request->utm_term,
            'matchtype' => $request->utm_matchtype,
         ]);
      }

      $agent = new Agent;

      if($url == 'home'){
         return redirect()->route('page.home');
      }

      if($url == 'insights'){
         $page = Page::where('url','insights')->first();

         $ip = request()->ip();
         if($ip == '127.0.0.1'){
            $ip = '49.35.41.195';
         }else{
            $ip = request()->ip();
         }

         $data = Location::get($ip);
         return view('pages.'.$url, compact('data','page'));
      }

      if($url == 'our-team'){
         $page = Page::where('url',$url)->first();

         $teams = Teams::where('status','Active')->orderby('id','asc')->get();

         return view('pages.team', compact('teams','agent','page'));
      }

      if($url == 'projects'){
         $page = Page::where('url','projects')->first();

         $properties = Property::whereNull('parentID')->where('publish','Yes')->orderby('id','desc')->get();
         if($request->location){
            $location = $request->location;
         }else{
            $location = "";
         }

         return view('pages.projects2', compact('properties','location','page','agent'));
      }

      $page = Page::where('url',$url)->first();
      $template = Template::find($page->template);

      if($page->template == ""){
         return view('pages.general',compact('page'));
      }else{
         return view('pages.'.$template->blade_name, compact('page','agent'));
      }
   }

   public function child_page(Request $request,$parent,$url){
      if($request->utm_source){
          Session()->put('utm',[
            'source'    => $request->utm_source,
            'medium'    => $request->utm_medium,
            'campaign'  => $request->utm_campaign,
            'content'   => $request->utm_content,
            'term'      => $request->utm_term,
            'matchtype' => $request->utm_matchtype,
         ]);
      }

      $agent = new Agent;

      $page = Page::where('url',$url)->first();
      $template = Template::find($page->template);

      $parent = Page::where('url',$parent)->first();

      if($url == 'due-diligence'){
         $page = Page::where('url','due-diligence')->first();

         if($agent->isMobile()){
            return view('pages.mobile.due-diligence', compact('agent'));
         }else{
            return view('pages.due-diligence', compact('agent','page'));
         }
      }

      if($page->template == ""){
         $parent = [];
         return view('pages.general',compact('page','agent'));
      }else{
         return view('pages.'.$template->blade_name, compact('page','parent','agent'));
      }

   }

   //project details
   public function project_details(Request $request,$url){

      if($request->utm_source){
          Session()->put('utm',[
            'source'    => $request->utm_source,
            'medium'    => $request->utm_medium,
            'campaign'  => $request->utm_campaign,
            'content'   => $request->utm_content,
            'term'      => $request->utm_term,
            'matchtype' => $request->utm_matchtype,
         ]);
      }

      $property = Property::where('url',$url)->first();
      $images = Property_media::where('productID',$property->id)->get();
      $cover =  Property_media::where('productID',$property->id)->where('cover',1)->first();
      $forecast = forecasts::where('property_id',$property->id)->first();

      $units = Property::where('parentID',$property->id)->get();
      $rates = Rate::get();

      $checkCashFlow = Cash_flow::where('property_id',$property->id)->count();
      if($checkCashFlow == 1){
         $flow = Cash_flow::where('property_id',$property->id)->first();
      }else{
         $flow = [];
      }


      return view('pages.project_details2', compact('property','images','cover','rates','units','checkCashFlow','flow','forecast'));
   }

   //blog details
   public function blog_details(Request $request,$url){
      if($request->utm_source){
          Session()->put('utm',[
            'source'    => $request->utm_source,
            'medium'    => $request->utm_medium,
            'campaign'  => $request->utm_campaign,
            'content'   => $request->utm_content,
            'term'      => $request->utm_term,
            'matchtype' => $request->utm_matchtype,
         ]);
      }

      $blog = Blogs::where('url',$url)->first();

      $categories = Category::where('status',15)->orderby('id','desc')->get();

      return view('pages.insights_details', compact('blog','categories'));
   }

   //blog details
   public function blog_category(Request $request,$url){
      if($request->utm_source){
          Session()->put('utm',[
            'source'    => $request->utm_source,
            'medium'    => $request->utm_medium,
            'campaign'  => $request->utm_campaign,
            'content'   => $request->utm_content,
            'term'      => $request->utm_term,
            'matchtype' => $request->utm_matchtype,
         ]);
      }

      $category = Category::where('url',$url)->first();

      return view('pages.blog_category', compact('category'));
   }

   //newsletter
   public function newsletter(Request $request){
     // Newsletter::subscribe($request->email, ['FNAME'=>'ENTER_FIRST_NAME', 'LNAME'=>'ENTER_LAST_NAME']);
     Newsletter::subscribe($request->email);

     Session::flash('success', 'Thank you for subscribing');
   }

   //inquiry
   public function inquiry(Request $request){
      $this->validate($request,[
         'first_name' => 'required',
         'last_name' => 'required',
         'email' => 'required',
         'phone_number' => 'required',
         'g-recaptcha-response' => 'required|captcha',
      ]);

         $spamCheck = $request->first_name.' '.$request->last_name;

         if($spamCheck === 'CrytoClilmClilm CrytoClilmClilm'){
            return redirect()->route('page.home');
         }

         if($spamCheck === 'CrytoClilm CrytoClilm'){
            return redirect()->route('page.home');
         }

         // if(strpos($request->phone_number,'+') == 0){
         //    Session::flash('error','This phone number '.$request->phone_number.' is not correct, please make sure the country code starts with +');

         //    return redirect()->back();
         // }

         //$country = Country::find($request->country);

         //$phone_number = '+'.$country->phonecode.$request->phone_number;

         //check if is in inquiry
         $check = Inquiry::where('email',$request->email)->count();

         if($check == 0){
            $inquiry = new Inquiry;
            $inquiry->first_name   = $request->first_name;
            $inquiry->last_name    = $request->last_name;
            $inquiry->email        = $request->email;
            $inquiry->phone_number = $request->phone_number;
            //$inquiry->country    = $country->name;
            $inquiry->message      = $request->inquiry;
            $inquiry->save();

            //lead source
            if($request->page == 'Facebook'){
               $leadSource = 'Facebook Custom Conversion';
            }else{
               $leadSource = 'Website - '.$request->page;
            }

            // we can now deals with leads module
            $leads = ZohoManager::useModule('Leads');

            // initiating a new empty instance of leads
            $record = $leads->getRecordInstance();

            // fill this instance with data
            $record->setFieldValue('First_Name', $request->first_name);
            $record->setFieldValue('Last_Name', $request->last_name);
            $record->setFieldValue('Email', $request->email);
            $record->setFieldValue('Phone', $request->phone_number);
            $record->setFieldValue('Mobile', $request->phone_number);
            //$record->setFieldValue('Country', $country->name);Data_Source
            $record->setFieldValue('Data_Source', $leadSource);
            if(session()->get('utm')){
               $record->setFieldValue('Lead_Source', session()->get('utm')['source']);
            }else{
               $record->setFieldValue('Lead_Source', $leadSource);
            }
            $record->setFieldValue('Website', $leadSource);
            $record->setFieldValue('Description', $request->inquiry);
            $record->setFieldValue('Lead_Status', 'New Lead');

            if(session()->get('utm')){
               $record->setFieldValue('utm_source', session()->get('utm')['source']);
               $record->setFieldValue('utm_medium', session()->get('utm')['medium']);
               $record->setFieldValue('utm_campaign', session()->get('utm')['campaign']);
               $record->setFieldValue('utm_content', session()->get('utm')['content']);
               $record->setFieldValue('utm_term', session()->get('utm')['term']);
               $record->setFieldValue('utm_matchtype', session()->get('utm')['matchtype']);
            }

            // create the record into zoho crm then get the created instance data
            $record->create()->getData();
         }

         //Session::flash('success','Information submitted successfully');

         return redirect()->route('page','thank-you');
   }

   //facebook inquiry
   public function facebook_leads(){
      return view('pages.facebook');
   }

   //facebook inquiry
   public function facebook_leads_post(Request $request){

      $this->validate($request, [
         'leads' => 'required',
      ]);

      $file = request()->file('leads');

		Excel::import(new facebook(), $file);

      Session::flash('success', 'Leads uploaded successfully.');

      return redirect()->route('page.home');
   }

   //questions
   public function questions(){
      $agent = new Agent;
      return view('landings.questions', compact('agent'));
   }

   //submit questions
   public function funnel_step_one(Request $request){

      $this->validate($request,[
         'first_name'   => 'required',
         'last_name'    => 'required',
         'email'        => 'required',
         'phone_number' => 'required',
      ]);

      $check = Inquiry::where('email',$request->email)->count();
      if($check == 0){

         $inquiry = new Inquiry;
         $inquiry->first_name   = $request->first_name;
         $inquiry->last_name    = $request->last_name;
         $inquiry->email        = $request->email;
         $inquiry->phone_number = $request->phone_number;
         $inquiry->save();

         // we can now deals with leads module
         $leads = ZohoManager::useModule('Leads');

         // initiating a new empty instance of leads
         $record = $leads->getRecordInstance();

         $leadSource = 'Funnel';

         // fill this instance with data
         $record->setFieldValue('First_Name', $request->first_name);
         $record->setFieldValue('Last_Name', $request->last_name);
         $record->setFieldValue('Email', $request->email);
         $record->setFieldValue('Phone', $request->phone_number);
         $record->setFieldValue('Mobile', $request->phone_number);

         $record->setFieldValue('Data_Source', $leadSource);
         $record->setFieldValue('Lead_Source', $leadSource);
         $record->setFieldValue('Website', $leadSource);
         $record->setFieldValue('Lead_Status', 'New Lead');

         // create the record into zoho crm then get the created instance data
         $record->create()->getData();

         Session::flash('success','Information submitted successfully');

         return redirect()->route('landing.questions.next',[$request->email,$request->phone_number,$request->first_name,$request->last_name]);
      }else{
         return redirect()->route('page','thank-you');
      }
   }

   //questions
   public function question_next($email,$phone_number,$first_name,$last_name){
      $agent = new Agent;
      return view('landings.questions_step_2', compact('agent','email','phone_number','first_name','last_name'));
   }

   //submit questions
   public function question_submit(Request $request){

      $this->validate($request,[
         'first_name'   => 'required',
         'last_name'    => 'required',
         'email'        => 'required',
         'phone_number' => 'required',
         'choose_city'     => 'required',
         'when_to_buy'     => 'required',
      ]);

      $check = Inquiry::where('email',$request->email)->count();
      if($check == 0){

         // we can now deals with leads module
         $leads = ZohoManager::useModule('Leads');

         // initiating a new empty instance of leads
         $record = $leads->getRecordInstance();

         $leadSource = 'Funnel';

         $cityImplode = implode(", ", $request->choose_city);

         // fill this instance with data
         $record->setFieldValue('First_Name', $request->first_name);
         $record->setFieldValue('Last_Name', $request->last_name);
         $record->setFieldValue('Email', $request->email);
         $record->setFieldValue('Phone', $request->phone_number);
         $record->setFieldValue('Mobile', $request->phone_number);

         $record->setFieldValue('Data_Source', $leadSource);
         $record->setFieldValue('Lead_Source', $leadSource);
         $record->setFieldValue('Website', $leadSource);
         $record->setFieldValue('Lead_Status', 'New Lead');

         $record->setFieldValue('Cities_interested_in', $cityImplode);
         $record->setFieldValue('When_are_you_looking_to_buy', $request->when_to_buy);

         // create the record into zoho crm then get the created instance data
         $record->create()->getData();

         Session::flash('success','Information submitted successfully');

         return redirect()->route('page','thank-you');
      }else{
         return redirect()->route('page','thank-you');
      }
   }

   //funnel
   public function funnel(){
      $agent = new Agent;

      return view('landings.funnel',  compact('agent'));
   }
}
