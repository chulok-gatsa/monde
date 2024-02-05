@extends('layouts.admin')

@section('content')
<div>
    <div>
        <a href="{{ route('admin.post.create') }}">Добавить товар</a>
    </div>
    @foreach($posts as $post)
    <div><a href="{{ route('admin.post.show', $post->id) }}">{{ $post->id }}. {{ $post->title }}</a></div>
    @endforeach
</div>
<div>
    {{ $posts->links() }}
</div>
@endsection
