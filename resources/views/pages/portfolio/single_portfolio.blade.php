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

    <section id="single-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 top-caption">
                    <h3>Ул. Рыбацкое, 3-ёх комнатная квартира</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7 hidden-sm hidden-xs">
                    <div class="image">
                        <img src="{{ asset('img/3213.jpg') }}" class="img-responsive" width="600px" alt="">
                    </div>
                </div>
                <div class="col-md-5">
                    <h3 class="text-center object-caption">Характеристика объекта</h3>
                    <div class="notice notice-info">
                        <strong>Проект квартиры:</strong> <span class="pull-right">2-ух комнатная</span>
                    </div>
                    <div class="notice notice-info">
                        <strong>Площадь:</strong> <span class="pull-right">150кв.м</span>
                    </div>
                    <div class="notice notice-info">
                        <strong>Вид ремонта:</strong> <span class="pull-right">Евроремонт</span>
                    </div>
                    <div class="notice notice-info">
                        <strong>Год выполнения:</strong> <span class="pull-right">2017г</span>
                    </div>
                    <div class="notice notice-info">
                        <strong>Срок выполнения:</strong> <span class="pull-right">7 месяцев</span>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="gallery-caption text-center">
                    <h3>Галерея</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 image-size">
                    <div class="popup-gallery">
                        <div class="col-md-3 col-sm-4 col-xs-6 hover01">
                            <a href="{{ asset('img/superbox-full-10.jpg') }}">
                                <img src="{{ asset('img/superbox-full-10.jpg') }}">
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6 hover01">
                            <a href="{{ asset('img/superbox-full-3.jpg') }}">
                                <img class="hover01" src="{{ asset('img/superbox-full-3.jpg') }}">
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6 hover01">
                            <a href="{{ asset('img/superbox-full-9.jpg') }}">
                                <img src="{{ asset('img/superbox-full-9.jpg') }}">
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6 hover01">
                            <a href="{{ asset('img/superbox-full-14.jpg') }}">
                                <img src="{{ asset('img/superbox-full-14.jpg') }}">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop