@extends('layouts.main')
@section('content')
<div>
<form action="{{ route('admin.post.update', $post->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('patch')
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" id="title" placeholder = "Title" value="{{ $post->title }}">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input type="text" name="price" class="form-control" id="price" placeholder = "price" value="{{ $post->price }}">
  </div>
  <div class="mb-3">
    <label for="quantity" class="form-label">quantity</label>
    <input type="text" name="quantity" class="form-control" id="quantity" placeholder = "quantity" value="{{ $post->quantity }}">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">description</label>
    <input type="text" name="description" class="form-control" id="description" placeholder = "description" value="{{ $post->description }}">
  </div>

  <label for="category">Category</label>
  <select class="form-select" id="category" name="category_id">
   @foreach ($categories as $category)

         <option
         {{-- {{$category->id==$post->category->id ?'selected': ''}}  ошибка с фйди не ставит на первую строчку при изменении нужный файл--}}
         value="{{$category->id}}">{{$category->title}}</option>
   @endforeach
 </select>

  <div class="mb-3">
    <label for="image" class="form-label">image</label>

    <input  type="file" name="image" class="form-control" id="image" accept="image/png, image/gif, image/jpeg" required ">

  </div>

  <button type="submit" class="btn btn-primary">Изменить</button>
</form>
</div>
@endsection
