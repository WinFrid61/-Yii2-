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
		<h1 align="center">Запрос - Анализ ДТП</h1>
		<big>Самое опасное место в Ростове-на-Дону: </big>
		<p>- <?php echo $strm['sname'], ", там произошло ", $strm['count'], " ДТП" ?></p>
		<br>
		<big>Самая частая причина ДТП: </big>
		<p>- <?php echo $reasonm['rname'] ?></p>
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
					<th> Дата ДТП (Всего ДТП: <?=$counter ?>) </th>
					<th> Причина ДТП </th>
					<th> Тип ДТП </th>
					<th> Улица </th>
					<th> Описание </th>
					</tr>
				</thead>
				<tbody>
				<?//= var_dump($tabl) ?>
				<?php foreach ($tabl as $tb): ?>
					<tr>
						<td> <?= Html::encode("{$tb['date']}")?></td>
						<td> <?= Html::encode("{$tb['reas']}")?></td>
						<td> <?= Html::encode("{$tb['type']}")?></td>
						<td> <?= Html::encode("{$tb['street']}")?></td>
						<td> <?= Html::encode("{$tb['desc']}")?></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
	</div>
</section>