<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
   public function __invoke(){
      $data = request()->validate([
         'title' => 'required|string',
         'price' => 'required|numeric',
         'image' => 'required|file',
         'description' => 'required|string',
         'category_id'=>'required|string',
         'quantity'=>'numeric',
     ]);
     $filename = "img/".time().$_FILES['image']['name'];
     $file = Storage::disk('public')->put("img", request()->image);
     $data['image'] = asset("storage/".$file);
     Post::create($data);
     return redirect()->route('admin.post.index');

   }

}
