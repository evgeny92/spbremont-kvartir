@extends('layouts.main')

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
            <div class="row">
                @foreach($articles as $article)
                <div class="col-sm-4">
                    <div class="well hover02">
                        <img class="img-responsive" src="{{ asset('img/' . $article->article_image ) }}" alt="">
                        <h3>{{ $article->article_title }}</h3>
                        <p>{{ str_limit(strip_tags($article->article_content), 150) }}</p>
                        <a class="btn btn-posts" href="{{ url('articles', $article->article_slug) }}"><span
                                    class="glyphicon glyphicon-eye-open"></span> Подробнее</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@stop