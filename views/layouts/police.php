<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\PoliceAsset;

PoliceAsset::register($this);
?>

<style>
.btn-primary-outline {
	padding: 9px;
    background-color: transparent;
    border-color: transparent;
}
</style>

<?php $this->beginPage() ?>

<html class="no-js"> <!--<![endif]-->
<head>

    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

	


    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>

<body>
	<?php $this->beginBody() ?>

     <!--Header-->
	 
    <header class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a id="logo" class="pull-left" href="http://localhost/basic/web/index.php?r=police/lab5"></a>
				<br>
                <div class="nav-collapse pull-right">    
				 <?php
	$menu = [
	['label' => 'На главную', 'url' => ['/site/index']],
	['label' => 'Запросы', 'url' => ['/police/zapros']],
    /*['label' => 'Запросы', 'url' => ['#'], 'options' => ['class' => 'dropdown'], 'items'=>
	['label' => 'Список запросов', 'url' => ['/police/zapros']],
	['label' => 'Запрос №1', 'url' => ['/police/zap1']],
	['label' => 'Запрос №2', 'url' => ['/police/zap2']],
	['label' => 'Запрос №3', 'url' => ['/police/zap3']],
	['label' => 'Запрос №4', 'url' => ['/police/zap4']],
	['label' => 'Запрос №5', 'url' => ['/police/zap5']],
	['label' => 'Запрос №6', 'url' => ['/police/zap6']],
	['label' => 'Запрос №7', 'url' => ['/police/zap7']],
	['label' => 'Запрос №8', 'url' => ['/police/zap8']],
	['label' => 'Запрос №9', 'url' => ['/police/zap9']],
	['label' => 'Запрос №10', 'url' => ['/police/zap10']],
	['label' => 'Запрос №11', 'url' => ['/police/zap11']],
	]
	],*/
	];
?>
	<ul class="nav">
	<?
	if (Yii::$app->user->isGuest) {
    $menu[] = ['label' => 'Авторизация', 'url' => ['/police/login']];
    $menu[] = ['label' => 'Регистрация', 'url' => ['/police/signup']];
} else {
    $menu[] = '<li>'
        . Html::beginForm(['/police/logout'], 'post')
        . Html::submitButton(
            'Выйти (' . Yii::$app->user->identity->username . ')',
            ['class' => 'btn-primary-outline logout']
        )
        . Html::endForm()
        . '</li>';
}
    echo Nav::widget([
        'items' => $menu,
    ]);
    ?>
	</ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </header>
    <!-- /header -->

    <!--Slider-->
    <section id="slide-show">
     <div id="slider" class="sl-slider-wrapper">

        <!--Slider Items-->    
        <div class="sl-slider">
            <!--Slider Item1-->
            <div class="sl-slide item1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                <div class="sl-slide-inner">
                    <div class="container">
                        <img class="pull-right" src="images/sample/slider/img1.png" alt="" />
                        <h2>Ты сдашь лабу</h2>
                        <h3 class="gap">Терпение и труд - вот и автомат</h3>
                        <a class="btn btn-large btn-transparent" href="images/avtomat.png">Получить автомат</a>
                    </div>
                </div>
            </div>
            <!--/Slider Item1-->

            <!--Slider Item2-->
            <div class="sl-slide item2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                <div class="sl-slide-inner">
                    <div class="container">
                        <img class="pull-right" src="images/sample/slider/img2.png" alt="" />
                        <h2>Соблюдай ПДД</h2>
                        <h3 class="gap">Будь умницей. Ты же не хочешь штраф?</h3>
                        <a class="btn btn-large btn-transparent" href="http://www.pdd24.com/">Соблюдать правила ПДД</a>
                    </div>
                </div>
            </div>
            <!--Slider Item2-->

            <!--Slider Item3-->
            <div class="sl-slide item3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                <div class="sl-slide-inner">
                   <div class="container">
                    <img class="pull-right" src="images/sample/slider/img3.png" alt="" />
                    <h2>ВУ, СТС, ОСАГО</h2>
                    <h3 class="gap">Держи при себе все необходимые документы. Иначе...</h3>
                    <a class="btn btn-large btn-transparent" href="https://xn--90adear.xn--p1ai/mens/avtovladeltsam">Подробнее</a>
                </div>
            </div>
        </div>
        <!--Slider Item3-->

    </div>
    <!--/Slider Items-->

    <!--Slider Next Prev button-->
    <nav id="nav-arrows" class="nav-arrows">
        <span class="nav-arrow-prev"><i class="icon-angle-left"></i></span>
        <span class="nav-arrow-next"><i class="icon-angle-right"></i></span> 
    </nav>
    <!--/Slider Next Prev button-->

</div>
<!-- /slider-wrapper -->           
</section>
<!--/Slider-->
<?= $content ?>

<!--Footer-->
<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span5 cp">
                Неофициальный сайт Министерства внутренних дел Российской Федерации <br>
				&copy; 2021 <a target="_blank" href="https://гибдд.рф" title="Free Twitter Bootstrap WordPress Themes and HTML templates">МВД России</a>.
			</div>
            <!--/Copyright-->

            <div class="span6">
                <ul class="social pull-right">
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-pinterest"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    <li><a href="#"><i class="icon-google-plus"></i></a></li>                       
                    <li><a href="#"><i class="icon-youtube"></i></a></li>
                    <li><a href="#"><i class="icon-tumblr"></i></a></li>                        
                    <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    <li><a href="#"><i class="icon-rss"></i></a></li>
                    <li><a href="#"><i class="icon-github-alt"></i></a></li>
                    <li><a href="#"><i class="icon-instagram"></i></a></li>                   
                </ul>
            </div>

            <div class="span1">
                <a id="gototop" class="gototop pull-right" href="#"><i class="icon-angle-up"></i></a>
            </div>
            <!--/Goto Top-->
        </div>
    </div>
</footer>
<!--/Footer-->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>