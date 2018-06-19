@extends('layouts.main')

@section('meta-tags')
    <title>Популярные и полезные статьи о ремонте квартиры | {{ $article->article_title }}</title>
    <meta name="description" content="{{ $article->meta_description }}.">
    <meta name="keywords" content="{{ $article->meta_keywords }}">
    <meta property="og:title" content="Популярные и полезные статьи о ремонте квартиры | {{ $article->article_title }}">
    <meta property="og:description" content="{{ $article->meta_description }}.">
@stop

@section('content')

    <section id="inner-headline">
        <div class="container">
            <div class="row">
                {!! Breadcrumbs::render('singleArticle', $article) !!}
            </div>
        </div>
    </section>

    <section id="singlepost-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center caption-h3">
                    <h3>{{ $article->article_title }}</h3>
                </div>
            </div>
            <div class="well">
                <div class="row">
                    <div class="col-md-12">
                        <div class="pull-left col-md-5 col-xs-12 thumb-content">
                            <img class="center-block img-responsive" src="{{ asset('img/articles/' . $article->article_image) }}">
                        </div>
                        {!! $article->article_content !!}
                        <p class="pull-right"><strong>Опубликовано:</strong> {{ $article->created_at->format('d.m.Y') }}</p>
                    </div>
                </div>
            </div>
            <p class="pull-left"><a href="{{ url('articles') }}">
                <strong><i class="glyphicon glyphicon-arrow-left"></i> Вернуться к статьям</strong></a>
            </p>
        </div>
    </section>

@stop