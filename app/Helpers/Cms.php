<?php
namespace App\Helpers;

use App\Models\cms\pages;
use App\Models\Blogs;
use App\Models\Category as ModelsCategory;
use App\Models\cms\custom_field;
use App\Models\cms\slider;
use App\Models\Country;
use App\Models\Menu;
use App\Models\Page_menu;

class Cms {
   //=====================================================================================================================
   //============================================ Pages ==================================================================
   //=====================================================================================================================
   /*======== check if the page is main page =======*/
   public static function check_if_page_is_parent($id){
      $check = pages::where('id',$id)->where('parentID',0)->count();
      return $check;
   }

   /*======== get main pages =======*/
   public static function main_page($order){
      $pages = pages::where('parentID',0)
               ->where('status',31)
               ->where('visibility','public')
               ->orderby('id',$order)
               ->get();
      return $pages;
   }

   /*======== get parent page of a child page =======*/
   public static function get_main_page($id){
      $main = pages::where('parentID',0)->where('id',$id)->first();
      return $main;
   }

   public static function page($id){
      $parent = pages::find($id);
      return $parent;

   }

   /*======== check child pages =======*/
   public static function check_child($id){
      $check = pages::where('parentID',$id)->where('status',31)->where('visibility','public')->count();
      return $check;
   }

   /*======== get child pages =======*/
   public static function child_page($id,$order){
      $children =  pages::where('parentID',$id)->where('status',31)->where('visibility','public')->orderby('id',$order)->get();
      return $children;
   }

   /*======== check custom field =======*/
   public static function custom_field($id,$title){
      $field = custom_field::where('pageID',$id)->where('title',$title);
      return response()->json([
         "field" => $field->first(),
         "check" => $field->count(),
      ]);
   }

   //=====================================================================================================================
   //============================================ Menu ===================================================================
   //=====================================================================================================================
   //check if menu exists
   public static function check_menu($id){
      $check = Menu::where('id',$id)->where('status',15)->count();
      return $check;
   }

   //get menu pages
   public static function menu_main_pages($id){
      $page = page_menu::join('pages','pages.id','=','page_menu.pageID')
                        ->where('menuID',$id)
                        ->where('page_menu.parentID',0)
                        ->orderby('position')
                        ->select('*','pages.id as pageID')
                        ->get();

      return $page;
   }

   //get menu page children
   public static function children_menu($menuID,$pageID){
      $query = Page_menu::join('pages','pages.id','=','page_menu.pageID')
                     ->where('page_menu.parentID',$pageID)
                     ->where('menuID',$menuID);

      $menu = $query->select('*','page_menu.position as position','page_menu.pageID as pageID','page_menu.id as menuItemID')
                     ->orderby('page_menu.position','asc')
                     ->get();

      $check = $query->count();

      return response()->json([
         "menuItems"  => $menu,
         "check"      => $check,
      ]);
   }


   //=====================================================================================================================
   //============================================ blog ===================================================================
   //=====================================================================================================================
   /*======== get posts =======*/
   public static function posts(){
      $posts = Blogs::where('status',31)->orderby('id','desc')->limit(6)->get();
      return $posts;
   }

   /*======== get by category =======*/
   public static function post_categories($id){
      $blog = ModelsCategory::join('blog_category','blog_category.category_id','=','category_blogs.id')
               ->where('blog_id',$id)
               ->get();
      return $blog;
   }

   public static function all_post_categories(){
      $categories = category::where('status',15)->get();
      return $categories;
   }

   /*======== latest article =======*/
   public static function latest($id){
      $latest = blog::join('blog_category','blogs.id','=','blog_category.blog_id')
               ->where('blog_category.id',$id)
               ->orderby('blogs.id','desc')
               ->select('*','blogs.created_at as blog_date','blogs.url as blog_url')
               ->get();

      return $latest;
   }




   //========================================================================================================================
   //============================================ Slider ===================================================================
   //========================================================================================================================
   public static function sliders(){
      $sliders = slider::where('status',15)->orderby('id','desc')->get();
      return $sliders;
   }


   public static function country(){
      $country = Country::get();
      return $country;
   }
}
