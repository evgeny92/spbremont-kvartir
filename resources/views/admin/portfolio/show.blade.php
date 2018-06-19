@extends('admin.layouts.main')

@section('meta-tags')
    <title>Панель управления | Просмотр портфолио</title>
@stop

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header text-center">{{ $portfolio->portfolio_title }}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="notice notice-info">
                        <strong>Проект квартиры:</strong> <span
                                class="pull-right">{{ $portfolio->apartment_project }}</span>
                    </div>
                    <div class="notice notice-info">
                        <strong>Площадь:</strong> <span class="pull-right">{{ $portfolio->apartment_area }}</span>
                    </div>
                    <div class="notice notice-info">
                        <strong>Вид ремонта:</strong> <span class="pull-right">{{ $portfolio->type_repair }}</span>
                    </div>
                    <div class="notice notice-info">
                        <strong>Год выполнения:</strong> <span
                                class="pull-right">{{ $portfolio->year_implementation }}</span>
                    </div>
                    <div class="notice notice-info">
                        <strong>Срок выполнения:</strong> <span class="pull-right">{{ $portfolio->deadline }}</span>
                    </div>

                    <strong>Мета описание:</strong> <em>{!! $portfolio->meta_description !!}</em><br>
                    <strong>Ключевые слова:</strong> <em>{!! $portfolio->meta_keywords !!}</em>

                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <label>Добавлена:</label>
                    <p>{{ $portfolio->created_at->format('d.m.y H:i') }}</p>
                </dl>
                <dl class="dl-horizontal">
                    <label>Последнее обновление:</label>
                    <p>{{ $portfolio->updated_at->format('d.m.y H:i') }}</p>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6 col-xs-6">
                        <a href="{{ route('portfolio.edit', $portfolio->id) }}" class="btn btn-warning btn-block">Редактировать</a>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                        {!! Form::open(['route' => ['portfolio.destroy', $portfolio->id], 'method' => 'DELETE', 'class' => 'delete-article']) !!}
                        <button class="btn btn-danger btn-block" type="submit">Удалить</button>
                        {!! Form::close() !!}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-12">
                        <a href="{{ route('portfolio.index') }}" class="btn btn-primary btn-block"><i
                                    class="glyphicon glyphicon-arrow-left"></i> Все статьи</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop