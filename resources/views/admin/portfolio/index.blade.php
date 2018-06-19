@extends('admin.layouts.main')

@section('meta-tags')
    <title>Панель управления | Портфолио</title>
@stop

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Портфолио</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-11">
            @include('admin.partials.messages')
            <a href="{{ route('portfolio.create') }}" class="btn btn-primary btn-md btn-margin-left">Добавить портфолио
                <i
                        class="glyphicon glyphicon-plus"></i> </a>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>№</th>
                            <th>Заголовок</th>
                            <th>Кол-во комнат</th>
                            <th>Тип ремонта</th>
                            <th>Дата</th>
                            <th class="text-center">Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($portfolios as $portfolio)
                            <tr>
                                <td>{{ $portfolio->id }}</td>
                                <td>
                                    <a href="{{ route('portfolio.show', $portfolio->id) }}">{{ str_limit($portfolio->portfolio_title, 50) }}</a>
                                </td>
                                <td>{{ $portfolio->apartment_project }}</td>
                                <td>{{ $portfolio->type_repair }}</td>
                                <td>{{ $portfolio->created_at->format('d.m.y') }}</td>
                                <td class="text-center">
                                    <a href="{{ route('portfolio.show', $portfolio->id) }}" class="btn btn-info btn-sm"
                                       title="Подробнее" data-toggle="tooltip" data-placement="top"><i
                                                class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{ route('portfolio.edit', $portfolio->id) }}"
                                       class="btn btn-warning btn-sm" title="Редактировать" data-toggle="tooltip"
                                       data-placement="top"><i class="fa fa-edit"></i>
                                    </a>
                                    {!! Form::open(['route' => ['portfolio.destroy', $portfolio->id], 'style' => 'display:inline', 'class' => 'delete', 'method' => 'DELETE']) !!}
                                    <button class="btn btn-danger btn-sm" type="submit" title="Удалить"
                                            data-toggle="tooltip"
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
            <div class="text-center">{!! $portfolios->links() !!}</div>
        </div>
    </div>

@stop