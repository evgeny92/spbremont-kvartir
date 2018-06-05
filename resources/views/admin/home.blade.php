@extends('admin.layouts.main')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Админ панель</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-suitcase fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{ $portfolios->count() }}</div>
                            <div>Новые объекты</div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('portfolio.index') }}">
                    <div class="panel-footer">
                        <span class="pull-left">Смотреть подробнее</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-edit fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{ $articles->count() }}</div>
                            <div>Новые статьи</div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('articles.index') }}">
                    <div class="panel-footer">
                        <span class="pull-left">Смотреть подробнее</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>

@stop

