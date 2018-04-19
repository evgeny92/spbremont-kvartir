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
                @foreach($portfolios as $portfolio)
                <div class="col-md-3 col-sm-6">
                    <div class="hovereffect">
                        @foreach($portfolio->photos as $photo)
                            @if($loop->first)
                                <img src="{{ asset('img/' . $photo->filename) }}" width="230px" alt="">
                            @endif
                        @endforeach
                        <div class="overlay">
                            <h2>{{ $portfolio->apartment_project }}</h2>
                            <p class="info">{{ $portfolio->type_repair }}</p>
                            <a class="btn btn-portfolio" href="{{ url('portfolio', $portfolio->portfolio_slug) }}"><span class="glyphicon glyphicon-eye-open"></span> Подробнее</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@stop