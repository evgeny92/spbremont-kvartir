@extends('admin.layouts.main')

@section('meta-tags')
    <title>Панель управления | Создание новой статьи</title>
@stop

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header text-center">Создание новой статьи</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            @include('admin.partials.messages')
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ route('articles.index') }}" class="btn btn-primary btn-sm"><i
                                class="glyphicon glyphicon-arrow-left"></i> Все статьи</a>
                </div>
                <div class="panel-body">
                    {!! Form::open([ 'route' => 'articles.store', 'files' => 'true']) !!}
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">

                            <div class="form-group {{ $errors->has('article_title') ? 'has-error' : '' }}">
                                <label for="article_title">Заголовок статьи</label>
                                <input type="text" id="article_title" name="article_title" class="form-control"
                                       value="{{ old('article_title') }}">
                                <span class="text-danger">{{ $errors->first('article_title') }}</span>
                            </div>

                            <div class="form-group {{ $errors->has('article_image') ? 'has-error' : '' }}">
                                <label for="article_image">Изображение статьи</label>
                                <input type="file" id="article_image" name="article_image" class="form-control">
                                <span class="text-danger">{{ $errors->first('article_image') }}</span>
                            </div>

                            <div class="form-group {{ $errors->has('meta_description') ? 'has-error' : '' }}">
                                <label for="meta_description">Мета описание</label>
                                <input type="text" id="meta_description" name="meta_description" class="form-control"
                                       value="{{ old('meta_description') }}">
                                <span class="text-danger">{{ $errors->first('meta_description') }}</span>
                            </div>

                            <div class="form-group {{ $errors->has('meta_keywords') ? 'has-error' : '' }}">
                                <label for="meta_keywords">Ключевые слова</label>
                                <input type="text" id="meta_keywords" name="meta_keywords" class="form-control"
                                       value="{{ old('meta_keywords') }}">
                                <span class="text-danger">{{ $errors->first('meta_keywords') }}</span>
                            </div>

                            <div class="form-group {{ $errors->has('article_content') ? 'has-error' : '' }}">
                                <label for="article_content">Текст статьи</label>
                                <textarea name="article_content" id="editor1" class="form-control" cols="30"
                                          rows="10"></textarea>
                                <span class="text-danger">{{ $errors->first('article_content') }}</span>
                            </div>

                            <input class="btn btn-success btn-lg btn-block" type="submit" value="Добавить новую статью">
                        </div>

                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script src="//cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
@stop