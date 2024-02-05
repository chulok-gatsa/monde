<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{

   public function __invoke(FilterRequest $request){
    // $this->authorize('view',auth()->user());

   $data = $request->validated();
      $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);
      $posts = Post::filter($filter)->paginate(10);
   // dd($posts);


   //  $posts = Post::paginate(10);
    return view('post.index', compact('posts'));
   }

}
