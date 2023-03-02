<?php
namespace App\Helpers;
use App\Models\product_category_product_information;
use App\Models\Property_media;
use App\Models\category;
use App\Models\Property as ModelsProperty;

class Property
{
   /*==============================================================================================
   ===                                        products                                          ===
   ===============================================================================================*/

	//get cover image
	public static function cover_image($id){
		$image = Property_media::where('productID',$id)->where('cover',1);

      $cover = $image->first();
      $check = $image->count();

      return response()->json([
         "cover" => $cover,
         "check"   => $check,
      ]);
	}

   //get product image
	public static function product_image($id){
		$images = Property_media::where('productID',$id)->get();
      return $images;
	}

	//product category
	public static function product_category($id){
		$category = category::where('id',$id)->first();
		return $category;
	}

	//product inventory
	public static function inventory($id){
		$inventory = product_inventory::where('productID',$id)->first();
		return $inventory;
	}

	//products by category
	public static function products_by_category_count($id){
		$products = product_category_product_information::join('product_information','product_information.id','=','product_category_product_information.productID')

			->where('productID',$id)
			->count();

		return $products;
	}

	//products in a category
	public static function products_in_category($id){
		$count = product_category_product_information::where('categoryID',$id)->count();

		return $count;
	}

   //property
   public static function property_details($id){
      $property = ModelsProperty::where('id',$id)->first();

      return $property;
   }

   //property
   public static function property_info($id){
      $property = ModelsProperty::where('id',$id);

      return response()->json([
         "cover" => $property->count(),
         "property"   => $property->first(),
      ]);
   }
}
