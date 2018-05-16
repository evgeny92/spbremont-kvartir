@extends('admin.layouts.main')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header text-center">{{ $article->article_title }}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="pull-left col-md-5 thumb-content">
                        <img class="img-responsive" src="{{ asset('img/articles/' . $article->article_image) }}">
                    </div>
                    {!! $article->article_content !!}
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <label>Добавлена:</label>
                    <p>{{ $article->created_at->format('d.m.y H:i') }}</p>
                </dl>
                <dl class="dl-horizontal">
                    <label>Последнее обновление:</label>
                    <p>{{ $article->updated_at->format('d.m.y H:i') }}</p>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6 col-xs-6">
                        <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning btn-block">Редактировать</a>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                        {!! Form::open(['route' => ['articles.destroy', $article->id], 'method' => 'DELETE', 'class' => 'delete-article']) !!}
                        <button class="btn btn-danger btn-block" type="submit">Удалить</button>
                        {!! Form::close() !!}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-12">
                        <a href="{{ route('articles.index') }}" class="btn btn-primary btn-block"><i
                                    class="glyphicon glyphicon-arrow-left"></i> Все статьи</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop