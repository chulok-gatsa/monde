<?php

namespace App\Http\Controllers\Admin\Post;
use App\Models\Category;

use App\Http\Controllers\Controller;
use App\Models\Post;

class CreateController extends Controller
{
   public function __invoke(){
    $categories = Category::all();
    return view('admin.post.create',compact('categories'));
   }

}
