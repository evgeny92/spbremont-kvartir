@extends('admin.layouts.main')

@section('meta-tags')
    <title>Панель управления | Профиль пользователя</title>
@stop

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header text-center">Профиль пользователя</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            @include('admin.profile.message')
            <div class="well">

                {!! Form::open(['route'=>'updateUserProfile']) !!}
                <div class="form-group">
                    <label for="apartment_project">Имя пользователя</label>
                    <input type="text" id="name" name="name"
                           class="form-control" value="{{ Auth::user()->name }}">
                </div>
                <div class="form-group">
                    <label for="apartment_area">Е-майл пользователя</label>
                    <input type="email" id="email" name="email"
                           class="form-control" value="{{ Auth::user()->email }}">
                </div>

                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Изменить данные</button>

                {!! Form::close() !!}
                <hr>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <dl class="dl-horizontal">
                            <label>Добавлен:</label>
                            <p>{{ Auth::user()->created_at->format('d.m.y H:i') }}</p>
                        </dl>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <dl class="dl-horizontal">
                            <label>Последнее обновление:</label>
                            <p>{{ Auth::user()->updated_at->format('d.m.y H:i') }}</p>
                        </dl>
                    </div>
                </div>
            </div>

        </div>
    </div>

@stop