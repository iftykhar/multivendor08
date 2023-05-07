<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Faker\Guesser\Name;
use Illuminate\Http\Request;
use Illuminate\support\Str;
use Image;
use File;

class CategoryController extends Controller
{
   public function index(){
        return view('admin.pages.category.add');
   }

   public function store(Request $request){
      $category = new Category;
      if($request->image){
         $image = $request->file('image');
         $customName = rand().".".$image->getClientOriginalExtension();
         $locatoin = public_path("uploads/category/".$customName);
         Image::make($image)->resize(100,100)->save($locatoin);
         // Image::make($image)->resize(100,100)->save($locatoin);
         $category->cat_image = $customName;

      }
      $category->cat_name = $request->cat_name;
      $category->cat_slug = Str::slug($request->cat_name);
      $category->save();
      return back()->with('msg','category successfully added');
   }

   public function show(){
      $categories  = Category::all();
      return view('admin.pages.category.manage');

   }
}
