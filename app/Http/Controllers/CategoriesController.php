<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use DB;
use App\Category;
use Illuminate\Support\Facades\Input;



class CategoriesController extends Controller
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



    public function index()
    {
        $categories = Category::get();
        return view ('admin.categories.view_cat')->with(compact('categories'));
    }



    public function create(Request $request)
    {
        if($request->isMethod('post')){
            $this->validate($request,[
                'category_name' => 'required'
            ]);
            $data =  $request->all();
            $category = new Category;
            $category->name = $data['category_name'];
            $category->parent_id=$data['parent_id'];
            $category->save();

            Session::flash('success','New Category Added!');
            return redirect()->back();
        }

            $levels= Category::where(['parent_id'=>0])->get();
            return view('admin.categories.create')->with(compact('levels'));


    }




      public function edit(Request $request,$id = null){

            if ($request->isMethod('post')){
                $this->validate($request,[
                    'category_name' => 'required',
                ]);
                $data = $request->all();
                Category::where(['id' => $id])
                    ->update(['name' => $data['category_name']
                              
                    ]);
                Session::flash('success','Category Updated!');
                return redirect ('admin/categories');
            }

            $categoryDetails = Category::where(['id' => $id ] )->first();
            $levels= Category::where(['parent_id'=>0])->get();
            return view('admin.categories.edit')->with(compact('categoryDetails','levels'));

      }



     /*  public function deleteCategory(Request $request,$id=null)
        {
            if(!empty($id))
            {
                Category::where(['id'=>$id])->delete();
                Session::flash('success','Category Deleted Sucessfully!');
                return redirect()->back();
            }

        } */


}







