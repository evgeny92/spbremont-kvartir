<!--banner -->
<div class="topbar">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <a class="navbar-brand pull-left img-responsive" href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}"
                                                                                        alt="logo"/></a>
            </div>
            <div class="col-md-4">
                <p class="pull-right phone-mail">
                    <a href="tel:+79111813560"> <i class="fa fa-phone"></i> +7 (911) 181-35-60</a><br>
                    <a href="mailto:example@gmail.com"><i class="fa fa-envelope"></i> example@gmail.com</a>
                </p>
            </div>
        </div>
    </div>
</div>
<!--end banner -->

<!-- start header -->
<header>
    <div class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse ">
                <ul class="nav navbar-nav">
                    <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">Главная</a></li>
                    <li class="{{ Request::is('price') ? 'active' : '' }}"><a href="/price">Прайс-лист</a></li>
                    <li class="{{ Request::is('portfolio') ? 'active' : '' }}"><a  href="/portfolio">Портфолио</a></li>
                    <li class="{{ Request::is('articles') ? 'active' : '' }}"><a href="/articles">Статьи</a></li>
                    <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="/contact">Контакты</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- end header -->