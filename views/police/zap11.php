<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\PoliceAsset;
use yii\widgets\ActiveForm;

$this->title = 'ГИБДД - запросы';
?>

<style>
	p {
	  font-family: 'Times New Roman', Times, serif;
	  font-size: 150%;
	  text-indent: 50px;
	  }
</style>
<section class="main-info">
	<div class="container">
		<h1 align="center">Запрос - Статистика по угонам</h1>
		<big>Самая угоняемая марка машины в Ростове-на-Дону: </big>
		<p>- <?php echo $markm['fname'], ", зарегистрировано ", $markm['count'], " угона" ?></p>
		<br>
		<big>Самая надежная сигнализация:</big>
		<p>- <?php echo $signalm['sname'] ?></p>
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
					<th> Объявлено в розыск (Всего: <?=$counter ?>, Найдено <?=$counter2 ?> | <?echo round($counter2 / $counter*100, 0)?>% ) </th>
					<th> Транспорт </th>
					<th> Улица </th>
					<th> Найдено </th>
					</tr>
				</thead>
				<tbody>
				<?//= var_dump($tabl) ?>
				<?php foreach ($tabl as $tb): ?>
					<tr>
						<td> <?= Html::encode("{$tb['date']}")?></td>
						<td> <?= Html::encode("{$tb['marka']}")?></td>
						<td> <?= Html::encode("{$tb['street']}")?></td>
						<td> <?= Html::encode("{$tb['nashli']}")?></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
	</div>
</section>