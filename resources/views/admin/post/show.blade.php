@extends('layouts.main')
@section('content')
<div>
    <div>{{ $post->id }}. {{ $post->title }}</div>
    <div>{{ $post-> price }}</div>
    <div>{{ $post-> description }}</div>
    <div><img src={{ $post->image }} alt=""></div>

    <!-- <img src={{ $post->image }} alt="" /> -->
</div>
<a href="{{ route('admin.post.edit', $post->id) }}">Изменить</a>
<div>
    <form action="{{ route('admin.post.delete', $post->id) }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="delete">
    </form>

</div>
<div>
    <a href="{{ route('admin.post.index') }}">Назад</a>
</div>

@endsection
