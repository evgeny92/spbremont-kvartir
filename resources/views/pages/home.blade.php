@extends('layouts.main')

@section('meta-tags')
    <title>Ремонтно-отделочные работы в Санкт-Петербурге | Под ключ с гарантией</title>
    <meta name="description" content="Качественный ремонт квартир и домов под ключ в Санкт-Петербурге. Профессиональный подход, более 10 лет опыта. Замер и смета - бесплатно!">
    <meta name="keywords" content="ремонт квартир спб, ремонт квартир в спб, ремонт квартир санкт-петербург, ремонт квартир в санкт-петербурге, ремонтно-отделочные работы, ремонт под ключ, ремонт в петербурге под ключ, отделка петербург, евро ремонт спб">
    <meta property="og:title" content="Ремонтно-отделочные работы В СПБ | Под ключ с гарантией">
    <meta property="og:description" content="Качественный ремонт квартир и домов под ключ в Санкт-Петербурге. Профессиональный подход, более 10 лет опыта. Замер и смета - бесплатно!">
@stop

@section('styles')
    <link href="{{ asset('css/style-review.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/slippry.css') }}" rel="stylesheet"/>
@stop

@section('content')

    <section id="main-caption">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <h3>Строительство и ремонтно-отделочные работы под ключ с гарантией в <br> Санкт-Петербурге</h3>
                    <p>В том числе, мы выполняем все виды сантехнических, электромонтажных, сварочных работ, <br> а
                        также загородное строительство «под ключ». Мы всегда готовы предоставить вам бесплатную
                        консультацию по вашей квартире, которую вы хотите отремонтировать.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="main-slider">
        <ul id="slider">
            <li>
                <a href="#slide1">
                    <img src="{{ asset('img/slides/1.jpg') }}" alt="Евроремонт квартир - <a href='http://spbremont-kvartir/articles/evroremont'>узнать подробнее</a>">
                </a>
            </li>
            <li>
                <a href="#slide2">
                    <img src="{{ asset('img/slides/2.jpg') }}" alt="Капитальный ремонт квартир - <a href='http://spbremont-kvartir/articles/kapitalnyy-remont'>узнать подробнее</a>">
                </a>
            </li>
            <li>
                <a href="#slide3">
                    <img src="{{ asset('img/slides/3.jpg') }}" alt="Косметический ремонт квартир - <a href='http://spbremont-kvartir/articles/kosmeticheskiy-remont'>узнать подробнее</a>">
                </a>
            </li>
        </ul>
    </section>

    <section id="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="text-center">
                        <h2>Почему люди выбирают нас</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <ul>
                        <li>
                            У нас работают только квалифицированные российские специалисты. Опыт мастеров в ремонте
                            более 10 лет.
                        </li>
                        <li>
                            Мы используем многократно проверенные материалы. Технология же соблюдается до миллиметра.
                        </li>
                        <li>
                            Мы работаем без привлечения подрядчиков и посредников.
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <ul>
                        <li>
                            Мы осуществляем строгий контроль качества на каждом этапе выполняемых работ.
                        </li>
                        <li>
                            Подстраиваемся под каждого клиента, от индивидуальных до дизайнерских проектов.
                        </li>
                        <li>
                            Мы держим свое слово и укладываемся в обещанные сроки 100%.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h3>Самым ценным для нас является Ваше доверие, а важным – тот факт, чтобы Вы остались довольны.
                        Мы работаем так, чтобы удовлетворить все требования и пожелания наших клиентов.</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Review Carousel -->
    <section id="quote">
        <div class="container">
            <div class="row">
                <div class='col-md-offset-2 col-md-8 text-center'>
                    <h2>Отзывы наших клиентов</h2>
                </div>
            </div>
            <div class='row'>
                <div class='col-md-12'>
                    <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                        <!-- Bottom Carousel Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#quote-carousel" data-slide-to="1"></li>
                            <li data-target="#quote-carousel" data-slide-to="2"></li>
                        </ol>
                        <!-- Carousel Slides / Quotes -->
                        <div class="carousel-inner">
                            <!-- Review 1 -->
                            <div class="item active">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-3 text-center">
                                            <img class="img-circle" alt="Отзыв клиента" src="{{ asset('img/review1.jpg') }}"></div>
                                        <div class="col-sm-8">
                                            <p>
                                                По рекомендации знакомых обратилась сюда. Решила сделать маме ремонт в квартире к юбилею. Перестелили полы, выровняли стены и потолки, у мамы хрущёвка и стены там были все вкривь и вкось. Теперь все ровно, будто так и было всегда. Постелили ламинат — ничего нигде не скрипит и не гнется. В кухне уложили кафельную плитку на стенах и на полу — все просто супер. Вообще все сделали очень аккуратно, ремонтом мама полностью довольна!
                                            </p>
                                            <small>Юлия</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- Review 2 -->
                            <div class="item">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-3 text-center">
                                            <img class="img-circle" alt="Отзыв клиента" src="{{ asset('img/review2.jpg') }}"></div>
                                        <div class="col-sm-8">
                                            <p>
                                                Спешу поделиться своим отзывом. Недавно с женой решили, что наша ванная комната изжила себя, надумали ее обновить. Долго искали подходящих мастеров, читали отзывы, но все сомневались. И тут знакомые посоветовали отличных мастеров. Мы решили рискнуть и абсолютно не пожалели! Результат приятно удивил — мастера все сделали в срок, качественно, чисто, добротно. Кафельную плитку уложили идеально, ванну и унитаз установили на отлично. Наша ванная теперь просто красавица. Заходим в нее не только помыться, но и полюбоваться.
                                            </p>
                                            <small>Сергей</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- Review 3 -->
                            <div class="item">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-3 text-center">
                                            <img class="img-circle" alt="Отзыв клиента" src="{{ asset('img/review3.jpg') }}"></div>
                                        <div class="col-sm-8">
                                            <p>
                                                Отличная бригада мастеров, все делают быстро и качественно. Прайс прозрачный, никаких переплат, превратили мою обычную однушку в приличные апартаменты. Работу сдают в срок, качеством я доволен, советую!
                                            </p>
                                            <small>Станислав</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                        <!-- Carousel Buttons Next/Prev -->
                        <a data-slide="prev" href="#quote-carousel" class="left carousel-control"> <i
                                    class="fa fa-chevron-left"></i>
                        </a>
                        <a data-slide="next" href="#quote-carousel" class="right carousel-control"> <i
                                    class="fa fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Review Carousel-->

@stop

@section('scripts')
    <script src="{{ asset('js/slippry.min.js') }}"></script>
    <script>
        //Slider Slippry
        $('#slider').slippry({
            pager: !0,
            pause: 7000
        });
    </script>
@stop