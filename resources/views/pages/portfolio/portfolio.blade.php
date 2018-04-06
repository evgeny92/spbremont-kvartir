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

    <section id="portfolio-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center caption-h3">
                    <h3>Наши выполненые работы</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="hovereffect">
                        <img src="img/superbox-full-10.jpg" width="230px" alt="">
                        <div class="overlay">
                            <h2>3 комнатная квартира</h2>
                            <p class="info">Евроремонт</p>
                            <a class="btn btn-portfolio" href=""><span class="glyphicon glyphicon-eye-open"></span> Подробнее</a>
                        </div>
                    </div>

                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="hovereffect">
                        <img src="img/superbox-full-14.jpg" width="230px" alt="">
                        <div class="overlay">
                            <h2>3 комнатная квартира</h2>
                            <p class="info">Евроремонт</p>
                            <a class="btn btn-portfolio" href="#"><span class="glyphicon glyphicon-eye-open"></span> Подробнее</a>
                        </div>
                    </div>

                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="hovereffect">
                        <img src="img/superbox-full-9.jpg" width="230px" alt="">
                        <div class="overlay">
                            <h2>3 комнатная квартира</h2>
                            <p class="info">Евроремонт</p>
                            <a class="btn btn-portfolio" href="#"><span class="glyphicon glyphicon-eye-open"></span> Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="hovereffect">
                        <img src="img/superbox-full-10.jpg" width="230px" alt="">
                        <div class="overlay">
                            <h2>3 комнатная квартира</h2>
                            <p class="info">Евроремонт</p>
                            <a class="btn btn-portfolio" href="#"><span class="glyphicon glyphicon-eye-open"></span> Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop