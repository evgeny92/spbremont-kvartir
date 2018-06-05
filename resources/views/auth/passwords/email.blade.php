@extends('layouts.main')

@section('content')
<div class="container">
    {{--<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>--}}
    <div class="card card-container">
        @include('partials.messages')
        <img id="profile-img" class="profile-img-card" src="{{ asset('img/rpass.png') }}"/>
        <p id="profile-name" class="profile-name-card">Заполните поле для сброса пароля</p>

        {!! Form::open(['route'=>'password.email','class'=>'form-signin']) !!}

            <span id="reauth-email" class="reauth-email"></span>
            <input type="email" id="email" name="email" class="form-control"
                   placeholder="Е-майл" value="{{ old('email') }}" required autofocus>

            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Отправить</button>

        {!! Form::close() !!}

    </div><!-- /card-container -->
</div>
@endsection
