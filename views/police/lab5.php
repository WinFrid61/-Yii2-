<?php
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\PoliceAsset;

$this->title = 'ГИБДД';
?>

<section class="main-info">
    <div class="container">
        <div class="row-fluid">
            <div class="span9">
                <h4>Неофициальный сайт ГУОБДД МВД России</h4>
                <p class="no-margin">Деятельность Госавтоинспекции регламентируется Указом Президента России № 711 от 15 июня 1998 года «О дополнительных мерах по обеспечению безопасности дорожного движения».</p>
            </div>
            <div class="span3">
                <a class="btn btn-success btn-large pull-right btn-block" href="https://xn--90adear.xn--p1ai/">Настоящий сайт ГИБДД</a>
            </div>
        </div>
    </div>
</section>

<!--Services-->
<section id="services">
    <div class="container">
        <div class="center gap">
            <h3>Мы предлагаем</h3>
            <p class="lead">Самые лучшие условия для наших работников</p>
        </div>

        <div class="row-fluid">
            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-globe icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">График 2/2</h4>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                    </div>
                </div>
            </div>            

            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-thumbs-up-alt icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Спорткар</h4>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                    </div>
                </div>
            </div>            

            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-leaf icon-medium icon-rounded"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Высокая зарплата</h4>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="gap"></div>

        <div class="row-fluid">
            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-shopping-cart icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Вас никогда не оштрафуют</h4>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                    </div>
                </div>
            </div>            

            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-globe icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Работа по всему миру</h4>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                    </div>
                </div>
            </div>            

            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-globe icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Полное вранье</h4>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--/Services-->

<section id="recent-works">
    <div class="container">
        <div class="center">
            <h3>Галерея</h3>
            <p class="lead">Работаем без выходных, штрафы выписываем регулярно</p>
        </div>  
        <div class="gap"></div>
        <ul class="gallery col-4">
            <!--Item 1-->
            <li>
                <div class="preview">
                    <img alt=" " src="images/portfolio/thumb/item1.jpg">
                </div>
                <div class="desc">
                    <h5>Красавчик №1</h5>
                </div>         
            </li>
            <!--/Item 1--> 

            <!--Item 2-->
            <li>
                <div class="preview">
                    <img alt=" " src="images/portfolio/thumb/item2.jpg">
                </div>
                <div class="desc">
                    <h5>Красавчик №2</h5>
                </div>         
            </li>
            <!--/Item 2-->

            <!--Item 3-->
            <li>
                <div class="preview">
                    <img alt=" " src="images/portfolio/thumb/item3.jpg">
                </div>
                <div class="desc">
                    <h5>Красавчик №3</h5>
                </div>         
            </li>
            <!--/Item 3--> 

            <!--Item 4-->
            <li>
                <div class="preview">
                    <img alt=" " src="images/portfolio/thumb/item4.jpg">
                </div>
                <div class="desc">
                    <h5>Красавчик №4</h5>
                </div>         
            </li>
            <!--/Item 4-->               

        </ul>
    </div>

</section>

<section id="clients" class="main">
    <div class="container">
        <div class="row-fluid">
            <div class="span2">
                <div class="clearfix">
                    <h4 class="pull-left">Наши партнеры</h4>
                    <div class="pull-right">
                        <a class="prev" href="#myCarousel" data-slide="prev"><i class="icon-angle-left icon-large"></i></a> <a class="next" href="#myCarousel" data-slide="next"><i class="icon-angle-right icon-large"></i></a>
                    </div>
                </div>
                <p>Те, кому небезразличны судьбы других граждан...</p>
				<p>Те, кто нам помогает!</p>
            </div>
            <div class="span10">
                <div id="myCarousel" class="carousel slide clients">
                  <!-- Carousel items -->
                  <div class="carousel-inner">
                    <div class="active item">
                        <div class="row-fluid">
                            <ul class="thumbnails">
                                <li class="span3"><a href="#"><img src="images/sample/clients/client1.png"></a></li>
                                <li class="span3"><a href="#"><img src="images/sample/clients/client2.png"></a></li>
                                <li class="span3"><a href="#"><img src="images/sample/clients/client3.png"></a></li>
                                <li class="span3"><a href="#"><img src="images/sample/clients/client4.png"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row-fluid">
                            <ul class="thumbnails">
                                <li class="span3"><a href="#"><img src="images/sample/clients/client4.png"></a></li>
                                <li class="span3"><a href="#"><img src="images/sample/clients/client3.png"></a></li>
                                <li class="span3"><a href="#"><img src="images/sample/clients/client2.png"></a></li>
                                <li class="span3"><a href="#"><img src="images/sample/clients/client1.png"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row-fluid">
                            <ul class="thumbnails">
                                <li class="span3"><a href="#"><img src="images/sample/clients/client1.png"></a></li>
                                <li class="span3"><a href="#"><img src="images/sample/clients/client2.png"></a></li>
                                <li class="span3"><a href="#"><img src="images/sample/clients/client3.png"></a></li>
                                <li class="span3"><a href="#"><img src="images/sample/clients/client4.png"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Carousel items -->

            </div>
        </div>
    </div>
</div>
</section>

<!--Bottom-->
<section id="bottom" class="main">
    <!--Container-->
    <div class="container">

        <!--row-fluids-->
        <div class="row-fluid">

            <!--Contact Form-->
            <div class="span5">
                <h4>Адрес</h4>
                <ul class="unstyled address">
                    <li>
                        <i class="icon-home"></i><strong>Адрес:</strong> 344065, Ростов-на-Дону<br>ул. 50 лет Ростсельмаша, 15.
                    </li>
                    <li>
                        <i class="icon-envelope"></i>
                        <strong>Email:</strong> gibdd@gmail.com
                    </li>
                    <li>
                        <i class="icon-globe"></i>
                        <strong>Сайт:</strong> https://гибдд.рф
                    </li>
                    <li>
                        <i class="icon-phone"></i>
                        <strong>Дежурная часть:</strong> +7 863 249-34-04
                    </li>
                </ul>
            </div>
            <!--End Contact Form-->

            <!--Important Links-->
            <div id="tweets" class="span4">
                <h4>Об организации</h4>
                <div>
                    <ul class="arrow">
                        <li><a href="https://xn--90adear.xn--p1ai/about/direction/federal">Руководство ГИБДД</a></li>
                        <li><a href="https://xn--90adear.xn--p1ai/docs">Нормативные документы</a></li>
                        <li><a href="https://xn--90adear.xn--p1ai/about/regdirection">Руководство Госавтоинспекции в регионе</a></li>
                        <li><a href="https://xn--90adear.xn--p1ai/about/history">История Госавтоинспекции</a></li>
                        <li><a href="https://xn--90adear.xn--p1ai/about/veterans/news">Ветеранская организация</a></li>
                        <li><a href="https://xn--90adear.xn--p1ai/about/personal">Подготовка кадров</a></li>
                        <li><a href="https://xn--90adear.xn--p1ai/divisions">Подразделения Госавтоинспекции</a></li>
                        <li><a href="https://xn--90adear.xn--p1ai/international">Международная работа</a></li>
                    </ul>
                </div>  
            </div>
            <!--Important Links-->

            <!--Archives-->
            <div id="archives" class="span3">
                <h4>Случаи ДТП 2021</h4>
                <div>
                    <ul class="arrow">
                        <li><a>Январь 2021 (132)</a></li>
                        <li><a>Февраль 2021 (84)</a></li>
                        <li><a>Март 2021 (31)</a></li>
                        <li><a>Апрель 2021 (196)</a></li>
                        <li><a>Май 2021 (55)</a></li>
                        <li><a>Июнь 2021 (41)</a></li>
                        <li><a>Июль 2021 (88)</a></li>
                    </ul>
                </div>
            </div>
            <!--End Archives-->

            

    </div>
    <!--/row-fluid-->
</div>
<!--/container-->

</section>
<!--/bottom-->
