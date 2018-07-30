@extends('layouts.main')

@section('meta-tags')
    <title>Наши контакты в Санкт-Петербурге</title>
    <meta name="description" content="Наши контакты в Санкт-Петербурге, ждём вашего звонка +7 (911) 181-35-60.">
    <meta name="keywords" content="ремонт квартир в спб, отделка санкт-петербург, евроремонт спб">
    <meta property="og:title" content="Наши контакты в Санкт-Петербурге">
    <meta property="og:description" content="Наши контакты в Санкт-Петербурге, ждём вашего звонка +7 (911) 181-35-60.">
@stop

@section('content')

    <section id="inner-headline">
        <div class="container">
            <div class="row">
                {!! Breadcrumbs::render('contact') !!}
            </div>
        </div>
    </section>

    <section id="contact-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center caption-h3">
                    <h3>Обратная связь с нами</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm-4 marginbottom">
                    <div class="contact-detail-box">
                        <i class="fas fa-phone fa-5x"></i>
                        <h4>Viber, WhatsApp</h4>
                        <a class="viber" href="viber://chat?number=79111813560"><i class="fab fa-viber"></i> Viber</a><br>
                        <a class="whatsapp" href="whatsapp://send?phone=+79202685400"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                    </div>
                </div>

                <div class="col-sm-4 marginbottom">
                    <div class="contact-detail-box">
                        <i class="fas fa-envelope fa-5x"></i>
                        <h4>E-mail</h4>
                        <address>
                            <a href="mailto:spbremkvar@gmail.com">spbremkvar@gmail.com</a>
                        </address>
                    </div>
                </div>
                <div class="col-sm-4 marginbottom">
                    <div class="contact-detail-box">
                        <i class="fa far fa-clock fa-5x"></i>
                        <h4>Режим работы</h4>
                        <p>
                            Пн. - Пт. с 08:00 до 20:00<br>
                            Сб. - Вс. с 09:00 до 20:00
                        </p>
                    </div>
                </div>
            </div>

            <div class="row margintop">
                <div class="col-sm-6 hidden-xs">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d304233.6835110816!2d30.127771585556232!3d59.93771457281709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4696378cc74a65ed%3A0x6dc7673fab848eff!2z0KHQsNC90LrRgi3Qn9C10YLQtdGA0LHRg9GA0LMsINCg0L7RgdGB0LjRjw!5e0!3m2!1sru!2s!4v1528748163352" width="100%" height="375" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

                <div class="col-sm-6">
                    {!! Form::open(['id' => 'contact-form', 'class' => 'contact-form']) !!}

                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Имя" minlength="2" maxlength="20" required autofocus>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Телефон(по желанию)">
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Емаил" required>
                    </div>

                    <div class="form-group">
                            <textarea class="form-control textarea-contact" rows="5" id="message" name="message"
                                      placeholder="Сообщение" minlength="10" maxlength="500" required></textarea>
                    </div>

                    <button class="btn btn-default btn-send"><span class="glyphicon glyphicon-send"></span>
                        Отправить
                    </button>

                    <span class="output_message"></span>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>
@stop

@section('scripts')
    <!-- Mask Plugin -->
    <script type="text/javascript" src="{{ asset('js/jquery.mask.min.js') }}"></script>
    <!-- Phone mask -->
    <script>$('input[name="phone"]').mask('+0 (000) 000-00-00');</script>

@stop