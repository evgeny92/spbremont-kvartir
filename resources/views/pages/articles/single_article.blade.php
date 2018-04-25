@extends('layouts.main')

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
                            <img class="center-block img-responsive" src="{{ asset('img/' . $article->article_image) }}">
                        </div>
                        <p class="text-justify">{{ $article->article_content }}</p>
                        <p class="pull-right"><b>Опубликовано:</b> {{ $article->created_at->format('d.m.Y') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop