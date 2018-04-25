@extends('layouts.main')

@section('styles')
    <link href="{{ asset('css/unite-gallery.css') }}" rel="stylesheet"/>
@stop

@section('content')

    <section id="inner-headline">
        <div class="container">
            <div class="row">
                {!! Breadcrumbs::render('singlePortfolio', $portfolio) !!}
            </div>
        </div>
    </section>

    <section id="single-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 top-caption">
                    <h3>{{ $portfolio->portfolio_title }}</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7 hidden-sm hidden-xs">
                    <div class="image">
                        <img src="{{ asset('img/' . $photo->filename) }}" class="img-responsive" width="600px" alt="">
                    </div>
                </div>
                <div class="col-md-5">
                    <h3 class="text-center object-caption">Характеристика объекта</h3>
                    <div class="notice notice-info">
                        <strong>Проект квартиры:</strong> <span class="pull-right">{{ $portfolio->apartment_project }}</span>
                    </div>
                    <div class="notice notice-info">
                        <strong>Площадь:</strong> <span class="pull-right">{{ $portfolio->apartment_area }}</span>
                    </div>
                    <div class="notice notice-info">
                        <strong>Вид ремонта:</strong> <span class="pull-right">{{ $portfolio->type_repair }}</span>
                    </div>
                    <div class="notice notice-info">
                        <strong>Год выполнения:</strong> <span class="pull-right">{{ $portfolio->year_implementation }}</span>
                    </div>
                    <div class="notice notice-info">
                        <strong>Срок выполнения:</strong> <span class="pull-right">{{ $portfolio->deadline }}</span>
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
                <div id="gallery" style="display:none;">
                    @foreach($photos as $photo)
                        <img alt="" src="{{ asset('img/' . $photo->filename) }}"
                             data-image="{{ asset('img/' . $photo->filename) }}"/>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@stop

@section('scripts')
    <script src="{{ asset('js/unitegallery.min.js') }}"></script>
    <script src="{{ asset('js/ug-theme-tiles.js') }}"></script>
    <script type="text/javascript">
        jQuery(function($) {
            $("#gallery").unitegallery({
                gallery_theme: "tiles"
            });
        });
    </script>
@stop