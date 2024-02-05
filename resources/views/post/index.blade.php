@extends('layouts.main')
@section('content')
    <header>
        <div class="block1">
            <div class="block1_content">
                <div class="block1_back_catalog">
                    <img class="catalog_block1" src="/img/catalog/background_block1.png" alt="">
                </div>
                <div class="block1_title_catalog">
                    <p>Розовые дни скидки до -40%</p>
                </div>
                <div class="block1_button_catalog">
                    <a href="#">перейти к акции</a>
                </div>
            </div>

        </div>
        <div class="block2">
            <div class="block2_content">
                <div class="sort">
                    <p>Фильтр</p>
                </div>
                <div class="sort_title_catalog">
                    <a href="#">цена</a>
                    <a href="#">только в наличии</a>
                </div>
                <div class="search">
                    <form action="{{ route('search.index') }}" method="get">
                    <input type="text" name="title" id="title" plaseholder="Search...">

                    <button type="submit">Найти</button>
                </form>
                </div>
            </div>

        </div>
    </header>
    <div class="cont_row">
        <div class="rows">
            @foreach ($posts as $post)
                <div class="containers">
                    <div class="catalog_content">

                        <div class="content_image">
                            <a href="{{ route('post.show', $post->id) }}"><img width="250" height="346"
                                    src={{ $post->image }} alt="" /></a>
                            <div class="catalog_titles">
                                <a href="{{ route('post.show', $post->id) }}">{{ $post->title }} </a>
                            </div>

                            <p class="title_price">{{ $post->price }} руб.</p>

                            <div class="buton_basket">
                                <a href="#">в корзину</a>
                            </div>
                        </div>

                    </div>

                    {{-- <div class="col-lg-4 col-sm-6 mb-3" >
                    <div class="product-card">
                        <div class="product-thumb">
                            <a href="{{ route('post.show', $post->id) }}"><img width="250" height="346" src={{ $post->image }} alt=""></a>
                        </div>
                        <div class="product-details">
                            <h4><a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a></h4>
                     <div class="product-bottom-details d-flex justify-content-between">
                                <div class="product-price">
                                    <p>{{ $post->price }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                </div>
            @endforeach

        </div>
    </div>


    </div>
    <div>
        {{ $posts->withQueryString()->links() }}
    </div>
@endsection
