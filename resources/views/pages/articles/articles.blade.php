@extends('layouts.main')

@section('content')

    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Data</li>
                </ol>
            </div>
        </div>
    </section>

    <section id="posts-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center caption-h3">
                    <h3>Полезные статьи о ремонте квартир</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="well hover02">
                        <img class="img-responsive" src="{{ asset('img/service1.jpg') }}" alt="">
                        <h3>Что собой представляет косметический ремонт</h3>
                        <p>Поверхностное облагораживание помещения. Обычно новые обои клеются на старые сверху, а
                            потолки окрашиваются не перешпаклёвываясь. Такой ремонт не подразумевает замены окон и
                            дверей на новые.</p>
                        <a class="btn btn-posts" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Подробнее</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="well hover02">
                        <img class="img-responsive" src="{{ asset('img/service2.jpg') }}" alt="">
                        <h3>Что собой представляет капитальный ремонт</h3>
                        <p>Поверхностное облагораживание помещения. Обычно новые обои клеются на старые сверху, а
                            потолки окрашиваются не перешпаклёвываясь. Такой ремонт не подразумевает замены окон и
                            дверей на новые.</p>
                        <a class="btn btn btn-posts" href="single.html"><span
                                    class="glyphicon glyphicon-eye-open"></span> Подробнее</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="well hover02">
                        <img class="img-responsive" src="{{ asset('img/service3.jpg') }}" alt="">
                        <h3>Что собой представляет авторский ремонт</h3>
                        <p>Поверхностное облагораживание помещения. Обычно новые обои клеются на старые сверху, а
                            потолки окрашиваются не перешпаклёвываясь. Такой ремонт не подразумевает замены окон и
                            дверей на новые.</p>
                        <a class="btn btn-posts" href="single.html"><span class="glyphicon glyphicon-eye-open"></span>
                            Подробнее</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

@stop