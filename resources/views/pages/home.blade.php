@extends('layouts.main')

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
                    <img src="{{ asset('img/slides/1.jpg') }}"
                         alt="Ремонт квартир под ключ! <a href='https://vk.com'>Узнать подробнее</a>">
                </a>
            </li>
            <li>
                <a href="#slide2">
                    <img src="{{ asset('img/slides/2.jpg') }}" alt="Ремонт квартир под ключ! <a href='#link'>Узнать подробнее</a>">
                </a>
            </li>
            <li>
                <a href="#slide3">
                    <img src="{{ asset('img/slides/3.jpg') }}" alt="Ремонт квартир под ключ! <a href='#link'>Узнать подробнее</a>">
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
                <div class='col-md-8 col-md-offset-2'>
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
                                            <img class="img-circle" src="{{ asset('img/team1.jpg') }}"></div>
                                        <div class="col-sm-9">
                                            <p>
                                                Neque porro quisquam est qui dolorem ipsum quia dolor sit amet,
                                                consectetur, adipisci velit!
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit
                                                in arcu blandit.
                                            </p>
                                            <small>Someone famous</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- Review 2 -->
                            <div class="item">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-3 text-center">
                                            <img class="img-circle" src="{{ asset('img/team2.jpg') }}"></div>
                                        <div class="col-sm-9">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor
                                                nec lacus ut tempor. Mauris.
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit
                                                in arcu blandit.
                                            </p>
                                            <small>Someone famous</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- Review 3 -->
                            <div class="item">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-3 text-center">
                                            <img class="img-circle" src="{{ asset('img/team3.jpg') }}"></div>
                                        <div class="col-sm-9">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit
                                                in arcu blandit.
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit
                                                in arcu blandit.
                                            </p>
                                            <small>Someone famous</small>
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