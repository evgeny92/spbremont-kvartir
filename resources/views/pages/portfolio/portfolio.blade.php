@extends('layouts.main')

@section('meta-tags')
    <title>Портфолио квартир после ремонта в Санкт-Петербурге</title>
    <meta name="description" content="Портфолио наших выполненых работ по ремонту квартир под ключ в Санкт-Петербурге контроль качества на каждом этапе.">
    <meta name="keywords" content="портфолио, выполненые работы, фотогалерея, ремонта квартир, отделка">
    <meta property="og:title" content="Портфолио квартир после ремонта в Санкт-Петербурге">
    <meta property="og:description" content="Портфолио наших выполненых работ по ремонту квартир под ключ в Санкт-Петербурге контроль качества на каждом этапе.">
@stop

@section('content')

    <section id="inner-headline">
        <div class="container">
            <div class="row">
                {!! Breadcrumbs::render('portfolio') !!}
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
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <a class="list-quotes" href="{{ url('portfolio', $portfolio->portfolio_slug) }}">
                            @foreach($portfolio->photos as $photo)
                                @if($loop->first)
                                    <img src="{{ asset('img/portfolio/' . $photo->portfolio_photos) }}"
                                         class="img-responsive" alt="Портфоли ремонт квартир">
                                @endif
                            @endforeach
                            <div class="quotes">
                                <h1>{{ $portfolio->portfolio_title }} / Тип ремонта: {{ $portfolio->type_repair }} </h1>
                                <p>
                                    <span class="glyphicon glyphicon-eye-open"></span> Подробнее
                                </p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@stop

