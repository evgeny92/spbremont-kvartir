@extends('layouts.main')

@section('meta-tags')
    <title>Популярные и полезные статьи о ремонте квартиры</title>
    <meta name="description" content="Полезные статьи о ремонте квартиры.">
    <meta name="keywords" content="статьи о ремонте, полезные статьи о ремонте, статьи о ремонте санкт-петербург">
    <meta property="og:title" content="Популярные и полезные статьи о ремонте квартиры">
    <meta property="og:description" content="Полезные статьи о ремонте квартиры.">
@stop

@section('content')

    <section id="inner-headline">
        <div class="container">
            <div class="row">
                {!! Breadcrumbs::render('articles') !!}
            </div>
        </div>
    </section>

    <section id="posts-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center caption-h3">
                    <h3>Полезные статьи о ремонте квартир</h3>
                </div>
            </div>
            @foreach($articles->chunk(3) as $items)
                <div class="row">
                    @foreach($items as $item)
                        <div class="col-md-4">
                            <div class="blog-post hover02">
                                <img class="img-responsive" src="{{ asset('img/articles/' . $item->article_image ) }}" alt="">
                                <h4><a href="{{ url('articles', $item->article_slug) }}">
                                        {{ $item->article_title }}</a>
                                </h4>
                                <p>{{ str_limit(strip_tags($item->article_content), 140) }}<p>
                                    <a class="btn btn-posts" href="{{ url('articles', $item->article_slug) }}">
                                        <span class="glyphicon glyphicon-eye-open"></span> Подробнее</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>

@stop