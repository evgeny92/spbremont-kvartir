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
                <div class="col-md-12 text-center caption-h3">
                    <h3>Одиночная страница(заголовок)</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <!--      <div class="well">
                              <h4>Описание объекта</h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab at deserunt eligendi nisi numquam provident, sed sint unde voluptates voluptatum! Dolorum, numquam quas.</p>
                          </div>-->
                    <div class="panel panel-default">
                        <div class="panel-heading"><strong>Описание Объекта</strong></div>
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consectetur est illum maiores vel. Accusamus accusantium alias aspernatur aut consequatur dolores dolorum in, iste labore nobis obcaecati sapiente voluptatem voluptates!
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="popup-gallery">
                        <div class="col-sm-3 col-xs-6 hover01">
                            <a href="{{ asset('img/superbox-full-10.jpg') }}">
                                <img src="{{ asset('img/superbox-full-10.jpg') }}">
                            </a>
                        </div>
                        <div class="col-sm-3 col-xs-6 hover01">
                            <a href="{{ asset('img/superbox-full-3.jpg') }}">
                                <img class="hover01" src="{{ asset('img/superbox-full-3.jpg') }}">
                            </a>
                        </div>
                        <div class="col-sm-3 col-xs-6 hover01">
                            <a href="{{ asset('img/superbox-full-14.jpg') }}">
                                <img src="{{ asset('img/superbox-full-14.jpg') }}">
                            </a>
                        </div>
                        <div class="col-sm-3 col-xs-6 hover01">
                            <a href="{{ asset('img/superbox-full-9.jpg') }}">
                                <img src="{{ asset('img/superbox-full-9.jpg') }}">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop