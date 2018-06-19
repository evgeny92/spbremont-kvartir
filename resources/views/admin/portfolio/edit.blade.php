@extends('admin.layouts.main')

@section('meta-tags')
    <title>Панель управления | Редактирование портфолио</title>
@stop

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header text-center">Редактирование портфолио</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            @include('admin.partials.messages')
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ route('portfolio.index') }}" class="btn btn-primary btn-sm"><i
                                class="glyphicon glyphicon-arrow-left"></i> Все работы</a>
                </div>
                <div class="panel-body">
                    {!! Form::model($portfolio, ['route' => ['portfolio.update', $portfolio->id], 'method' => 'PUT', 'files' => 'true' ]) !!}
                    <div class="col-md-10 col-md-offset-1">

                        <div class="form-group {{ $errors->has('portfolio_title') ? 'has-error' : '' }}">
                            <label for="portfolio_title">Заголовок портфолио</label>
                            <input type="text" id="portfolio_title" name="portfolio_title" class="form-control"
                                   value="{{ $portfolio->portfolio_title }}">
                            <span class="text-danger">{{ $errors->first('portfolio_title') }}</span>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('apartment_project') ? 'has-error' : '' }}">
                                    <label for="apartment_project">Проект квартиры</label>
                                    <input type="text" id="apartment_project" name="apartment_project"
                                           class="form-control" value="{{ $portfolio->apartment_project }}">
                                    <span class="text-danger">{{ $errors->first('apartment_project') }}</span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('apartment_area') ? 'has-error' : '' }}">
                                    <label for="apartment_area">Площадь</label>
                                    <input type="text" id="apartment_area" name="apartment_area"
                                           class="form-control" value="{{ $portfolio->apartment_area }}">
                                    <span class="text-danger">{{ $errors->first('apartment_area') }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('type_repair') ? 'has-error' : '' }}">
                                    <label for="type_repair">Вид ремонта</label>
                                    <input type="text" id="type_repair" name="type_repair"
                                           class="form-control" value="{{ $portfolio->type_repair }}">
                                    <span class="text-danger">{{ $errors->first('type_repair') }}</span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('year_implementation') ? 'has-error' : '' }}">
                                    <label for="year_implementation">Год выполнения</label>
                                    <input type="text" id="year_implementation" name="year_implementation"
                                           class="form-control" value="{{ $portfolio->year_implementation }}">
                                    <span class="text-danger">{{ $errors->first('year_implementation') }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('deadline') ? 'has-error' : '' }}">
                                    <label for="deadline">Срок выполнения</label>
                                    <input type="text" id="deadline" name="deadline"
                                           class="form-control" value="{{ $portfolio->deadline }}">
                                    <span class="text-danger">{{ $errors->first('deadline') }}</span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('portfolio_photos') ? 'has-error' : '' }}">
                                    <label for="portfolio_photos">Фотографии</label>
                                    <input type="file" id="portfolio_photos" name="portfolio_photos[]"
                                           class="form-control" multiple>
                                    <span class="text-danger">{{ $errors->first('portfolio_photos') }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('meta_description') ? 'has-error' : '' }}">
                            <label for="meta_description">Мета описание</label>
                            <input type="text" id="meta_description" name="meta_description" class="form-control"
                                   value="{{ $portfolio->meta_description }}">
                            <span class="text-danger">{{ $errors->first('meta_description') }}</span>
                        </div>

                        <div class="form-group {{ $errors->has('meta_keywords') ? 'has-error' : '' }}">
                            <label for="meta_keywords">Ключевые слова</label>
                            <input type="text" id="meta_keywords" name="meta_keywords" class="form-control"
                                   value="{{ $portfolio->meta_keywords }}">
                            <span class="text-danger">{{ $errors->first('meta_keywords') }}</span>
                        </div>

                        <input class="btn btn-success btn-lg btn-block" type="submit" id="submit-store"
                               value="Добавить новое портфолио">
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop
