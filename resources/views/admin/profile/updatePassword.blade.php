@extends('admin.layouts.main')

@section('meta-tags')
    <title>Панель управления | Изменение пароля пользователя</title>
@stop

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header text-center">Изменить пароль пользователя</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-lg-offset-4">
            @include('admin.profile.message')
            <div class="well">

                {!! Form::open(['route'=>'updateUserPassword']) !!}

                <div class="form-group">
                    <label for="apartment_project">Старый пароль</label>
                    <input type="password" id="old_password" name="old_password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="apartment_area">Новый пароль</label>
                    <input type="password" id="new_password" name="new_password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="apartment_area">Повтор нового пароля</label>
                    <input type="password" id="confirm_password" name="confirm_password" class="form-control">
                </div>

                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Изменить пароль</button>

                {!! Form::close() !!}

            </div>

        </div>
    </div>

@stop