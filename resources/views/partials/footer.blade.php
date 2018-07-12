<footer>
    <div class="container">
        <div class="col-md-5 col-sm-5">
            <h4>О нас</h4>
            <div class="widget">
                <p>Более 10 лет мы предлагаем ремонтные услуги на рынке <strong>Санкт-Петербурга</strong>. У нас хорошая
                    команда профессионалов, квалифицированных и с многолетним опытом работы в области строительства. Мы
                    предлагаем вам полный спектр услуг, начиная с разработки дизайна проекта, выбора материалов,
                    выполнения всех ремонтных работ любой сложности по самым высоким стандартам.</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-3 col-md-offset-1">
            <h4>Навигация сайта</h4>
            <div class="widget">
                <ul class="link-list">
                    <li><a href="{{ route('/') }}">Главная</a></li>
                    <li><a href="{{ route('price') }}">Прайс-лист</a></li>
                    <li><a href="{{ route('portfolio') }}">Портфолио</a></li>
                    <li><a href="{{ route('articles') }}">Статьи</a></li>
                    <li><a href="{{ route('contact') }}">Контакты</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 col-sm-3">
            <div class="widget">
                <h4>Наши контакты</h4>
                <p>
                    <strong>Адрес:</strong><br>
                    Россия, г. Санкт-Петербург
                </p>
                <p>
                    <strong>Телефон:</strong><br>
                    <a href="tel:+79111813560"><span class="glyphicon glyphicon-phone"></span> +7 (911) 181-35-60</a>
                </p>
                <p>
                    <strong>Почта:</strong><br>
                    <a href="mailto:example@gmail.com"><span class="glyphicon glyphicon-envelope"></span> example@gmail.com</a>
                </p>
            </div>
            <div class="uSocial-Share" data-pid="4c880e3ef4d68b95cdb4041d5d0594a4" data-type="share" data-options="round-rect,style1,default,absolute,horizontal,size32,eachCounter0,counter1,counter-after,nomobile" data-social="vk,ok,fb"></div>
        </div>
    </div>
    <div id="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright">
                        <p class="text-center">
                            <strong><a href="">www.spbremont-kvartir.ru</a></strong> - отделка и ремонт квартир,
                            коттеджей, офисов в
                            Санкт-Петербурге {{ date('Y') }}г.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>