@extends('layouts.main')
@section('content')

<div>
<form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input value="{{ old('title') }}" type="text" name="title" class="form-control" id="title" placeholder = "Title" required>
    @error('title')
    <p>{{ $message }}</p>
    @enderror
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input value="{{ old('price') }}" type="text" name="price" class="form-control" id="price" placeholder = "price" required>
    @error('price')
    <p>{{ $message }}</p>
    @enderror
  </div>
  <div class="mb-3">
    <label for="quantity" class="form-label">quantity</label>
    <input value="{{ old('quantity') }}" type="text" name="quantity" class="form-control" id="quantity" placeholder = "quantity" >
    @error('quantity')
    <p>{{ $message }}</p>
    @enderror
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">description</label>
    <input value="{{ old('description') }}" type="text" name="description" class="form-control" id="description" placeholder = "description" required>
    @error('description')
    <p>{{ $message }}</p>
    @enderror
  </div>
  <label for="category">Category</label>
   <select class="form-select" id="category" name="category_id">
    @foreach ($categories as $category)
          <option  value="{{$category->id}}">{{$category->title}}</option>
    @endforeach
  </select>

  <div class="mb-3">
    <label for="image" class="form-label">image</label>
    <input value="{{ old('image') }}" type="file" name="image" class="form-control" id="image" accept="image/png, image/gif, image/jpeg" required>
    @error('image')
    <p>{{ $message }}</p>
    @enderror
  </div>

  <button type="submit" class="btn btn-primary">Создать</button>
</form>
</div>
@endsection
