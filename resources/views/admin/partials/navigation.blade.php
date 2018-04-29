<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="#">Админка</a>
    </div>

    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

    <ul class="nav navbar-nav navbar-left navbar-top-links">
        <li><a href="#"><i class="fa fa-home fa-fw"></i> На сайт</a></li>
    </ul>

    <ul class="nav navbar-right navbar-top-links">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <b class="caret"></b>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> Профиль</a></li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Настройки</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Выход</a></li>
            </ul>
        </li>
    </ul>
    <!-- /.navbar-top-links -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav">
                <li><a href="{{ url('admin') }}"><i class="fa fa-dashboard fa-fw"></i> Главная</a></li>
                <li><a href="{{ url('admin/portfolio') }}"><i class="fa fa-suitcase fa-fw"></i> Портфолио</a></li>
                <li><a href="{{ url('admin/articles') }}"><i class="fa fa-edit fa-fw"></i> Статьи</a></li>
            </ul>
        </div>
    </div>

</nav>