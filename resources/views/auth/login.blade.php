@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="card card-container">
            @include('partials.messages')
            <img id="profile-img" class="profile-img-card" src="{{ asset('img/login.png') }}"/>
            <p id="profile-name" class="profile-name-card">Заполните поля для входа</p>

            {!! Form::open(['route'=>'login','class'=>'form-signin']) !!}

            <span id="reauth-email" class="reauth-email"></span>
            <input type="email" id="email" name="email" class="form-control"
                   placeholder="Е-майл" value="{{ old('email') }}" required autofocus>

            <input type="password" id="password" name="password" class="form-control" placeholder="Пароль" required>

            <div id="remember" class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me" {{ old('remember') ? 'checked' : '' }}> Запомнить
                </label>
            </div>

            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Войти</button>

            <a href="{{ route('password.request') }}" class="forgot-password">Забыли пароль?</a>

            {!! Form::close() !!}

        </div><!-- /card-container -->
    </div>
@endsection

