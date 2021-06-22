<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\PoliceAsset;
use yii\widgets\ActiveForm;

$this->title = 'ГИБДД - запросы';
?>
<section class="main-info">
	<div class="container">
		<h1 align="center">Запрос - Эффективность розыскной работы</h1>
		
		<big>Всего машин найдено:  <?=$counter2 ?>, что составляет <?echo round($counter2 / $counter*100, 0) ?>% всей розыскной работы</big>
		<br></br>
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
					<th> Объявлено в розыск (Всего: <?=$counter ?> Найдено: <?=$counter2 ?> | <?echo round($counter2 / $counter*100, 0)?>%) </th>
					<th> Причина </th>
					<th> Транспорт </th>
					<th> Улица </th>
					<th> Найдено </th>
					</tr>
				</thead>
				<tbody>
				<?//= var_dump($tabl) ?>
				<?php foreach ($tabl as $tb): ?>
					<tr>
						<td> <?= Html::encode("{$tb->Rozisk_date}")?></td>
						<td> <?= Html::encode("{$tb->dtp_rozisk_reason['Reason']}")?></td>
						<td> <?= Html::encode("{$tb->transport['Firm']}")?></td>
						<td> <?= Html::encode("{$tb->org_dtp_street['Street']}")?></td>
						<td> <?= Html::encode("{$tb->Nashli}")?></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
</section>