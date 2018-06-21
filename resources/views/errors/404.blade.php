@extends('layouts.main')

@section('meta-tags')
    <title>Страница не найдена</title>
@stop

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="error-template">
                <h1>Упсс!</h1>
                <h2>Добро пожаловать на &laquo;страницу 404&raquo;<br> нашего сайта</h2>
                <div class="error-details">
                    К сожалению, страница, которую Вы запрашиваете, не существует.<br>
                    Переходите на главную страницу – там Вы также сможете найти много полезной информации!
                </div>
                <div class="error-actions">
                    <a href="{{ route('/') }}" class="btn btn-posts btn-lg"><span class="glyphicon glyphicon-home"></span> На главную</a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection