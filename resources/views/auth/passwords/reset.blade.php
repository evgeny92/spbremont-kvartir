@extends('layouts.main')

@section('content')
<div class="container">

    <div class="card card-container">
        @include('partials.messages')
        <img id="profile-img" class="profile-img-card" src="{{ asset('img/newpassword.png') }}"/>
        <p id="profile-name" class="profile-name-card">Заполните поля для сброса пароля</p>

        {!! Form::open(['route'=>'password.request','class'=>'form-signin']) !!}

        <input type="hidden" name="token" value="{{ $token }}">

        <span id="reauth-email" class="reauth-email"></span>

        <input type="email" id="email" name="email" class="form-control"
               placeholder="Е-майл" value="{{ $email or old('email') }}" required autofocus>

        <input type="password" id="password" name="password" class="form-control" placeholder="Новый пароль" required>

        <input type="password" id="password-confirm" name="password_confirmation"  class="form-control" placeholder="Повтор пароля" required>

        <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Сбросить пароль</button>

        {!! Form::close() !!}

    </div><!-- /card-container -->
</div>
@endsection
