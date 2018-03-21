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
                        <a class="whatsapp" href=""><i class="fab fa-whatsapp"></i> +7(495)978-90-28</a><br>
                        <a class="viber" href=""><i class="fab fa-viber"></i> +7(495)978-90-28</a>
                    </div>
                </div>

                <div class="col-sm-4 marginbottom">
                    <div class="contact-detail-box">
                        <i class="fas fa-envelope fa-5x"></i>
                        <h4>E-mail</h4>
                        <address>
                            <a href="mailto:example@gmail.com">example@gmail.com</a>
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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63943.70502780472!2d30.29051271076633!3d59.94473940001762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4696378cc74a65ed%3A0x6dc7673fab848eff!2z0KHQsNC90LrRgi3Qn9C10YLQtdGA0LHRg9GA0LMsINCg0L7RgdGB0LjRjw!5e0!3m2!1sru!2s!4v1521471103891"
                            width="100%" height="375" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

                <div class="col-sm-6">
                    <form action="" class="contact-form" method="post">

                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="nm" placeholder="Имя" required=""
                                   autofocus="">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" id="phone"
                                   onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="10"
                                   placeholder="Телефон" required="">
                        </div>

                        <div class="form-group form_left">
                            <input type="email" class="form-control" id="email" name="em" placeholder="Емаил*"
                                   required="">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control textarea-contact" rows="5" id="comment" name="FB"
                                      placeholder="Сообщение*" required=""></textarea>
                        </div>
                        <button class="btn btn-default btn-send"><span class="glyphicon glyphicon-send"></span>
                            Отправить
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@stop