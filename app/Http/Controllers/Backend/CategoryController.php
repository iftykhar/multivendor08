<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Faker\Guesser\Name;
use Illuminate\Http\Request;
use Illuminate\support\Str;

class CategoryController extends Controller
{
   public function index(){
        return view('admin.pages.category.add');
   }

   public function store(Request $request){
      $category = new Category;
      $category->name = $request->cat_name;
      $category->slug = Str::slug($request->cat_name);
   }
}
