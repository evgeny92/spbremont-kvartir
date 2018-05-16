@extends('admin.layouts.main')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Статьи</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-10">
            @include('admin.partials.messages')
            <a href="{{ route('articles.create') }}" class="btn btn-primary btn-md btn-margin-left">Добавить статью <i
                        class="glyphicon glyphicon-plus"></i> </a>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>№</th>
                            <th>Заголовок</th>
                            <th>Картинка</th>
                            <th>Дата</th>
                            <th class="text-center">Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($articles as $key => $article)
                            <tr>
                                <td>{{ $article->id }}</td>
                                <td><a href="{{ route('articles.show', $article->id) }}">{{ str_limit($article->article_title, 40) }}</a></td>
                                <td><img src="{{ asset('img/articles/' . $article->article_image) }}" width="70"
                                         height="50">
                                </td>
                                {{--<td>{{ str_limit($article->article_content, 100) }}</td>--}}
                                <td>{{ $article->created_at->format('d.m.y') }}</td>
                                <td class="text-center">
                                    <a href="{{ route('articles.show', $article->id) }}" class="btn btn-info btn-sm"
                                       title="Подробнее" data-toggle="tooltip" data-placement="top"><i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{ route('articles.edit', $article->id) }}"
                                       class="btn btn-warning btn-sm" title="Редактировать" data-toggle="tooltip"
                                       data-placement="top"><i class="fa fa-edit"></i>
                                    </a>
                                    {!! Form::open(['route' => ['articles.destroy', $article->id], 'style' => 'display:inline', 'class' => 'delete-article', 'method' => 'DELETE']) !!}
                                    <button class="btn btn-danger btn-sm" type="submit" title="Удалить" data-toggle="tooltip"
                                            data-placement="top"><i class="glyphicon glyphicon-trash"></i>
                                    </button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->

            </div>
            <!-- /.panel-body -->
            <div class="text-center">{!! $articles->links() !!}</div>
        </div>
    </div>

@stop