@extends('layouts.main')
@section('content')

<div class="containers">
    <div class="content">
        <div class="card_photo">
            <img src={{ $post->image }} alt="">
        </div>
        <div class="card_title">
            <p>букет</p>
            <h1>{{ $post->title }}</h1>
        </div>
        <div class="card_price">
            <p>{{ $post-> price }} руб.</p>
        </div>
        <div class="nalichie">
            <p>в наличии: </p>
        </div>
        <div class="card_description">
            <p>{{ $post->description }}</p>
        </div>
        <div class="card_button">
            <a href="#">Добавить в корзину</a>
        </div>
        <a href="{{ route('post.index') }}">Назад</a>
    </div>
</div>






<!-- <div>
    <div> {{ $post->title }}</div>
    <div>{{ $post-> price }} руб.</div>
    <div> {{ $post->description }}</div>

    <img src={{ $post->image }} alt="" />
</div>

<div>
    <a href="{{ route('post.index') }}">Назад</a>
</div> -->

@endsection
