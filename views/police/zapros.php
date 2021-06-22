<?php
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\PoliceAsset;

$this->title = 'ГИБДД - запросы';
?>

<section class="main-info">

    <div class="container">

		<div class="center gap">
            <h3>Запросы</h3>
            <p class="lead">Выполнил студент группы ВИС-31 Шадрин Артем</p>
        </div>
		
        <div class="col-lg-4">
                <a class="btn btn-success btn-large pull-right btn-block" href="/basic/web/index.php?r=police/zap1">Перечень организаций (серия/период)</a>
				<a class="btn btn-success btn-large pull-right btn-block" href="/basic/web/index.php?r=police/zap2">Сведения о владельце ТС (гос. номер)</a>
				<a class="btn btn-success btn-large pull-right btn-block" href="/basic/web/index.php?r=police/zap3">Досье на ТС (гос. номер)</a>
				<a class="btn btn-success btn-large pull-right btn-block" href="/basic/web/index.php?r=police/zap4">Автовладельцы, не прошедшие техосмотр</a>
        </div>
            <div class="col-lg-4">
                <a class="btn btn-success btn-large pull-right btn-block" href="/basic/web/index.php?r=police/zap5">Статистика ДТП (тип/период)</a>
				<a class="btn btn-success btn-large pull-right btn-block" href="/basic/web/index.php?r=police/zap6">Анализ ДТП</a>
				<a class="btn btn-success btn-large pull-right btn-block" href="/basic/web/index.php?r=police/zap7">ДТП - водители в нетрезвом виде</a>
				<a class="btn btn-success btn-large pull-right btn-block" href="/basic/web/index.php?r=police/zap8">Машины в розыске (Тип ДТП)</a>
        </div>
		<div class="col-lg-4">
                <a class="btn btn-success btn-large pull-right btn-block" href="/basic/web/index.php?r=police/zap9">Эффективность розыскной работы</a>
				<a class="btn btn-success btn-large pull-right btn-block" href="/basic/web/index.php?r=police/zap10">Перечень угонов (период)</a>
				<a class="btn btn-success btn-large pull-right btn-block" href="/basic/web/index.php?r=police/zap11">Статистика по угонам</a>
				<a class="btn btn-success btn-large pull-right btn-block" href="/basic/web/index.php?r=admin">Админка</a>
				
        </div>
    </div>
</section>