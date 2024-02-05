<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;


class UpdateController extends Controller
{
   public function __invoke(Post $post){
      $data = request()->validate([
         'title' => 'required|string',
         'price' => 'required|numeric',
         'image' => 'required|file',
         'description' => 'required|string',
         'category_id'=>'',
         'quantity'=>'numeric',
     ]);
     $filename = "img/".time().$_FILES['image']['name'];
   $file = Storage::disk('public')->put("img", request()->image);
   $data['image'] = asset("storage/".$file);
   // dd($data);
   $post->update($data);
   // Post::update($data);
     return redirect()->route('admin.post.show', $post->id);
   }

}
