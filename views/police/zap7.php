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
		<div class="center gap">
		
		<h1>Запрос - Данные о ДТП, совершаемых водителями в нетрезвом виде и процент от общего кол-ва ДТП</h1>
		
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
					<th> Дата ДТП (Всего ДТП: <?=$counter ?> | <?= $counter/$prozent*100 ?>%) </th>
					<th> Тип ДТП </th>
					<th> Улица </th>
					<th> Описание </th>
					</tr>
				</thead>
				<tbody>
				<?//= var_dump($tabl) ?>
				<?php foreach ($tabl as $tb): ?>
					<tr>
						<td> <?= Html::encode("{$tb->DTP_date}")?></td>
						<td> <?= Html::encode("{$tb->dtp_type['Type']}")?></td>
						<td> <?= Html::encode("{$tb->org_dtp_street['Street']}")?></td>
						<td> <?= Html::encode("{$tb->Desc}")?></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</section>