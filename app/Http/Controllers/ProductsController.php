<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Session;
use Illuminate\Support\Facades\Input;
use Image;
use App\Product;
use App\Category;


class ProductsController extends Controller
{

/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function viewProducts(Request $request)
    {

        $products= Product::get();
        foreach($products as $key =>$val){
            //creating a variable "$val" to map it to category main id field first
            $category_name = Category::where(['id'=>$val->category_id])->first();
            //assigning variable "key" to map to category_name field
            $products[$key]->category_name = $category_name->name;
        }
        return view('admin.products.view_products')->with(compact('products'));
    }


    public function create(Request $request)
    {
        //data validations
    if ($request->isMethod('post')){

    $this->validate($request,[
        'product_name' => 'required',
        'category_id' => 'required',
       /*  'product_code' => 'required' */
        'price' => 'required|regex:/^\d*(\.\d{2})?$/',
        'description' => 'required',
      /*   'image' => 'required|mimes:jpeg,jpg,png' */

    ]);

    $data=$request->all();
    //initialzing products table
    $product=new Product;
    //mapping db fields to view fields
    $product->category_id =  $data['category_id'];
    $product->product_name = $data['product_name'];
    $product->product_code = $data['product_SKU'];
    $product->price = $data['price'];
    $product->description = $data['description'];


    //Upload Image
    if($request->hasFile('image')){
        $image_tmp= Input::file('image');
        if($image_tmp->isValid()){
    //Moving Image to Temporary Path
        $extension= $image_tmp->getClientOriginalExtension();
        $filename= rand(111,99999).'.'.$extension;
        $large_image_path='back/images/products/large/'.$filename;
        $medium_image_path='back/images/products/medium/'.$filename;
       $small_image_path='back/images/products/small/'.$filename;
    //Resizing Image
        Image::make($image_tmp)->save($large_image_path);
        Image::make($image_tmp)->resize(400,400)->save($medium_image_path);
        Image::make($image_tmp)->resize(90,100)->save($small_image_path);
    //Store Uploaded Image in Products Table
    $product->image= $filename;

}
    }

    $product->save();
    Session::flash('success','New Product Added!');
    return redirect()->back();

    }


//adding main categories and subcatergories to the selection field
$categories= Category::where(['parent_id'=>0])->get();
$categories_dropdown= "<option value='' selected disabled>Select</option>";
foreach($categories as $cat){
    $categories_dropdown .= "<option value='".$cat->id."'>" .$cat->name."</option>";
    $sub_categories= Category::where(['parent_id'=>$cat->id])->get();

foreach($sub_categories as $sub_cat){
     $categories_dropdown .=  "<option value = '".$sub_cat->id."'>&nbsp;--&nbsp".$sub_cat->name."</option>";
}
}
return view('admin.products.create')->with(compact('categories_dropdown'));
}


   public function trashProduct($id)
   {
          $product = Product::find($id);
          $product->delete();
          Session::flash('success', 'Product Trashed!');
          return redirect()->back();

   }



  public function destroyProduct($id=null){
            Product::where(['id'=>$id])->delete();
            return redirect()->back()->with('flash_message_success','Product Deleted');

        }




















}
